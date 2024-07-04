<?php

namespace App\Models\Traits\Mutators;

use App\Traits\Traducciones;

trait ActividadMutators
{
    use Traducciones;
    
    public function getNombreAttribute($value)
    {
        return $this->traducir($this->ActividadID, 'Nombre', $value);
    }

    public function getDescripcionAttribute($value)
    {
        return $this->traducir($this->ActividadID, 'Descripcion', $value);
    }
    
}