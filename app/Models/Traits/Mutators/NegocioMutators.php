<?php

namespace App\Models\Traits\Mutators;

use App\Traits\Traducciones;

trait NegocioMutators
{
    use Traducciones;

    public function getDescripcionAttribute($value)
    {
        return $this->traducir($this->NegocioID, 'Descripcion', $value);
    }

    public function getTipoAttribute($value)
    {
        return $this->traducir($this->NegocioID, 'Tipo', $value);
    }
}