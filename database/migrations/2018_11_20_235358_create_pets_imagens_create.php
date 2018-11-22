<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePetsImagensCreate extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pets_imagens', function(Blueprint $table){
            $table->increments('id_pet_imagem');
            $table->string('nome_imagem', 100);
            $table->unsignedInteger('pet_id');
            $table->foreign('pet_id')->references('id_pet')->on('pets')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pets_imagens');
    }
}
