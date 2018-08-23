<?php

use Faker\Generator as Faker;

$factory->define(App\CategoryProduct::class, function (Faker $faker) {
    return [
        		'category_id' => App\Category::pluck('id')->random(),
        		'product_id' => App\Product::pluck('id')->random()
    ];
});
