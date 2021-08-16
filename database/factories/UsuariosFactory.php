<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Usuario;
use Faker\Generator as Faker;

$factory->define(Usuario::class, function (Faker $faker) {
    return [
        'username' => $faker->username,
        'password' => $faker->password,
        'name' => $faker->name
    ];
});
