<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ClientInternetSeekers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('client_internet_seekers', function (Blueprint $table) {
            $table->integer('id')->primary();
            $table->date('fecha');
            $table->time('hora');
            $table->integer('id_usuario');
            $table->integer('id_cliente');
            $table->integer('id_buscador_internet');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('client_internet_seekers');
    }
}
