<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ContactBook extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contact_book', function (Blueprint $table) {
            $table->id('id')->autoIncrement();
            $table->timestamp('date');
            $table->string('contact_type');
            $table->string('communication_media_id');
            $table->string('company_name');
            $table->string('Tax ID');
            $table->string('position');
            $table->string('name');
            $table->string('surnames');
            $table->string('dni');
            $table->string('country');
            $table->string('city');
            $table->string('province');
            $table->string('address');
            $table->string('postal_code');
            $table->string('phone');
            $table->string('phone2');
            $table->string('email');
            $table->string('email2');
            $table->string('web');
            $table->string('observations');
            $table->string('language');
            $table->tinyInteger('active');
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
        Schema::dropIfExists('contact_book');
    }
}
