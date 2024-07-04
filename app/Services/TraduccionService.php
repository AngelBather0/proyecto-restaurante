<?php

namespace App\Services;

use App\Models\Traduccion;
use Stichoza\GoogleTranslate\GoogleTranslate;
use Illuminate\Support\Facades\Log;

class TraduccionService
{
    protected $baseLocales = ['en', 'fr', 'ru', 'de', 'it'];
    protected $tabla;

    public function setTabla($tabla)
    {
        $this->tabla = $tabla;
    }

    public function create($registroID, array $campos, $contenido, $setLocales = null)
    {
        $tr = new GoogleTranslate(); 
        $locales = $setLocales ?? $this->baseLocales;

        foreach ($locales as $locale) 
        {
            $tr->setSource(); // Asigna automáticamente la fuente según el texto proporcionado
            $tr->setTarget($locale);

            foreach ($campos as $campo) 
            {
                try {
                    // Verifica si $contenido[$campo] es un array
                    if (is_array($contenido[$campo])) {
                        // Si es un array, divide los elementos por comas y traduce cada elemento
                        $traducciones = array_map(function ($elemento) use ($tr) {
                            return $tr->translate($elemento);
                        }, explode(',', $contenido[$campo]));

                        // Une los elementos traducidos de nuevo en un string
                        $traduccion = implode(', ', $traducciones);
                    } else {
                        // Si no es un array, traduce el contenido directamente
                        if($contenido[$campo] == null || $contenido[$campo] == ""){
                            $traduccion = "";
                        }else{
                            $traduccion = $tr->translate($contenido[$campo]);
                        }
                    }

                    if ($traduccion === null) {
                        // Error durante la traducción o traducción nula, utiliza el valor base
                        $traduccion = $contenido[$campo];
                        // Registra el error
                        Log::error('Error durante la traducción: ' . 'Traducción Nula' );

                        Log::info('Traducción, error en datos:', [
                            'RegistroID' => $registroID,
                            'Tabla' => $this->tabla,
                            'Campo' => $campo,
                            'Contenido' => $traduccion,
                            'Locale' => $locale,
                        ]);
                    }

                    Traduccion::create([
                        'RegistroID' => $registroID,
                        'Tabla' => $this->tabla,
                        'Campo' => $campo,
                        'Contenido' => $traduccion,
                        'Locale' => $locale,
                    ]);

                } catch (\Exception $e) {

                    Traduccion::create([
                        'RegistroID' => $registroID,
                        'Tabla' => $this->tabla,
                        'Campo' => $campo,
                        'Contenido' => $contenido[$campo],
                        'Locale' => $locale,
                    ]);

                    // Registra el error
                    Log::error('Error durante la traducción: ' . $e->getMessage());
                }
            }
        }
    }

