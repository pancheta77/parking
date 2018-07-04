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
        factory ('App\Vehiculo',25)->create();
        factory ('App\Programado',25)->create();
        $this->call(TarifasTableSeeder::class);
        $this->call(ZonasTableSeeder::class);
    }
}
