<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

$factory->define(Infraestructura\User::class, function (Faker\Generator $faker) {
    return [
        'nombres' => $faker->name,
        'apellidos'=> $faker->lastName,
        'cedula'   => $faker->randomNumber($nbDigits = NULL),
        'celular'  => $faker->randomNumber($nbDigits = NULL),
        'facultad' => $faker->state,
        'carrera'  => $faker->city,
        'materia'  => $faker->jobTitle,
        'sigla'    => $faker->secondaryAddress,
        'email' => $faker->email,
        'password' => bcrypt(str_random(10)),
        'remember_token' => str_random(10),
        'rol' => $faker->randomElement(['encargado','chofer','mecanico','docente']),
        'tipo' => $faker->randomElement(['admin','supervisor','usuario']),
        'active'=> $faker->boolean
    ];
});
