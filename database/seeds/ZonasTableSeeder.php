<?php

use Illuminate\Database\Seeder;

class ZonasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('zonas')->truncate();

      DB::table('zonas')->insert([
        'nombre' => 'Centro 1',
        'descripcion' => 'Centro comercial calle 8',
      ]);

      DB::table('zonas')->insert([
        'nombre' => 'Centro 2',
        'descripcion' => 'Centro comercial calle 12',
      ]);

      DB::table('zonas')->insert([
        'nombre' => 'Tribunales',
        'descripcion' => 'Tribunales de La Plata',
      ]);
    }
}
