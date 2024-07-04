<?php

namespace App\Models\Traits\Mutators;

use App\Traits\Traducciones;

trait EventoMutators
{
    use Traducciones;

    public function getNombreAttribute($value)
    {
        return $this->traducir($this->EventoID, 'Nombre', $value);
    }

    public function getDescripcionAttribute($value)
    {
        return $this->traducir($this->EventoID, 'Descripcion', $value);
    }

    public function getTipoAttribute($value)
    {
        return $this->traducir($this->EventoID, 'Tipo', $value);
    }

    public function getLugarAttribute($value)
    {
        return $this->traducir($this->EventoID, 'Lugar', $value);
    }
}