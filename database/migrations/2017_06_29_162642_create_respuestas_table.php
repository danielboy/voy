<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRespuestasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('respuestas', function (Blueprint $table) {
            $table->increments('id');
            $table->String('RESPUESTA');
            $table->dateTime('FECHA_APLI');
            $table->integer('ID_REACTIVO')->unsigned();
            $table->integer('ID_ALUMNO')->unsigned();   
            $table->timestamps();

            $table->foreign('ID_REACTIVO')->references('id')->on('reactivos'); 
            $table->foreign('ID_ALUMNO')->references('id')->on('alumnos'); 

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('respuestas');
    }
}
