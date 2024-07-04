<?php

namespace App\Http\Requests\Provincia;

use App\Models\Provincia;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateRequest extends FormRequest
{
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
            'Nombre' => [
                'required',
                'string',
                'max:100',],
            'Descripcion' => 'required|string',
            'Imagen' => 'image|mimes:jpeg,png,jpg,gif|max:8192',
            'GastosEstimados' => 'required|numeric|min:0',
            'Estado' => 'boolean'
        ];
    }
}