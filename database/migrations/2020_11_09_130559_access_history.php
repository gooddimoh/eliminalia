<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AccessHistory extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('access_history', function (Blueprint $table) {
            $table->integer('id');
            $table->date('fecha');
            $table->time('hora'); /*time*/
            $table->integer('id_usuario');
            $table->string('dispositivo');
            $table->string('dispositivo_modelo');
            $table->string('dispositivo_os');
            $table->string('dispositivo_navegador');
            $table->string('ip');
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
        Schema::dropIfExists('access_history');
    }
}
