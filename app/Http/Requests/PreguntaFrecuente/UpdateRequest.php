<?php

namespace App\Http\Requests\PreguntaFrecuente;

use Illuminate\Foundation\Http\FormRequest;

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
            'Index' => $this->Index == "true" ? true : false,
            'Estado' => $this->Estado == "true" ? true : false
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
            'Pregunta' => 'required|string|max:100',
            'Respuesta' => 'required|string',
            'Index' => 'boolean',
            'Estado' => 'boolean'
        ];
    }
}