    public function update($registroID, array $campos, $contenido, $setLocales = null)
    {
        $tr = new GoogleTranslate();
        $locales = $setLocales ?? $this->baseLocales;

        foreach ($locales as $locale) 
        {
            $tr->setSource();
            $tr->setTarget($locale);

            foreach ($campos as $campo) 
            {
                try 
                {
                    // Verifica si $contenido[$campo] es un array
                    if (is_array($contenido[$campo])) {
                        // Si es un array, divide los elementos por comas y traduce cada elemento
                        $traducciones = array_map(function ($elemento) use ($tr) {
                            return $tr->translate($elemento);
                        }, $contenido[$campo]);

                        // Une los elementos traducidos de nuevo en un string
                        $traduccion = implode(', ', $traducciones);
                    } else {
                        // Si no es un array, traduce el contenido directamente
                        $traduccion = $tr->translate($contenido[$campo]);
                    }

                    if ($traduccion === null) {
                        // Error durante la traducción o traducción nula, utiliza el valor base
                        $traduccion = $contenido[$campo];
                        // Registra el error
                        Log::error('Error durante la traducción: Traducción Nula');

                        Log::info('Traducción, error en datos:', [
                            'RegistroID' => $registroID,
                            'Tabla' => $this->tabla,
                            'Campo' => $campo,
                            'Contenido' => $traduccion,
                            'Locale' => $locale,
                        ]);
                    }else{
                        Traduccion::updateOrCreate(
                            [
                                'RegistroID' => $registroID,
                                'Tabla' => $this->tabla,
                                'Campo' => $campo,
                                'Locale' => $locale,
                            ],
                            [
                                'Contenido' => $traduccion,
                            ]
                        );
                    }
                } catch (\Exception $e) 
                {
                    // Manejar cualquier excepción durante la traducción
                    // Utiliza el valor base en caso de error
                    Traduccion::updateOrCreate(
                        [
                            'RegistroID' => $registroID,
                            'Tabla' => $this->tabla,
                            'Campo' => $campo,
                            'Locale' => $locale,
                        ],
                        [
                            'Contenido' => $contenido[$campo],
                        ]
                    );

                    // Registra el error
                    Log::error('Error durante la traducción: ' . $e->getMessage());
                }
            }
        }
    }
    public function specificUpdate($registroID, array $campos, $contenido, $locale)
    {
        foreach ($campos as $campo) 
        {
            try 
            {
                Traduccion::updateOrCreate(
                    [
                        'RegistroID' => $registroID,
                        'Tabla' => $this->tabla,
                        'Campo' => $campo,
                        'Locale' => $locale,
                    ],
                    [
                        'Contenido' => $contenido[$campo],
                    ]
                );
            } catch (\Exception $e) 
            {
                // Registra el error                
                Log::info('Traducción, error en datos:', [
                    'RegistroID' => $registroID,
                    'Tabla' => $this->tabla,
                    'Campo' => $campo,
                    'Contenido' => $contenido[$campo],
                    'Locale' => $locale,
                ]);

                Log::error('Error durante la traducción: ' . $e->getMessage());

            }
        }
    }
    public function delete($registroID)
    {
        try {
            // Eliminar todos los registros que coincidan con los criterios
            Traduccion::where('RegistroID', $registroID)
                ->where('Tabla', $this->tabla)
                ->delete();
    
            Log::info('Taducciones, registros eliminados:', [
                'RegistroID' => $registroID,
                'Tabla' => $this->tabla,
            ]);
    
            return true;
    
        } catch (\Exception $e) {
            // Manejar cualquier excepción durante la eliminación
            Log::error('Error durante la eliminación: ' . $e->getMessage());
    
            return false;
        }
    }
    
    public function seedertranslate($NameID, array $campos, $registros, $setLocales = null){
        $tr = new GoogleTranslate(); 
        $locales = $setLocales ?? $this->baseLocales;

        foreach ($locales as $locale) 
        {
            $tr->setSource(); // Asigna automáticamente la fuente según el texto proporcionado
            $tr->setTarget($locale);

            foreach ($registros as $contenido)
            {
                foreach ($campos as $campo) 
                {
                    try {
                        $traduccion = $tr->translate($contenido[$campo]);
    
                        if ($traduccion === null) {
                            $traduccion = $contenido[$campo];
                            Log::error('Error durante la traducción: ' . 'Traducción Nula' );
    
                            Log::info('Traducción, error en datos:', [
                                'RegistroID' => $contenido[$NameID],
                                'Tabla' => $this->tabla,
                                'Campo' => $campo,
                                'Contenido' => $traduccion,
                                'Locale' => $locale,
                            ]);
                        }
    
                        Traduccion::create([
                            'RegistroID' => $contenido[$NameID],
                            'Tabla' => $this->tabla,
                            'Campo' => $campo,
                            'Contenido' => $traduccion,
                            'Locale' => $locale,
                        ]);
    
                    } catch (\Exception $e) {
    
                        Traduccion::create([
                            'RegistroID' => $contenido[$NameID],
                            'Tabla' => $this->tabla,
                            'Campo' => $campo,
                            'Contenido' => $contenido[$campo],
                            'Locale' => $locale,
                        ]);
    
                        // Registra el error
                        Log::error('Error durante la traducción: ' . $e->getMessage());
                    }
                }
            }
        }
    }
}