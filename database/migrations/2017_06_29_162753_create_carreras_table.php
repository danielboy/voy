<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCarrerasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('carreras', function (Blueprint $table) {
            $table->increments('id');
            $table->String('CLAVE_CAR');
            $table->String('NOMBRE');
            $table->String('RE_CORRECTA');
            $table->String('INFORMACION');
            $table->String('IMG');            
            $table->String('COORDENADAS'); 
            $table->integer('ID_AREA')->unsigned();   
            $table->timestamps();

            $table->foreign('ID_AREA')->references('id')->on('areas'); 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('carreras');
    }
}
