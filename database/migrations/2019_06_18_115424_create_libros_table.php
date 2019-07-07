<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLibrosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('libros', function (Blueprint $table) {
            $table->integer('n_serie')->autoIncrement();
            $table->string('ISBN',13);
            $table->text('titulo');
            $table->smallInteger('n_paginas');
            $table->integer('id_editorial');
            $table->integer('id_estado');
            $table->integer('id_autor');
            $table->integer('id_categoria');

            $table->foreign('id_editorial')->references('id')->on('editorials');
            $table->foreign('id_estado')->references('id')->on('estados');
            $table->foreign('id_autor')->references('id')->on('autors');
            $table->foreign('id_categoria')->references('id')->on('categorias');

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
        Schema::dropIfExists('libros');
        Schema::enableForeignKeyConstraints();
    }
}
