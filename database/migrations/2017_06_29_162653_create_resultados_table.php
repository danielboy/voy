<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateResultadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('resultados', function (Blueprint $table) {
            $table->increments('id');
            $table->String('PUNTOS');
            $table->datatime('FECHA_APLI');
            $table->dateTime('FECHA_APLI');
            $table->integer('ID_AREA')->unsigned();
            $table->integer('ID_ALUMNO')->unsigned();   
            $table->timestamps();

            $table->foreign('ID_AREA')->references('id')->on('areas'); 
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
        Schema::dropIfExists('resultados');
    }
}
