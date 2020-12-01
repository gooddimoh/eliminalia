<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Contacts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Contacts', function (Blueprint $table) {
            $table->id('id');
            $table->timestamp('fecha');
            $table->enum('nivel_permiso');
            $table->integer('id_comercial');
            $table->string('nombre');
            $table->string('apellidos');
            $table->string('nombre_empresa');
            $table->string('dni');
            $table->string('cif');
            $table->string('pais');
            $table->string('ciudad');
            $table->string('provincia');
            $table->string('direccion');
            $table->string('codigo_postal');
            $table->string('telefono');
            $table->string('commercial*');
            $table->string('telefono2');
            $table->string('email');
            $table->string('email2');
            $table->string('observaciones_cliente');
            $table->string('observaciones_gestor');
            $table->string('observaciones_comercial');
            $table->enum('idioma');
            $table->double('presupuesto');
            $table->enum('forma_pagos');
            $table->tinyInteger('rastreo_hecho');
            $table->tinyInteger('presupuesto_hecho');
            $table->tinyInteger('cliente_firmado');
            $table->tinyInteger('desechado');
            $table->tinyInteger('toma_de_contacto');
            $table->tinyInteger('documentacion_enviada');
            $table->string('motivo_desechado');
            $table->date('fecha_firmado');
            $table->date('fecha_desechado');
            $table->timestamps('created_at');
            $table->timestamps('updated_at');
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
