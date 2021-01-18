<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Products;
use Faker\Generator as Faker;

$factory->define(Products::class, function (Faker $faker) {
    return [
        'name' => $faker->word,
        'image_url' => 'https://image.freepik.com/vrije-vector/fout-met-glitch-effect-op-het-scherm-fout-404-pagina-niet-gevonden_143407-1.jpg',
        'category_id' => $faker->numberBetween('1', '5'),
        'price' => $faker->numberBetween('1', '2600'),
        'description' => $faker->paragraph
    ];
});
