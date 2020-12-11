<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AttachedFiles extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('attached_files', function (Blueprint $table) {
            $table->integer('id')->primary();
            $table->integer('manager_id');
            $table->integer('customer_id');
            $table->string('global_id');
            $table->string('filename');
            $table->string('file_extension');
            $table->string('file_path');
            $table->string('kind');
            $table->date('upload_date');
            $table->time('upload_time');
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
        Schema::drop('attached_files');
    }
}
