<?php

use Faker\Generator as Faker;

$factory->define(App\Product::class, function (Faker $faker) {
    return [
        		'name' => $faker->name,
        		'title' => $faker->sentence,
        		'description' => implode('. ', $faker->sentences),
        		'price' => $faker->numberBetween($min = 50, $max = 200),
        		'brand_id' => App\Brand::pluck('id')->random(),
        		'image_url' => $faker->randomElement($array = array ('images/home/product1.jpg','images/home/product2.jpg','images/home/product3.jpg','images/home/product4.jpg','images/home/product5.jpg','images/home/product6.jpg','images/shop/product7.jpg','images/shop/product8.jpg','images/shop/product9.jpg','images/shop/product10.jpg','images/shop/product11.jpg','images/shop/product12.jpg'))
    ];
});
