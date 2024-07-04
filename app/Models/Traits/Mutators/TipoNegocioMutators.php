<?php

namespace App\Models\Traits\Mutators;

use App\Traits\Traducciones;

trait TipoNegocioMutators
{
    use Traducciones;

    public function getNombreAttribute($value)
    {
        return $this->traducir($this->TipoNegocioID, 'Nombre', $value);
    }
    
}