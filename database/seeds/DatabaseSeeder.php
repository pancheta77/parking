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
        // factory ('App\Vehiculo',6)->create();
        // factory ('App\Estacionamiento',6)->create();
        $this->call(VehiculoTableSeeder::class);
        $this->call(OrigenTableSeeder::class);
        $this->call(TarifasTableSeeder::class);
        $this->call(ZonasTableSeeder::class);
        $this->call(EstaciomamientoTableSeeder::class);
        factory ('App\Inspector',10)->create();
    }
}
