<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReactivosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reactivos', function (Blueprint $table) {
            $table->increments('id');
            $table->String('REACTIVOS');
            $table->text('RESPUESTAS');
            $table->String('RE_CORRECTA');
            $table->String('TIPO');
            $table->integer('VALOR');            
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
        Schema::dropIfExists('reactivos');
    }
}
