<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class MovimientoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('movimientos')->truncate();

      DB::table('movimientos')->insert([
        'cuentaId' => 1,
        'fechaOperacion' => Carbon::now()->subDays(rand(1, 3)),
        'monto' => 50,
        'disponible' => 50,
        'motivo' => 'CargaInicial',
      ]);

      DB::table('movimientos')->insert([
        'cuentaId' => 2,
        'fechaOperacion' => Carbon::now()->subDays(rand(1, 3)),
        'monto' => 50,
        'disponible' => 50,
        'motivo' => 'CargaInicial',
      ]);

      DB::table('movimientos')->insert([
        'cuentaId' => 3,
        'fechaOperacion' => Carbon::now()->subDays(rand(1, 3)),
        'monto' => 50,
        'disponible' => 50,
        'motivo' => 'CargaInicial',
      ]);

      DB::table('movimientos')->insert([
        'cuentaId' => 4,
        'fechaOperacion' => Carbon::now()->subDays(rand(1, 3)),
        'monto' => 50,
        'disponible' => 50,
        'motivo' => 'CargaInicial',
      ]);

      DB::table('movimientos')->insert([
        'cuentaId' => 5,
        'fechaOperacion' => Carbon::now()->subDays(rand(1, 3)),
        'monto' => 2000,
        'disponible' => 2000,
        'motivo' => 'CargaInicial',
      ]);

      DB::table('movimientos')->insert([
        'cuentaId' => 6,
        'fechaOperacion' => Carbon::now()->subDays(rand(1, 3)),
        'monto' => 150,
        'disponible' => 150,
        'motivo' => 'CargaInicial',
      ]);
    }
}
