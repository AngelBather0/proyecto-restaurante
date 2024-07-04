<?php

namespace App\Models\Traits\Mutators;

use App\Traits\Traducciones;

trait InformacionMutators
{
    use Traducciones;
    
    public function getPisosAttribute($value)
    {
        return $this->traducir($this->InformacionID, 'Pisos', $value);
    }
    
    public function getEspacioAttribute($value)
    {
        return $this->traducir($this->InformacionID, 'Espacio', $value);
    }
}