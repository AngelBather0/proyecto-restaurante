<?php

namespace App\Traits;

use Illuminate\Support\Facades\App;
use App\Models\Traduccion;

trait Traducciones
{

    public function traducir($id, $campo, $default = '')
    {
        $locale = App::getLocale();

        if($this->locale == $locale){
            return $default;
        }

        $traduccion = Traduccion::where('Tabla', $this->table)
                                ->where('Campo',$campo)
                                ->where('RegistroID', $id)
                                ->where('Locale', $locale)
                                ->first();

        if($traduccion){
            return $traduccion->Contenido;
        }else{
            return $default;
        }
    }
}