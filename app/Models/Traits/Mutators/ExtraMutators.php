<?php

namespace App\Models\Traits\Mutators;

use App\Traits\Traducciones;

trait ExtraMutators
{
    use Traducciones;

    public function getNombreAttribute($value)
    {
        return $this->traducir($this->ExtraID, 'Nombre', $value);
    }
    
}