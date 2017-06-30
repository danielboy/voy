<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Respuestas extends Model
{
    protected $fillable = [
        'ID_REACTIVO', 'RESPUESTA', 'ID_ALUMNO', 'FECHA_APLI',
    ];

    public function respuestaReactivo()
    {
        return $this->belongsTo(Reactivos::class);
    }

    public function respuestaAlumno()
    {
        return $this->belongsTo(Alumnos::class);
    }
}
