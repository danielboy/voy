<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Grupos extends Model
{
    protected $fillable = [
        'ID_DOCENTE', 'ID_UA', 'TURNO', 'GRUPO',
    ];

    public function grupoDocente()
    {
        return $this->belongsTo(Docentes::class);
    }

    public function grupoUnidad()
    {
        return $this->belongsTo(Unidades_Academicas::class);
    }        
}
