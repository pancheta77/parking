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
        factory ('App\Vehiculo',15)->create();
        factory ('App\Estacionamiento',15)->create();
        $this->call(OrigenTableSeeder::class);
        $this->call(TarifasTableSeeder::class);
        $this->call(ZonasTableSeeder::class);
    }
}
