<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePetsCaracteristicasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pets_caracteristicas', function (Blueprint $table) {
            $table->increments('id_pet_caracteristica');
            $table->unsignedInteger('pet_id');
            $table->unsignedInteger('opcao_id')->nullable();
            $table->string('label_caracteristica', 30)->nullable();
            $table->timestamps();

            $table->foreign('pet_id')->references('id_pet')->on('pets')->onDelete('cascade');
            $table->foreign('opcao_id')->references('id_opcao')->on('caracteristica_opcoes')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pets_caracteristicas');
    }
}
