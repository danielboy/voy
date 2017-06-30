<?php

namespace App;


use Illuminate\Database\Eloquent\Model;

class Alumnos extends User
{
    protected $fillabe = [
        'AP_PATERNO','AP_MATERNO','NOMBRE','CURP','MATRICULA','ID_GRUPO','AREA','ESTADO','ID_UA','INTENTOS','TIPO'];

    public function alumnoGrupo()
    {
        return $this->belongsTo(Grupos::class);
    }

    public function alumnoUnidad()
    {
        return $this->belongsTo(Unidades_Academicas::class);
    }    
}
