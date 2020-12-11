<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Asuntos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('asuntos', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->string('last_date');
            $table->string('last_minute');
            $table->string('id_last_user');
            $table->string('customer_id');
            $table->string('link_id');
            $table->string('affair');
            $table->string('finalized');
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
        Schema::drop('asuntos');
    }
}
