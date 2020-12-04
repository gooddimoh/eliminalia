<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class HistoryActions extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('history_actions', function (Blueprint $table) {
            $table->integer('id');
            $table->date('date');
            $table->time('hora');
            $table->integer('id_usuario')->index();
            $table->integer('id_referencia');
            $table->enum('tipo');
            $table->string('observaciones');
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
        Schema::dropIfExists('history_actions');
    }
}
