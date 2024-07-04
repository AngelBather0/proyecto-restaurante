<?php

namespace App\Models\Traits\Mutators;

use App\Traits\Traducciones;

trait TipoAlojamientoMutators
{
    use Traducciones;

    public function getNombreAttribute($value)
    {
        return $this->traducir($this->TipoAlojamientoID, 'Nombre', $value);
    }
    
}