<?php

use Faker\Generator as Faker;

$factory->define(App\CategoryPost::class, function (Faker $faker) {
    return [
        		'category_id' => App\Category::pluck('id')->random(),
        		'post_id' => App\Post::pluck('id')->random()
    ];
});
