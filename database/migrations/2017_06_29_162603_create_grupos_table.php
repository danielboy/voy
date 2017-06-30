<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGruposTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('grupos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('TURNO');
            $table->string('GRUPO');
            $table->integer('ID_UA')->unsigned(); 
            $table->integer('ID_DOCENTE')->unsigned(); 
            $table->timestamps();

            $table->foreign('ID_UA')->references('id')->on('unidades_academicas'); 
            $table->foreign('ID_DOCENTE')->references('id')->on('docente'); 

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('grupos');
    }
}
