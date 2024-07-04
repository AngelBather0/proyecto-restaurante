<?php

namespace App\Models\Traits\Mutators;

use App\Traits\Traducciones;

trait LugarMutators
{
    use Traducciones;

    public function getDescripcionAttribute($value)
    {
        return $this->traducir($this->LugarID, 'Descripcion', $value);
    }

    public function getTipoAttribute($value)
    {
        return $this->traducir($this->LugarID, 'Tipo', $value);
    }
}