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
            $table->date('fecha_entrega');
            $table->text('dias_retraso');
            $table->text('usuario_rut');
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
        Schema::dropIfExists('prestamos');
        Schema::enableForeignKeyConstraints();
    }
}
