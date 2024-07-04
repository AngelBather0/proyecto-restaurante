<?php

namespace App\Http\Controllers;

use App\Services\TraduccionService;
use App\Models\Guia;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\Guia\StoreRequest;
use App\Http\Requests\Guia\UpdateRequest;
use Illuminate\Http\Request;

class GuiaController extends Controller
{
    protected $traduccionService;
    protected $campos = ['Idiomas','Experiencias'];

    public function __construct(TraduccionService $traduccionService)
    {
        $this->traduccionService = $traduccionService;
        $this->traduccionService->setTabla('guias');
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $guias = Guia::orderBy('created_at', 'desc')->paginate(10);
        return view('guias.index', compact('guias'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('guias.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRequest $request)
    {
        $data = $request->validated();

        $idiomas = $request->Idiomas;

        if ($request->hasFile('Imagen')) {
            $image = $request->file('Imagen');
            $imageName = uniqid() . '.' . $image->getClientOriginalExtension();
            $image->move(storage_path('app/public/guias'), $imageName);
            $data['Imagen'] = $imageName; 
        } 

        $data['Idiomas'] = json_encode($idiomas);

        $guia = Guia::create($data);

        //                          ---------- Traduciones ----------
        // Llamar al método con locales predeterminados 'en', 'fr' y 'ru'        
        $this->traduccionService->create($guia->GuiaID, $this->campos, $data);

        return redirect()->route('guides.index')->with('success', 'Guia agregado exitosamente');

    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $guia = Guia::find($id);
        return view('guias.show', compact('guia'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $guia = Guia::find($id);
        
        return view('guias.edit', compact('guia'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRequest $request, $id)
    {
        $guia = Guia::find($id);

        $data = $request->validated();

        if ($request->hasFile('Imagen')) {

            $image = $request->file('Imagen');
            $imageName = uniqid() . '.' . $image->getClientOriginalExtension();

            if ($guia->Imagen) {
                Storage::delete('public/guias/' . $guia->Imagen);
            }

            $image->move(storage_path('app/public/guias'), $imageName);
            $data['Imagen'] = $imageName; 
        }

        //                          ---------- Campos a traducir ----------
        $cambios = [];

        foreach($this->campos as $campo){
            if($guia->{$campo} != $data[$campo]){
                $cambios[$campo] = $data[$campo];
            }
        }
        
        // Actualizando
        $guia->update($data);

        //                          ---------- Traduciones ----------
        if(!empty($cambios)){

            $campos = array_keys($cambios);
            // Llamar al método con locales predeterminados 'en', 'fr' y 'ru'
            $this->traduccionService->update($guia->GuiaID, $campos, $cambios);
        }
        //                           -----------       -----------

        return redirect()->route('guides.show', $guia->GuiaID )->with('success', 'Guia actualizado exitosamente');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $guia = Guia::find($id);

        if ($guia->Imagen) {
            Storage::delete('public/guias/' . $guia->Imagen);
        }

        //                          ---------- Traduciones ----------
        $this->traduccionService->delete($guia->GuiaID);
        //    
        
        $guia->delete();

        return redirect()->route('guides.index')->with('success', 'Guia eliminado exitosamente');
    }

    public function search(Request $request){
        $term = $request->term;
        $guias = Guia::where('Nombre', 'LIKE', "%$term%")->paginate(10);

        return view('guias.index', compact('guias'));
    }
}
