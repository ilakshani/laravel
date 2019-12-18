<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Person;
use Faker\Generator as Faker;

$factory->define(Person::class, function (Faker $faker) {
    return [
        'f_name' => $faker->firstName,
        'l_name' => $faker->lastName,
        'email' => $faker->safeEmail,
        'p_number' => $faker->phoneNumber,
        'city' => $faker->city,

        //
    ];
});
