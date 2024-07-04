<?php

namespace App\Http\Requests\Guia;

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
            'LugarID' => 'required|exists:lugares,LugarID',
            'Nombre' => 'required|string|max:100',
            'Telefono' => 'required|string|max:20',
            'Idiomas' => 'nullable|array',
            'Experiencias' => 'required|string',
            'Imagen' => 'image|mimes:jpeg,png,jpg,gif|max:8048',
            'Estado' => 'boolean'
        ];
    }
}
