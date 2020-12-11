<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class MediaCommunicationBook extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
//    2
    public function up()
    {
        Schema::create('media_communication_book', function (Blueprint $table) {
            $table->id('id');
            $table->string('date');
            $table->string('media_type');
            $table->string('name');
            $table->string('company_name');
            $table->string('Tax Code');
            $table->string('parents');
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
        Schema::dropIfExists('media_communication_book');
    }
}
