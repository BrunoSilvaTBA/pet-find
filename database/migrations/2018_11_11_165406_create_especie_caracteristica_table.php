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

            $table->foreign('caracteristica_id')->references('id_caracteristica')->on('caracteristicas');
            $table->foreign('especie_id')->references('id_especie')->on('especies');

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
        Schema::dropIfExists('especie_caracteristica');
    }
}
