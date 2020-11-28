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
            $table->uuid('id')->primary();
            $table->date('upload_date');
            $table->time('upload_time');
            $table->id('id_manager');
            $table->id('id_client');
            $table->string('id_global');
            $table->string('filename');
            $table->string('file_extension');
            $table->string('file_path');
            $table->string('kind');
            $table->timestamp('read_at')->nullable();
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
        //
    }
}
