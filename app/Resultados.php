<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Resultados extends Model
{
    protected $fillable = [
        'ID_ALUMNO', 'ID_AREA', 'PUNTOS', 'FECHA_INICIO', 'FECHA_FIN',
    ]; 

    public function resultadoAlumno()
    {
        return $this->belongsTo(Alumnos::class);
    }   

    public function resultadoArea()
    {
        return $this->belongsTo(Areas::class);
    }
}
