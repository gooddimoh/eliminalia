<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Access_History extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('access_history', function (Blueprint $table) {
            $table->unsignedInteger('user_id');
            $table->foreign('user_id', 'user_id_fk_466020')->references('id')->on('users')->onDelete('cascade');
            $table->unsignedInteger('role_id');
            $table->foreign('role_id', 'role_id_fk_466020')->references('id')->on('roles')->onDelete('cascade');
            $table->foreign('role_id', 'users_id_fk_466020')->references('id')->on('roles')->onDelete('cascade');
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
