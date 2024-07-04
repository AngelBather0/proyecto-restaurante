<?php

namespace App\Http\Requests\Informacion;

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
            'Ascensor' => $this->Ascensor == "true" ? true : false,
            'Parqueo' => $this->Parqueo == "true" ? true : false,
            'Accesibilidad' => $this->Accesibilidad == "true" ? true : false
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
            'AlojamientoID' => 'required|exists:alojamientos,AlojamientoID', 
            'Pisos' => 'nullable|string|max:200',
            'Espacio' => 'nullable|string|max:200',
            'Ascensor' => 'boolean',
            'Parqueo' => 'boolean',
            'Accesibilidad' => 'boolean'
        ];
    }
}
