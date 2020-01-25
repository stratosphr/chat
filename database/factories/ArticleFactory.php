<?php

/** @var Factory $factory */

use App\Article;
use Faker\Generator as Faker;
use Illuminate\Database\Eloquent\Factory;

$factory->define(Article::class, function (Faker $faker) {
    return [
        'code' => $faker->unique()->regexify('[A-Z]{4}-[0-9]{2}'),
        'label' => $faker->unique()->text(255),
        'price' => $faker->numberBetween(100, 300)
    ];
});
