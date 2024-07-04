<?php

namespace App\Models\Traits\Mutators;

use App\Traits\Traducciones;

trait TipoEventoMutators
{
    use Traducciones;

    public function getNombreAttribute($value)
    {
        return $this->traducir($this->TipoEventoID, 'Nombre', $value);
    }
    
}