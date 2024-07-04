<?php

namespace App\Models\Traits\Mutators;

use App\Traits\Traducciones;

trait AlojamientoMutators
{
    use Traducciones;

    public function getDescripcionAttribute($value)
    {
        return $this->traducir($this->AlojamientoID, 'Descripcion', $value);
    }

    public function getTipoAttribute($value)
    {
        return $this->traducir($this->AlojamientoID, 'Tipo', $value);
    }

    public function getDireccionAttribute($value)
    {
        return $this->traducir($this->AlojamientoID, 'Direccion', $value);
    }


    public function getCancelacionAttribute($value)
    {
        return $this->traducir($this->AlojamientoID, 'Cancelacion', $value);
    }

}