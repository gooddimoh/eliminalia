<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Users extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Users', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('Username:');
            $table->string('Password:');
            $table->string('Name:');
            $table->string('Surname:');
            $table->string('Phone:');
            $table->string('Email:');
            $table->string('DNI:');
            $table->string('ID:');
            $table->string('Address:');
            $table->string('Postal code');
            $table->string('City:');
            $table->string('State:');
            $table->integer('Permission Level:');
            $table->morphs('notifiable');
            $table->timestamp('file_created');
            $table->timestamp('file_updated');
            $table->timestamp('read_at')->nullable();
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
