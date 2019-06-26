<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDireccionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('direccions', function (Blueprint $table) {
            $table->bigIncrements('id')->autoIncrement();
            $table->text('n_casa');
            $table->text('pais');
            $table->text('ciudad');
            $table->text('calle');
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
        Schema::dropIfExists('direccions');
    }
}
