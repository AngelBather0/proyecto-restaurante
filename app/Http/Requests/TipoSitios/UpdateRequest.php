<?php

namespace App\Http\Requests\TipoSitios;

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
            'Index' => $this->Index == "true" ? true : false
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
            'Nombre' => [
                'required',
                'string',
                'max:100'
            ],
            'Imagen' => 'image|mimes:jpeg,png,jpg,gif|max:4096',
            'Index' => 'boolean'
        ];
    }
}
