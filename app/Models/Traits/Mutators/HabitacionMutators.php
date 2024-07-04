<?php

namespace App\Models\Traits\Mutators;

use App\Traits\Traducciones;

trait HabitacionMutators
{
    use Traducciones;
    
    public function getTituloAttribute($value)
    {
        return $this->traducir($this->HabitacionID, 'Titulo', $value);
    }
    
    public function getDescripcionAttribute($value)
    {
        return $this->traducir($this->HabitacionID, 'Descripcion', $value);
    }
}