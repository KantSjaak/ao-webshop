<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\OrderDetails;
use Faker\Generator as Faker;

$factory->define(OrderDetails::class, function (Faker $faker) {
    return [
        'order_id' => factory(\App\Order::class),
        //'product_id' => factory(\App\Products::class),
        'product_id' => $faker->numberBetween('1', '17'),
        'amount' => $faker->numberBetween('1', '5'),
        'price' => $faker->numberBetween('50', '7500'),
    ];
});
