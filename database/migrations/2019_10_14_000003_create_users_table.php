<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->nullable();
            $table->string('surname')->nullable();
            $table->string('password')->nullable()->unique();
            $table->string('phone')->nullable()->unique();
            $table->string('email')->nullable()->unique();
            $table->string('dni')->nullable()->unique();
            $table->string('address')->nullable()->unique();
            $table->string('postal_code')->nullable()->unique();
            $table->string('city')->nullable()->unique();
            $table->string('state')->nullable()->unique();
            $table->string('permission_level')->nullable();
            $table->boolean('banned')->default(0)->nullable();
            $table->string('remember_token')->nullable();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->softDeletes();
        });
    }

    public function down()
    {
        Schema::drop('users');
    }
}
