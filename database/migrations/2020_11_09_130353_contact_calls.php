<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ContactCalls extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contact_calls', function (Blueprint $table) {
            $table->id('id')->autoIncrement();
            $table->date('fecha');
            $table->time('hora');
            $table->integer('id_comercial');
            $table->integer('id_contacto');
            $table->string('observaciones');
            $table->string('gestion_realizada');
            $table->tinyInteger('llamada_realizada');
            $table->dateTime('fecha_gestion');
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
        Schema::drop('contact_calls');
    }
}
