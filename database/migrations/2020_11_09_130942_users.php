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
        Schema::create('users2', function (Blueprint $table) {
            $table->increments('id');
            $table->string('email')->nullable()->unique();
            $table->datetime('email_verified_at')->nullable();
            $table->string('password')->nullable();
            $table->string('remember_token')->nullable();
            $table->boolean('approved')->default(0)->nullable();
            $table->foreign('dni');
            $table->string('name');
            $table->string('email');
            $table->string('password');
            $table->string('phone');
            $table->string('remember_token');
            $table->string('approved');
            $table->string('surnames');
            $table->string('company_name');
            $table->string('dni');
            $table->string('country');
            $table->string('city');
            $table->string('province');
            $table->string('address');
            $table->string('postal_code');
            $table->string('phone');
            $table->string('phone2');
            $table->string('e-mail');
            $table->string('email2');
            $table->string('locked');
            $table->string('state');
            $table->string('billing_state');
            $table->string('percentage_completed');
            $table->string('manager_remarks');
            $table->string('contract_date');
            $table->string('contract_compliance_days');
            $table->string('end_date');
            $table->string('language');
            $table->string('contract_amount');
            $table->string('fractional_payment');
            $table->string('data_profile');
            $table->string('profile_links');
            $table->string('profile_documentation');
            $table->string('billing_profile');
            $table->string('contract_paid');
            $table->string('demo');
            $table->string('contact_id');
            $table->string('client_type');
            $table->string('seg_monthly_import');
            $table->string('seg_payment_date');
            $table->string('payment_form_sec');
            $table->string('date_rescision');
            $table->string('commercial_id ');
            $table->string('completion_folder');
            $table->string('state_seo');
            $table->string('seg_monthly_import');
            $table->string('search_parameters');
            $table->string('subscribed_notifications');
            $table->string('id_partner ');
            $table->string('id_partner ');
            $table->integer('Permission Level:');
            $table->integer('payment')->comment("banned");
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamps();
            $table->rememberToken();
            $table->morphs('notifiable');
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
