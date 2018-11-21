<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePetsLocalTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pets_locais', function (Blueprint $table) {
            $table->increments('id_pet_local');
            $table->unsignedInteger('pet_id');
            $table->string('uf', 2);
            $table->integer('cidade')->nullable();
            $table->integer('bairro')->nullable();
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
        Schema::dropIfExists('pets_locais');
    }
}
