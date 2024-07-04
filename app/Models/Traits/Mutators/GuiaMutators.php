<?php

namespace App\Models\Traits\Mutators;

use App\Traits\Traducciones;

trait GuiaMutators
{
    use Traducciones;

    public function getIdiomasAttribute($value)
    {
        return $this->traducir($this->GuiaID, 'Idiomas', $value);
    }

    public function getExperienciasAttribute($value)
    {
        return $this->traducir($this->GuiaID, 'Experiencias', $value);
    }
}