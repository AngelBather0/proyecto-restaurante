<?php

namespace App\Http\Requests\Alojamiento;

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
            'ProvinciaID' => 'required|exists:provincias,ProvinciaID', // Asegura que el ProvinciaID exista
            'LugarID' => 'required|exists:lugares,LugarID',
            'Nombre' => 'required|string|max:100',
            'TipoAlojamientoID' => 'required|exists:tipoalojamientos,TipoAlojamientoID',
            'Descripcion' => 'required|string',
            'Telefono' => 'required|string|max:20',
            'PrecioPorNoche' => 'nullable|numeric|min:0',
            'Direccion' => 'nullable|string|max:200',
            'Latitud' => 'nullable|numeric|between:-90,90',
            'Longitud' => 'nullable|numeric|between:-180,180',
            'Galeria' => 'array',
            'Galeria.*' => 'file|mimes:jpeg,png,jpg,gif|max:16384',
            'Equipamientos' => 'required|array|min:1',
            'Equipamientos.*' => 'integer|exists:equipamientos,EquipamientoID',
            'Beneficios' => 'required|array|min:1',
            'Beneficios.*' => 'integer|exists:beneficios,BeneficioID',
            'Extras' => 'required|array|min:1',
            'Extras.*' => 'integer|exists:extras,ExtraID',
            'Cancelacion' => 'nullable|string',
            'Estado' => 'boolean'
            ];
    }
}
