<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Inventory;
use Faker\Generator as Faker;

$factory->define(Inventory::class, function (Faker $faker) {
    return [
        //
        'user_id' => function () {
            return factory(App\User::class)->create()->id;
        },
        'color_id' => function () {
            return factory(App\Color::class)->create()->id;
        },
        'product_id' => function () {
            return factory(App\Product::class)->create()->id;
        },
        'size_id' => $faker->randomElement(['1' ,'2','3']),
        'quantity' => $faker->randomDigit,
    ];
});
