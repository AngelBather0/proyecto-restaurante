<?php

namespace App\Models\Traits\Mutators;

use App\Traits\Traducciones;

trait ServicioMutators
{
    use Traducciones;

    public function getNombreAttribute($value)
    {
        return $this->traducir($this->ServicioID, 'Nombre', $value);
    }
    
}