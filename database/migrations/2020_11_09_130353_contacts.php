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
        Schema::create('flights', function (Blueprint $table) {
            $table->id();
            $table->date('');
            $table->permission_level('');
            $table->commercial_id('name');
            $table->name('airline');
            $table->surnames('airline');
            $table->company_name('airline');
            $table->dni('airline');
            $table->commercial_id('airline');
            $table->cif('airline');
            $table->country('airline');
            $table->city('airline');
            $table->province('airline');
            $table->address('airline');
            $table->postal_code('airline');
            $table->phone('airline');
            $table->phone2('airline');
            $table->email('airline');
            $table->email2('airline');
            $table->customer_remarks('airline');
            $table->manager_remarks('airline');
            $table->commercial_remarks('airline');
            $table->language('airline');
            $table->budget('airline');
            $table->form_pagos('airline');
            $table->trace_done('airline');
            $table->budget_done('airline');
            $table->client_signed('airline');
            $table->scrapped('airline');
            $table->contact_making('airline');
            $table->documentation_submitted('airline');
            $table->discarded_reason('airline');
            $table->date_signed('airline');
            $table->discarded_date('airline');
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
