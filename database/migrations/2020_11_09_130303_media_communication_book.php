<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class MediaCommunicationBook extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('media_communication_book', function (Blueprint $table) {
            $table->id('id');
            $table->string('fecha');
            $table->string('tipo_medio_comunicacion');
            $table->string('nombre');
            $table->string('nombre_empresa');
            $table->string('cif');
            $table->string('pais');
            $table->string('ciudad');
            $table->string('provincia');
            $table->string('direccion');
            $table->string('codigo_postal');
            $table->string('telefono');
            $table->string('telefono2');
            $table->string('email');
            $table->string('email2');
            $table->string('web');
            $table->string('observaciones');
            $table->enum('idioma');
            $table->tinyInteger('activo');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('media_communication_book');
    }
}
