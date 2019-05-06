<?php

use App\Leaderboard;
use Illuminate\Support\Str;
use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(Leaderboard::class, function (Faker $faker) {
    return [
        'employee_name' => $faker->name,
        'cpo' => $faker->randomFloat,
        'average_order_size' => $faker->randomFloat,
        'number_of_sales' => $faker->randomDigit
    ];
});
