<?php

namespace App\Http\Requests\Lugar;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
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
            'Estado' => true
        ]);
    }
    
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules()
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
            'Galeria' => 'array',
            'Galeria.*' => 'file|mimes:jpeg,png,jpg,gif|max:16384',
            'Estado' => 'nullable|boolean',
        ];
    }
}
