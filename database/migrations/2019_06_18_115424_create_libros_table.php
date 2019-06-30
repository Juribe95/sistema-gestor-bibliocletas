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
            $table->integer('ISBN');
            $table->text('titulo');
            $table->smallInteger('n_paginas');
            $table->integer('id_editorial');
            $table->integer('id_estado');
            $table->timestamps();
            // $table->foreign('usuario_rut')->references('rut')->on('users');
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
