<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;
use App\Todo;

$factory->define(Todo::class, function (Faker $faker) {
    return [
        //
        'title' => $faker->sentence($nbWords = 3, $variableNbWords = true),
        'body' => $faker->text($maxNbChars = 200),
        'due' => $faker->dayOfWeek($max = 'now'),
        'user_id' => $faker->numberBetween($min = 1, $max = 10),
    ];
});
