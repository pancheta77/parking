<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class EstaciomamientoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('estacionamientos')->truncate();

      DB::table('estacionamientos')->insert([
        'horaDesde' => Carbon::now()->subHours(rand(1, 5)),
        'horaHasta' => Carbon::now()->addHours(rand(1, 3)),
        'vehiculoId' => 1,
        'zonaId' => rand(1, 3),
        'monto' => 0,
        'origenId' => rand(1, 5),
        'estado' => 'Activo',
      ]);

      DB::table('estacionamientos')->insert([
        'horaDesde' => Carbon::now()->subHours(rand(1, 5)),
        'horaHasta' => Carbon::now()->addHours(rand(1, 3)),
        'vehiculoId' => 2,
        'zonaId' => rand(1, 3),
        'monto' => 0,
        'origenId' => rand(1, 5),
        'estado' => 'Activo',
      ]);

      DB::table('estacionamientos')->insert([
        'horaDesde' => Carbon::now()->subHours(rand(1, 5)),
        'horaHasta' => Carbon::now()->addHours(rand(1, 3)),
        'vehiculoId' => 3,
        'zonaId' => rand(1, 3),
        'monto' => 0,
        'origenId' => rand(1, 5),
        'estado' => 'Activo',
      ]);

      DB::table('estacionamientos')->insert([
        'horaDesde' => Carbon::now()->subHours(rand(1, 5)),
        'horaHasta' => Carbon::now()->addHours(rand(1, 3)),
        'vehiculoId' => 4,
        'zonaId' => rand(1, 3),
        'monto' => 0,
        'origenId' => rand(1, 5),
        'estado' => 'Activo',
      ]);

      DB::table('estacionamientos')->insert([
        'horaDesde' => Carbon::now()->subHours(rand(1, 5)),
        'horaHasta' => Carbon::now()->addHours(rand(1, 3)),
        'vehiculoId' => 5,
        'zonaId' => rand(1, 3),
        'monto' => 0,
        'origenId' => rand(1, 5),
        'estado' => 'Activo',
      ]);

      DB::table('estacionamientos')->insert([
        'horaDesde' => Carbon::now()->subHours(rand(1, 5)),
        'horaHasta' => Carbon::now()->addHours(rand(1, 3)),
        'vehiculoId' => 6,
        'zonaId' => rand(1, 3),
        'monto' => 0,
        'origenId' => rand(1, 5),
        'estado' => 'Activo',
      ]);
    }
}
