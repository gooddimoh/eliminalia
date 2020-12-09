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
        Schema::create('contacts', function (Blueprint $table) {
            $table->id('id');
            $table->timestamp('fecha');
            $table->string('permission_level');
            $table->integer('id_comercial');
            $table->string('name');
            $table->string('surnames');
            $table->string('company_name');
            $table->string('days');
            $table->string('cif');
            $table->string('country');
            $table->string('city');
            $table->string('province');
            $table->string('address');
            $table->string('postal_code');
            $table->string('phone');
            $table->string('commercial*');
            $table->string('phone2');
            $table->string('email');
            $table->string('email2');
            $table->string('customer_remarks');
            $table->string('remarks_manager');
            $table->string('commercial_remarks');
            $table->string('language');
            $table->double('budget');
            $table->string('form_payments');
            $table->tinyInteger('trace_done');
            $table->tinyInteger('budget_done');
            $table->tinyInteger('customer_signed');
            $table->tinyInteger('scrapped');
            $table->tinyInteger('contact_making');
            $table->tinyInteger('documentation_submitted');
            $table->string('discarded_reason');
            $table->date('date_signed');
            $table->date('discarded_date');
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
        Schema::drop('contacts');
    }
}
