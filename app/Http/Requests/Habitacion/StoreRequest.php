<?php

namespace App\Http\Requests\Habitacion;

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

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'AlojamientoID' => 'required|exists:alojamientos,AlojamientoID', 
            'IconoID' => 'required|exists:iconos,IconoID', 
            'Titulo' => 'required|string|max:100',
            'Descripcion' => 'nullable|string|max:100',
        ];
    }
}
