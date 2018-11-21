<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EspecieTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('especies')->insert([
            ['nome_especie' => 'Cão'],
            ['nome_especie' => 'Gato'],
            ['nome_especie' => 'Ave'],
            ['nome_especie' => 'Cavalo'],
        ]);
    }
}
