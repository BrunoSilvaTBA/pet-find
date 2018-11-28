<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePetsContatosEncontradosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pets_contatos_encontrados', function (Blueprint $table) {
            $table->increments('id_pet_contato_encontrado');
            $table->string('nome', 30);
            $table->string('telefone', 30);
            $table->text('mensagem');
            $table->unsignedInteger('pet_id');
            $table->timestamps();

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
        Schema::dropIfExists('pets_contatos_encontrados');
    }
}
