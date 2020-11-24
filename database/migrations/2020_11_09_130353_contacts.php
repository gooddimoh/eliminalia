<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Contacts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('links', function (Blueprint $table) {
            $table->id();
            $table->string('Name*:');
            $table->string('Surname:');
            $table->string('Phone number 1*:');
            $table->string('Phone number 2*:');
            $table->string('Email (main)*:');
            $table->string('Email (secondary):');
            $table->string('ID:');
            $table->string('Company ID:');
            $table->string('Address:');
            $table->string('Postal code:');
            $table->string('City:');
            $table->string('State:');
            $table->string('Country*:');
            $table->string('Native language*:');
            $table->string('Commercial*');
            $table->string('Budget:');
            $table->string('Payment method:');
            $table->string('Case description made by the client:');
            $table->string('Info for the Manager:');
            $table->string('Info for the Commercial:');
            $table->string('First contact done');
            $table->string('Tracking done');
            $table->string('Budget done');
            $table->string('Documentation sended');
            $table->string('signed');
            $table->string('airline');
            $table->string('airline');
            $table->string('airline');
            $table->string('airline');
            $table->string('airline');
            $table->string('airline');
            $table->string('airline');
            $table->string('airline');
            $table->string('airline');
            $table->string('airline')->
            $table->string('airline');
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
        Schema::drop('flights');
    }
}
