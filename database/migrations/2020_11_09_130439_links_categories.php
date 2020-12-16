<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class LinksCategories extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('links_categories', function (Blueprint $table) {
            $table->integer('id');
            $table->timestamp('date')->comment('CURRENT_TIMESTAMP');
            $table->time('time');
            $table->integer('manager_id');
            $table->integer('client_id');
            $table->integer('payment');
            $table->double('amount');
            $table->integer('percentage_realization');
            $table->tinyInteger('accomplished');
            $table->string('payment_form');
            $table->string('observations');
            $table->date('pay_day');
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
        Schema::dropIfExists('links_categories');
    }
}
