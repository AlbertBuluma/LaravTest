<?php

use Faker\Generator as Faker;

$factory->define(App\Task::class, function (Faker $faker) {
    return [
        'firstname' => $faker->sentence(),
        'lastname' => $faker->sentence()
    ];
});