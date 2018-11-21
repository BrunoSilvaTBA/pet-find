<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterAddCollumnTablePets extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('pets', function(Blueprint $table){
            $table->unsignedInteger('especie_id');
            $table->unsignedInteger('raca_id')->nullable();

            $table->foreign('especie_id')->references('id_especie')->on('especies')->onDelete('cascade')->change();
            $table->foreign('raca_id')->references('id_raca')->on('racas')->onDelete('cascade')->change();
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
