<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Asuntos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
<<<<<<< HEAD
        Schema::create('Asuntos', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->string('id');
=======
        Schema::create('asuntos', function (Blueprint $table) {
            $table->integer('id')->autoIncrement();
>>>>>>> 38c2063668dc7e52a4f3b55945a6158003a3c013
            $table->string('ultima_fecha');
            $table->string('ultima_hora');
            $table->string('id_ultimo_usuario');
            $table->string('id_cliente');
            $table->string('id_enlace');
            $table->string('asuntot');
            $table->string('finalizado');
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
        Schema::drop('asuntos');
    }
}
