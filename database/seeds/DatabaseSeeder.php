<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);
        factory ('App\Vehiculo',10)->create();
        factory ('App\Estacionamiento',10)->create();
        $this->call(OrigenTableSeeder::class);
        $this->call(TarifasTableSeeder::class);
        $this->call(ZonasTableSeeder::class);
        factory ('App\Inspector',10)->create();
    }
}
