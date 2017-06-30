<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Docentes extends Model
{
    protected $fillable = [
        'AP_PATERNO','AP_MATERNO','NOMBRE','N_EMPLEADO','CONTRASEÑA','ID_UA',
        ];

    public function docenteUnidad()
    {
        return $this->belongsTo(Unidades_Academicas::class);
    }
}
