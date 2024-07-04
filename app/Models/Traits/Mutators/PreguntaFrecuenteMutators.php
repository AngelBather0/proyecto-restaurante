<?php

namespace App\Models\Traits\Mutators;

use App\Traits\Traducciones;

trait PreguntaFrecuenteMutators
{
    use Traducciones;
    
    public function getPreguntaAttribute($value)
    {
        return $this->traducir($this->PreguntaFrecuenteID, 'Pregunta', $value);
    }

    public function getRespuestaAttribute($value)
    {
        return $this->traducir($this->PreguntaFrecuenteID, 'Respuesta', $value);
    }
    
}