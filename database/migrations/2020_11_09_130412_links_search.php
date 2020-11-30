<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class LinksSearch extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('links_search', function (Blueprint $table) {
            $table->integer('id');
            $table->text('enlace');
            $table->text('texto_a_buscar');
            $table->tinyInteger('estado');
            $table->integer('id_usuario');
            $table->timestamp('fecha_actualizado');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('links_search');
    }
}
