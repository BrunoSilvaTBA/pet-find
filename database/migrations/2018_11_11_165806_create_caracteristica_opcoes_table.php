<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCaracteristicaOpcoesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('caracteristica_opcoes', function (Blueprint $table) {
            $table->increments('id_opcao');
            $table->string('nome_opcao',45);
            $table->unsignedInteger('caracteristica_id');

            $table->foreign('caracteristica_id')->references('id_caracteristica')->on('caracteristicas');

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
        Schema::dropIfExists('caracteristica_opcoes');
    }
}
