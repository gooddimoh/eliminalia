<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Partners extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('partners', function (Blueprint $table) {
            $table->integer('id')->primary();
            $table->timestamp('fecha');
            $table->string('nombre');
            $table->string('pais');
            $table->string('ciudad');
            $table->string('provincia');
            $table->string('direccion');
            $table->string('codigo_postal');
            $table->string('telefono');
            $table->string('telefono2');
            $table->string('email');
            $table->string('email2');
            $table->string('observaciones');
            $table->tinyInteger('activo');
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
        Schema::dropIfExists('partners');
    }
}
