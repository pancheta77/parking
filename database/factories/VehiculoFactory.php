<?php

use Faker\Generator as Faker;

$factory->define(App\Vehiculo::class, function (Faker $faker) {
    return [
        'dominio' => strtoupper(str_random(7)),
    ];
});
