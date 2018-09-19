<?php

use Illuminate\Database\Seeder;

class VehiculoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('vehiculos')->truncate();

      DB::table('vehiculos')->insert([
        'dominio' => strtoupper(str_random(7)),
        'userId' => 1,
      ]);

      DB::table('vehiculos')->insert([
        'dominio' => strtoupper(str_random(7)),
        'userId' => 2,
      ]);

      DB::table('vehiculos')->insert([
        'dominio' => strtoupper(str_random(7)),
        'userId' => 3,
      ]);

      DB::table('vehiculos')->insert([
        'dominio' => strtoupper(str_random(7)),
        'userId' => 4,
      ]);

      DB::table('vehiculos')->insert([
        'dominio' => strtoupper(str_random(7)),
        'userId' => 5,
      ]);

      DB::table('vehiculos')->insert([
        'dominio' => strtoupper(str_random(7)),
        'userId' => 6,
      ]);
    }
}
