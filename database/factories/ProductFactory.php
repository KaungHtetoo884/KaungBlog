<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    return [
        'title'=>$faker->sentence,
        'price'=>rand(10,50),
        'description'=>$faker->paragraph,
        'user_id'=>rand(1,4)
    ];
});
