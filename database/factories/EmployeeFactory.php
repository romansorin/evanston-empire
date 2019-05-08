<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Employee;
use Faker\Generator as Faker;

$factory->define(Employee::class, function (Faker $faker) {
    return [
        'name' => $faker->name(),
        'university' => $faker->city(),
        'city_name' => $faker->city(),
        'state_name' => $faker->state()
    ];
});
