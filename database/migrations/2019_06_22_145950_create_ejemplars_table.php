<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEjemplarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //agregar 
            Schema::create('ejemplars', function (Blueprint $table) {
            $table->bigIncrements('id')->autoIncrement();   
            $table->integer('codigo')->unsigned();
            $table->integer('id_Estado');
            $table->integer('N_Serie_Libro');
            $table->foreign('id_Estado')->references('id')->on('estados');
            $table->foreign('N_Serie_Libro')->references('n_serie')->on('libros');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ejemplars');
        Schema::enableForeignKeyConstraints();
    }
}
