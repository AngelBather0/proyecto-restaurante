<?php

namespace App\Http\Requests\Provincia;

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
            'Nombre' => [
                'required',
                'string',
                'max:100',
                Rule::unique('provincias') // nombre de la tabla en la base de datos
            ],
            'Descripcion' => 'required|string',
            'Imagen' => 'image|mimes:jpeg,png,jpg,gif|max:8192',
            'GastosEstimados' => 'required|numeric|min:0',
        ];
    }
}
