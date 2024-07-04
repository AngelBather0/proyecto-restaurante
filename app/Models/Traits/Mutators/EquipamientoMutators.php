<?php

namespace App\Models\Traits\Mutators;

use App\Traits\Traducciones;

trait EquipamientoMutators
{
    use Traducciones;

    public function getNombreAttribute($value)
    {
        return $this->traducir($this->EquipamientoID, 'Nombre', $value);
    }
    
}