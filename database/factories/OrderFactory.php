<?php

/** @var Factory $factory */

use App\Client;
use App\Order;
use Faker\Generator as Faker;
use Illuminate\Database\Eloquent\Factory;

$factory->define(Order::class, function (Faker $faker) {
    return [
        'client_id' => $faker->randomElement(Client::all()->pluck('id')->toArray())
    ];
});
