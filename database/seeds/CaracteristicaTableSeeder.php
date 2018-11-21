<?php

use Illuminate\Database\Seeder;

class CaracteristicaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('caracteristicas')->insert([
            ['nome_caracteristica' => 'Cor dos olhos', 'tipo' => 2],
            ['nome_caracteristica' => 'Cor dos pelos', 'tipo' => 2],
            ['nome_caracteristica' => 'Cor das penas', 'tipo' => 2],
            ['nome_caracteristica' => 'Porte de raça', 'tipo' => 2],
            ['nome_caracteristica' => 'Comportamento', 'tipo' => 1],
            ['nome_caracteristica' => 'Castrado', 'tipo' => 2],
        ]);
    }
}
