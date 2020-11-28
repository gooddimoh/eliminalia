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
        Schema::create('Asuntos', function (Blueprint $table) {
            $table->id();
            $table->string('id');
            $table->string('ultima_fecha');
            $table->string('ultima_hora');
            $table->string('id_ultimo_usuario');
            $table->string('id_cliente');
            $table->string('id_enlace');
            $table->string('asunto');
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
        Schema::drop('Contacts');
    }
}
