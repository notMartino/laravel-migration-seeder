<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;
use App\Movie;

$factory->define(Movie::class, function (Faker $faker) {
    return [
        'title' => $faker -> word,
        'original_title' => $faker -> word,
        'date' => $faker -> date,
        'vote' => $faker -> numberBetween(0, 10)
    ];
});
