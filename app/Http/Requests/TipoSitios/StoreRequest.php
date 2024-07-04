<?php

namespace App\Http\Requests\TipoSitios;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
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
                'max:100',
                Rule::unique('tipositios') // nombre de la tabla en la base de datos
            ],
            'Imagen' => 'required|image|mimes:jpeg,png,jpg,gif|max:4096',
        ];
    }
}
