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
            $table->time('time');
            $table->integer('user_id')->index();
            $table->integer('reference_id');
            $table->string('type');
            $table->string('observations');
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
        Schema::dropIfExists('history_actions');
    }
}
