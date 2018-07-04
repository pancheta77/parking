<?php

use Carbon\Carbon;

use Faker\Generator as Faker;

$factory->define(App\Programado::class, function (Faker $faker) {
    return [
        'horaDesde' => Carbon::now(),
        'horaHasta' => Carbon::now()->addHours(rand(1, 8)),
        'vehiculo_id' => rand(1, 25),
        'zona_id' => rand(1, 3),
    ];
});
