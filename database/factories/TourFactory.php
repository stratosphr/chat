<?php

/** @var Factory $factory */

use App\Tour;
use App\Truck;
use Faker\Generator as Faker;
use Illuminate\Database\Eloquent\Factory;

$factory->define(Tour::class, function (Faker $faker) {
    return [
        'truck_id' => $faker->randomElement(Truck::all()->pluck('id')->toArray())
    ];
});
