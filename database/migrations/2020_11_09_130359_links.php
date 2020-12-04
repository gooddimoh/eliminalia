<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Links extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('links', function (Blueprint $table) {
            $table->integer('id');
            $table->date('fecha');
            $table->time('hora');
            $table->date('fecha_modificacion');
            $table->time('hora_modificacion');
            $table->integer('id_gestor');
            $table->integer('id_cliente');
            $table->string('enlace');
            $table->enum('estado');
            $table->enum('estado_seo');
            $table->date('fecha_modificacion_seo');
            $table->timestamp('hora_modificacion_seo');
            $table->enum('tipo_enlace');
            $table->integer('id_categoria');
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
        Schema::dropIfExists('links');
    }
}
