<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ClientInternetSeekers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('client_internet_seekers', function (Blueprint $table) {
            $table->integer('id')->primary();
            $table->date('date');
            $table->time('time');
            $table->integer('user_id');
            $table->integer('customer_id');
            $table->integer('internet_search_id');
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
        Schema::dropIfExists('client_internet_seekers');
    }
}
