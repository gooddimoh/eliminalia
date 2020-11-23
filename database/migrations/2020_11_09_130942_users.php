<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Users extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Users', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('fecha');
            $table->string('nombre_usuario');
            $table->string('nivel_permiso');
            $table->string('password');
            $table->string('id_gestor');
            $table->string('nombre');
            $table->string('apellidos');
            $table->string('nombre_empresa');
            $table->string('dni');
            $table->string('pais');
            $table->string('ciudad');
            $table->string('provincia');
            $table->string('direccion');
            $table->string('codigo_postal');
            $table->string('telefono');
            $table->string('telefono2');
            $table->string('email');
            $table->string('email2');
            $table->string('bloqueado');
            $table->string('estado');
            $table->string('estado_facturacion');
            $table->string('porcentaje_finalizados');
            $table->string('observaciones_gestor');
            $table->string('fecha_contrato');
            $table->string('dias_cumplimiento_contrato');
            $table->string('fecha_finalizacion');
            $table->string('idioma');
            $table->string('importe_contrato');
            $table->string('pago_fraccionado');
            $table->string('perfil_datos');
            $table->string('perfil_enlaces');
            $table->string('perfil_documentacion');
            $table->string('perfil_facturacion');
            $table->string('contrato_pagado');
            $table->string('demo');
            $table->string('id_contacto');
            $table->string('tipo_cliente');
            $table->string('seg_importe_mensual');
            $table->string('seg_fecha_pago');
            $table->string('seg_forma_pago');
            $table->string('fecha_rescision');
            $table->string('id_comercial ');
            $table->string('carpeta_finalizacion');
            $table->string('estado_seo');
            $table->string('seg_importe_mensual');
            $table->string('parametros_busqueda');
            $table->string('suscrito_notificaciones');
            $table->string('id_partner ');
            $table->integer('Permission Level:');
            $table->integer('payment')->comment("banned");
            $table->morphs('notifiable');
            $table->timestamp('file_created');
            $table->timestamp('file_updated');
            $table->timestamp('read_at')->nullable();
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
        Schema::drop('flights');
    }
}
