<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAlumnosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alumnos', function (Blueprint $table) {
            $table->increments('id');          
            $table->string('AP_PATERNO');
            $table->string('AP_MATERNO');
            $table->string('NOMBRE');
            $table->string('CURP');
            $table->string('MATRICULA');
            $table->string('AREA');
            $table->string('ESTADO');
            $table->string('INTENTOS'); 
            $table->string('TIPO'); 
            $table->integer('ID_UA')->unsigned(); 
            $table->integer('ID_GRUPO')->unsigned();                                                           
            $table->timestamps();

            $table->foreign('ID_UA')->references('id')->on('unidades_academicas');            
            $table->foreign('ID_GRUPO')->references('id')->on('grupos');  

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('alumnos');
    }
}
