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
            $table->uuid('id')->primary();
            $table->string('Nombre');
            $table->string('Phone number 1:');
            $table->string('Phone number 2:');
            $table->string('Email (main):');
            $table->string('Email (secondary):');
            $table->string('Address:');
            $table->string('Postal code:');
            $table->string('City:');
            $table->string('State:');
            $table->string('Country*:');
            $table->string('Observations:');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('acl_rules');
    }
}
