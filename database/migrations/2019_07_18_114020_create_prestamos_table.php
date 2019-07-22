<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePrestamosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prestamos', function (Blueprint $table) {
            $table->bigIncrements('id')->autoIncrement();
            $table->date('fecha_prestamo');
            $table->date('fecha_devolucion');
            $table->date('fecha_entrega')->nullable();
            $table->integer('prestamo_cod_ejemplar');
            $table->text('usuario_rut');
            $table->integer('prestamo_n_serie');
            

            $table->foreign('prestamo_n_serie')->references('n_serie')->on('libros');
            //$table->foreign('prestamo_cod_ejemplar')->references('codigo')->on('ejemplars');
           // $table->foreign('usuario_rut')->references('rut')->on('users');
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
        Schema::dropIfExists('prestamos');
        Schema::enableForeignKeyConstraints();
    }
}
