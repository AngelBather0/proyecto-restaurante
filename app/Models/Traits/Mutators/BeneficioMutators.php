<?php

namespace App\Models\Traits\Mutators;

use App\Traits\Traducciones;

trait BeneficioMutators
{
    use Traducciones;

    public function getNombreAttribute($value)
    {
        return $this->traducir($this->BeneficioID, 'Nombre', $value);
    }

    public function getDescripcionAttribute($value)
    {
        return $this->traducir($this->BeneficioID, 'Descripcion', $value);
    }
    
}