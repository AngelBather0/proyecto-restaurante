<?php

namespace App\Models\Traits\Mutators;

use App\Traits\Traducciones;

trait ProvinciaMutators
{
    use Traducciones;

    public function getDescripcionAttribute($value)
    {
        return $this->traducir($this->ProvinciaID, 'Descripcion', $value);
    }
    
}