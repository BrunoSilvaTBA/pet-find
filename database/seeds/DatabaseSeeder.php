<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(EspecieTableSeeder::class);
        $this->call(RacaTableSeeder::class);
        $this->call(CaracteristicaTableSeeder::class);
        $this->call(EspecieCaracteristicaTableSeeder::class);
        $this->call(CaracteristicaOpcaoTableSeeder::class);
    }
}
