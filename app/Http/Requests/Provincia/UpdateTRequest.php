<?php

namespace App\Http\Requests\Provincia;

use Illuminate\Foundation\Http\FormRequest;

class UpdateTRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'Descripcion' => 'required|string'
        ];
    }
}