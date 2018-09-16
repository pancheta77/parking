<?php

use Carbon\Carbon;

use Faker\Generator as Faker;

$factory->define(App\Estacionamiento::class, function (Faker $faker) {
    return [
        'horaDesde' => Carbon::now()->subHours(rand(1, 10)),
        'horaHasta' => Carbon::now()->subHours(rand(1, 8)),
        'vehiculoId' => rand(1, 15),
        'zonaId' => rand(1, 3),
        'monto' => 0,
        'origenId' => rand(1, 5),
        'estado' => 'Activo',
    ];
});
