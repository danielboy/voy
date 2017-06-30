<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDocentesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('docentes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('AP_PATERNO');
            $table->string('AP_MATERNO');
            $table->string('NOMBRE');
            $table->string('N_EMPLEADO');
            $table->string('CONTRASEÑA');     
            $table->integer('ID_UA')->unsigned();                   
            $table->timestamps();

            $table->foreign('ID_UA')->references('id')->on('unidades_academicas'); 
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('docentes');
    }
}
