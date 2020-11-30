<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class LinksCategories extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('links_categories', function (Blueprint $table) {
            $table->integer('id');
            $table->timestamp('fecha')->comment('CURRENT_TIMESTAMP');
            $table->time('hora', 300);
            $table->integer('id_gestor');
            $table->integer('id_cliente');
            $table->integer('pago');
            $table->double('importe');
            $table->integer('porcentaje_realizacion');
            $table->tinyInteger('realizado');
            $table->string('forma_pago');
            $table->string('observaciones', 5000);
            $table->date('pay_day');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('links_categories');
    }
}
