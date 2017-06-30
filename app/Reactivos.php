<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reactivos extends Model
{
    protected $fillable = [
        'ID_AREA', 'REACTIVOS', 'RESPUESTAS', 'RE_CORRECTA', 'TIPO', 'VALOR',
    ]; 

    public function reactivosArea()
    {
        return $this->belongsTo(Areas::class);
    }   
 
}
