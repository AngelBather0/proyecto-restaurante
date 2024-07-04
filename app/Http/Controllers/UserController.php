<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Spatie\Permission\Models\Role;
use App\Services\TraduccionService;
use Illuminate\Support\Facades\Hash;


class UserController extends Controller
{
    protected $traduccionService;
    protected $campos = ['Idiomas','Experiencias'];

    public function __construct(TraduccionService $traduccionService)
    {
        $this->traduccionService = $traduccionService;
        $this->traduccionService->setTabla('guias');
    }

    public function index()
    {
        $users = User::orderBy('created_at', 'desc')->paginate(10);
        return view('users.index', compact('users'));
    }

    public function create()
    {
        $roles = Role::all();
        return view('users.create', compact('roles'));
    }

    public function store(Request $request)
    {
        $user = new User();
        $user->name = $request->Nombre;
        $user->email = $request->Email;
        $user->password = bcrypt($request->psw);
        $user->assignRole($request->rol);
        $user->save();

        return redirect()->route('users.index')->with('success', 'Usuario agregado exitosamente');

    }

    public function show($id)
    {
        $user = User::find($id);
        return view('users.show', compact('user'));
    }

    public function edit($id)
    {
        $user = User::find($id);
        $roles = Role::all();
        
        return view('users.edit', compact('user', 'roles'));
    }

    public function update(Request $request, $id)
    {
        $user = User::findOrFail($id);

        $request->validate([
            'Nombre' => 'required|string|max:255',
            'Email' => 'required|string|email|max:255|unique:users,email,' . $user->id,
            'newpsw' => 'nullable|min:8',
            'rol' => 'required|string|exists:roles,name'
        ]);

        if ($request->actpsw) {
            if (!Hash::check($request->actpsw, $user->password)) {
                return back()->withErrors(['actpsw' => 'La contraseña actual no es correcta.']);
            }
        }

        $user->name = $request->Nombre;
        $user->email = $request->Email;
        $user->syncRoles($request->rol);

        if ($request->filled('newpsw')) {
            $user->password = Hash::make($request->newpsw);
        }

        $user->save();

        return redirect()->route('users.index')->with('success', 'Usuario actualizado correctamente.');
    }

    public function destroy($id)
    {
        $user = User::find($id);
        
        $user->delete();

        return redirect()->route('users.index')->with('success', 'Usuario eliminado exitosamente');
    }

    public function search(Request $request){
        $term = $request->term;
        $users = User::where('name', 'LIKE', "%$term%")->paginate(10);

        return view('users.index', compact('users'));
    }
}
