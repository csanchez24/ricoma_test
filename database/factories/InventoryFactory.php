<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Inventory;
use Faker\Generator as Faker;

$factory->define(Inventory::class, function (Faker $faker) {
    return [
        //
        'user_id' => function () {
            return App\User::inRandomOrder()->first()->id;
        },
        'color_id' => function () {
            return App\Color::inRandomOrder()->first()->id;
        },
        'product_id' => function () {
            return App\Product::inRandomOrder()->first()->id;
        },
        'size_id' => $faker->randomElement(['1' ,'2','3']),
        'quantity' => $faker->randomDigit,
    ];
});
