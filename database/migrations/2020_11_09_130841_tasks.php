<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Chores extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tasks', function (Blueprint $table) {
            $table->id('id');
            $table->string('name');
            $table->text('description');
            $table->integer('created_by');
            $table->integer('for');
            $table->string('importance');
            $table->date('start_date');
            $table->date('final_date');
            $table->date('finished_mark_date');
            $table->string('state');
            $table->integer('group');
            $table->integer('order');
            $table->text('log');
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tasks');
    }
}
