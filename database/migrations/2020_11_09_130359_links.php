<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Links extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('links', function (Blueprint $table) {
            $table->integer('id');
            $table->date('date');
            $table->time('time');
            $table->date('modification_date');
            $table->time('modification_time');
            $table->integer('manager_id');
            $table->integer('client_id');
            $table->string('link');
            $table->string('state');
            $table->string('status_seo');
            $table->date('date_modification_seo');
            $table->timestamp('seo_modification_time');
            $table->string('link_type');
            $table->integer('id_category');
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
        Schema::dropIfExists('links');
    }
}
