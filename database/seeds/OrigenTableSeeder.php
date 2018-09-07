<?php

use Illuminate\Database\Seeder;

class OrigenTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('origens')->truncate();

      DB::table('origens')->insert([
        'nombre' => 'SMS',
      ]);

      DB::table('origens')->insert([
        'nombre' => 'APP',
      ]);

      DB::table('origens')->insert([
        'nombre' => 'Web',
      ]);

      DB::table('origens')->insert([
        'nombre' => 'Puntual',
      ]);

      DB::table('origens')->insert([
        'nombre' => 'Totem',
      ]);
    }
}
