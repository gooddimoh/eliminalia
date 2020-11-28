<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ContactBookLink extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */

    public function up()
    {
        Schema::create('contact_book_link', function (Blueprint $table) {
            $table->id('id')->autoIncrement();
            $table->timestamp('fecha')->comment('date');
            $table->integer('id_contacto');
            $table->integer('id_enlace');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contact_book_link');
    }
}
