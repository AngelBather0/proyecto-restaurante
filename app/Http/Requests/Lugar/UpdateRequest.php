<?php

namespace App\Http\Requests\Lugar;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;

class UpdateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    protected function prepareForValidation()
    {
        $this->merge([
            'Estado' => $this->Estado == "true" ? true : false
        ]);

    }
    
    public function rules(): array
    {
        return [
            'ProvinciaID' => 'required|exists:provincias,ProvinciaID',
            'Nombre' => 'nullable|string|max:100',
            'Descripcion' => 'nullable|string',
            'TipoSitioID' => 'required|exists:tipositios,TipoSitioID',
            'Latitud' => 'nullable|numeric',
            'Longitud' => 'nullable|numeric',
            'Actividades' => 'required|array|min:1',
            'Actividades.*' => 'integer|exists:actividades,ActividadID',
            'Galeria' => 'nullable|array',
            'Galeria.*' => 'file|mimes:jpeg,png,jpg,gif|max:16384',
            'Estado' => 'nullable|boolean',
        ];
    }    
}
