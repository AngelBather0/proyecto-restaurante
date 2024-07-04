<?php

namespace App\Http\Requests\Evento;

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
            'TipoEventoID' => 'required|exists:tipoeventos,TipoEventoID',
            'Descripcion' => 'required|string',
            'FechaHora' => 'required|date',
            'Lugar' => 'required|string|max:100',
            'Latitud' => 'nullable|numeric|between:-90,90',
            'Longitud' => 'nullable|numeric|between:-180,180',
            'Imagen' => 'image|mimes:jpeg,png,jpg,gif|max:8048',
            'Estado' => 'boolean'
        ];
    }
}
