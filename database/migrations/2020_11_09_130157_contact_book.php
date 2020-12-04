<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ContactBook extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contact_book', function (Blueprint $table) {
            $table->id('id ');
            $table->timestamp('fecha');
            $table->enum('tipo_contacto');
            $table->integer('id_medio_comunicacion ');
            $table->string('nombre_empresa');
            $table->string('cif');
            $table->string('cargo');
            $table->string('nombre');
            $table->string('apellidos');
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
            $table->string('web');
            $table->string('observaciones');
            $table->enum('idioma');
            $table->tinyInteger('activo');
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contact_book');
    }
}
