<?php

/** @var Factory $factory */

use App\Truck;
use Faker\Generator as Faker;
use Illuminate\Database\Eloquent\Factory;

$factory->define(Truck::class, function (Faker $faker) {
    return [
        'code' => $faker->regexify('[A-Z]{2}-[0-9]{3}-[A-Z]{2}'),
        'label' => $faker->sentence(4)
    ];
});
