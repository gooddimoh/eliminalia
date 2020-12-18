<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Partners extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('partners', function (Blueprint $table) {
            $table->integer('id')->primary();
            $table->string('nombre');
            $table->string('country');
            $table->string('city');
            $table->string('province');
            $table->string('address');
            $table->string('postal code');
            $table->string('phone');
            $table->string('phone2');
            $table->string('email');
            $table->string('email2');
            $table->string('observations');
            $table->tinyInteger('active');
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
        Schema::dropIfExists('partners');
    }
}
