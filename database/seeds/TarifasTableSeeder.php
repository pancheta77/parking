<?php

use Illuminate\Database\Seeder;

class TarifasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('tarifas')->truncate();

      DB::table('tarifas')->insert([
        'nombre' => 'Simple',
        'valor_base' => 15,
        'tasa' => 0,
      ]);

      DB::table('tarifas')->insert([
        'nombre' => 'Progresiva 1',
        'valor_base' => 15,
        'tasa' => 10, //Tasa incremento por hora 10%
      ]);

      DB::table('tarifas')->insert([
        'nombre' => 'Progresiva 2',
        'valor_base' => 15,
        'tasa' => 20, //Tasa incremento por hora 20%
      ]);
    }
}
