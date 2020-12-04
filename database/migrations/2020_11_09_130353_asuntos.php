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
            $table->string('id');
            $table->string('last_date');
            $table->string('last_minute');
            $table->string('id_last_user');
            $table->string('customer_id');
            $table->string('id_enlace');
            $table->string('affair');
            $table->string('finalized');
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
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
