<?php

namespace App\Http\Requests\Negocio;

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
    public function rules(): array
    {
        return [
            'ProvinciaID' => 'required|exists:provincias,ProvinciaID',
            'Nombre' => 'required|string|max:100',
            'TipoNegocioID' => 'required|exists:tiponegocios,TipoNegocioID',
            'Descripcion' => 'nullable|string',
            'Latitud' => 'nullable|numeric|between:-90,90',
            'Longitud' => 'nullable|numeric|between:-180,180',
            'Galeria' => 'array',
            'Galeria.*' => 'file|mimes:jpeg,png,jpg,gif|max:16384',
            'Estado' => 'boolean', 
        ];
    }
}
