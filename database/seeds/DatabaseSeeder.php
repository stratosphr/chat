<?php

use App\Article;
use App\Client;
use App\Order;
use App\Tour;
use App\Truck;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $articles = factory(Article::class, 5)->create();
        factory(Truck::class, 5)->create();
        factory(Client::class, 10)->create();
        $tours = factory(Tour::class, 10)->create();
        $tours->each(function (Tour $tour) use ($articles) {
            $orders = factory(Order::class, rand(3, 6))->create();
            $orders->each(function (Order $order) use ($articles) {
                $order->articles()->sync($articles->random(rand(1, $articles->count())));
            });
            $tour->orders()->sync($orders);
        });
    }
}
