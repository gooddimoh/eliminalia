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
            $table->date('date');
            $table->time('time'); /*time*/
            $table->integer('user_id');
            $table->string('device');
            $table->string('model_device');
            $table->string('device_os');
            $table->string('browser_device');
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
