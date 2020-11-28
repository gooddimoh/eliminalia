<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Chores extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chores', function (Blueprint $table) {
            $table->id('id');
            $table->string('nombre');
            $table->text('descripcion');
            $table->integer('creado_por');
            $table->integer('para');
            $table->string('importancia');
            $table->date('fecha_inicio');
            $table->date('fecha_final');
            $table->date('fecha_marca_finalizado');
            $table->string('estado');
            $table->integer('grupo');
            $table->integer('orden');
            $table->text('log');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('chores');
    }
}
