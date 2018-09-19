<?php

use Faker\Generator as Faker;

$factory->define(App\Inspector::class, function (Faker $faker) {
    return [
        'apellido' => $faker->lastname,
        'nombre' => $faker->name,
        'legajo' => rand(1,9999),
    ];
});
