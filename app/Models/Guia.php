<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Traits\Mutators\GuiaMutators;


class Guia extends Model
{
    use HasFactory,
        GuiaMutators;

    protected $primaryKey = 'GuiaID';

    protected $fillable = [
        'LugarID',
        'Nombre', 
        'Telefono', 
        'Idiomas',
        'Experiencias',
        'Imagen',
        'Estado'
    ];

    protected $casts = [
        'Estado' => 'boolean'
    ];

    public function lugar()
    {
        return $this->belongsTo(Lugar::class, 'LugarID');
    }

}
