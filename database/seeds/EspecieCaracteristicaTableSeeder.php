<?php

use Illuminate\Database\Seeder;

class EspecieCaracteristicaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('especie_caracteristicas')->insert([
            ['caracteristica_id' => 1, 'especie_id' => 1],
            ['caracteristica_id' => 1, 'especie_id' => 2],
            ['caracteristica_id' => 1, 'especie_id' => 3],


            ['caracteristica_id' => 2, 'especie_id' => 1],
            ['caracteristica_id' => 2, 'especie_id' => 2],


            ['caracteristica_id' => 3, 'especie_id' => 3],

            ['caracteristica_id' => 4, 'especie_id' => 1],

            ['caracteristica_id' => 5, 'especie_id' => 1],
            ['caracteristica_id' => 5, 'especie_id' => 2],
            ['caracteristica_id' => 5, 'especie_id' => 3],

            ['caracteristica_id' => 6, 'especie_id' => 1],
            ['caracteristica_id' => 6, 'especie_id' => 2],

            ['caracteristica_id' => 7, 'especie_id' => 1],
            ['caracteristica_id' => 7, 'especie_id' => 2],
            ['caracteristica_id' => 7, 'especie_id' => 3],


        ]);
    }
}
