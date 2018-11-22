<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEspecieCaracteristicaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('especie_caracteristicas', function (Blueprint $table) {
            $table->increments('id_especie_caracteristica');
            $table->unsignedInteger('caracteristica_id');
            $table->unsignedInteger('especie_id');

            $table->foreign('caracteristica_id')->references('id_caracteristica')->on('caracteristicas')->onDelete('cascade');
            $table->foreign('especie_id')->references('id_especie')->on('especies')->onDelete('cascade');

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
        Schema::drop('especie_caracteristicas');
    }
}
