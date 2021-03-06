<?php

use Faker\Generator as Faker;
use App\Models\User;
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

$factory->define(User::class, function (Faker $faker) {
    $date_time = $faker->date . ' ' . $faker->time;
    return [
        'username' => $faker->name,
        'nickname' => $faker->name,
        'avatar' => 'http://www.gravatar.com/avatar',
        'openid' => str_random(10),
        'phone' => '18256084531',
        'status' => rand(0, 2),
        'created_at' => $date_time,
        'updated_at' => $date_time,
    ];
});
