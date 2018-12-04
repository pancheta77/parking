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
        'horaHasta' => null,
        'vehiculoId' => 1,
        'zonaId' => rand(1, 3),
        'monto' => 0,
        'origenId' => rand(1, 5),
        'estado' => 'Activo',
      ]);

      DB::table('estacionamientos')->insert([
        'horaDesde' => Carbon::now()->subHours(rand(1, 5)),
        'horaHasta' => null,
        'vehiculoId' => 2,
        'zonaId' => rand(1, 3),
        'monto' => 0,
        'origenId' => rand(1, 5),
        'estado' => 'Activo',
      ]);

      DB::table('estacionamientos')->insert([
        'horaDesde' => Carbon::now()->subHours(rand(1, 5)),
        'horaHasta' => null,
        'vehiculoId' => 3,
        'zonaId' => rand(1, 3),
        'monto' => 0,
        'origenId' => rand(1, 5),
        'estado' => 'Activo',
      ]);

      DB::table('estacionamientos')->insert([
        'horaDesde' => Carbon::now()->subHours(rand(1, 5)),
        'horaHasta' => null,
        'vehiculoId' => 4,
        'zonaId' => rand(1, 3),
        'monto' => 0,
        'origenId' => rand(1, 5),
        'estado' => 'Activo',
      ]);

      DB::table('estacionamientos')->insert([
        'horaDesde' => Carbon::now()->subHours(rand(1, 5)),
        'horaHasta' => null,
        'vehiculoId' => 5,
        'zonaId' => rand(1, 3),
        'monto' => 0,
        'origenId' => rand(1, 5),
        'estado' => 'Activo',
      ]);

      DB::table('estacionamientos')->insert([
        'horaDesde' => Carbon::now()->subHours(rand(1, 5)),
        'horaHasta' => null,
        'vehiculoId' => 6,
        'zonaId' => rand(1, 3),
        'monto' => 0,
        'origenId' => rand(1, 5),
        'estado' => 'Activo',
      ]);
    }
}
