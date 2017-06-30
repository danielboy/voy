<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Carreras extends Model
{
    protected $fillable = [
        'ID_AREA', 'CLAVE_CAR', 'NOMBRE', 'INFORMACION', 'IMG', 'COORDENADAS',
    ];


    public function carreraArea()
    {
        return $this->belongsTo(Areas::class);
    }

}
