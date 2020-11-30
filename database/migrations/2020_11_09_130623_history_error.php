<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class HistoryError extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('history_error', function (Blueprint $table) {
            $table->integer('id')->autoIncrement();
            $table->integer('id_usuario');
            $table->integer('id_error');
            $table->date('fecha');
            $table->time('time');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('history_error');
    }
}
