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
     **/

    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->integer('id')->autoIncrement();
            $table->string('password')->nullable();
            $table->string('name')->nullable();
            $table->string('email')->nullable();
            $table->string('approved')->nullable();
            $table->string('company_name')->nullable();
            $table->string('dni')->nullable();
            $table->string('country')->nullable();
            $table->string('city')->nullable();
            $table->string('province')->nullable();
            $table->string('address')->nullable();
            $table->string('postal_code')->nullable();
            $table->string('phone')->nullable();
            $table->string('phone2')->nullable();
            $table->string('e-mail')->nullable();
            $table->string('email2')->nullable();
            $table->string('locked')->nullable();
            $table->string('state')->nullable();
            $table->string('billing_state')->nullable();
            $table->string('percentage_completed')->nullable();
            $table->string('manager_remarks')->nullable();
            $table->string('contract_date')->nullable();
            $table->string('contract_compliance_days')->nullable();
            $table->string('end_date')->nullable();
            $table->string('language')->nullable();
            $table->string('contract_amount')->nullable();
            $table->string('fractional_payment')->nullable();
            $table->string('data_profile')->nullable();
            $table->string('profile_links')->nullable();
            $table->string('profile_documentation')->nullable();
            $table->string('billing_profile')->nullable();
            $table->string('contract_paid')->nullable();
            $table->string('demo')->nullable();
            $table->string('contact_id')->nullable();
            $table->string('client_type')->nullable();
            $table->string('seg_monthly_import')->nullable();
            $table->string('seg_payment_date')->nullable();
            $table->string('payment_form_sec')->nullable();
            $table->string('date_rescision')->nullable();
            $table->string('completion_folder')->nullable();
            $table->string('state_seo')->nullable();
            $table->string('search_parameters')->nullable();
            $table->string('subscribed_notifications')->nullable();
            $table->string('id_partner')->nullable();
            $table->integer('permission_level')->nullable();
            $table->integer('payment')->comment("banned")->nullable();
            $table->string('notifiable')->nullable();
            $table->timestamps();
            $table->rememberToken();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */

    public function down()
    {
        Schema::drop('users2');
    }
}
