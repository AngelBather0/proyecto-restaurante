<?php

namespace App\Models\Traits\Mutators;

use App\Traits\Traducciones;

trait TipoSitioMutators
{
    use Traducciones;

    public function getNombreAttribute($value)
    {
        return $this->traducir($this->TipoSitioID, 'Nombre', $value);
    }
    
}