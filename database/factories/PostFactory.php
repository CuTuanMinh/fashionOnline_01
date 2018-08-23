<?php

use Faker\Generator as Faker;

$factory->define(App\Post::class, function (Faker $faker) {
    return [
        		'title' => $faker->sentence,
        		'description' => implode('. ', $faker->sentences),
        		'content' => $faker->paragraph($nbSentences= $faker->numberBetween($min = 40, $max = 80), $variableNbSentences=true),
        		'image_url' => $faker->randomElement($array = array ('images/blog/blog-one.jpg','images/blog/blog-two.jpg','images/blog/blog-three.jpg')),
        		'user_id' => App\User::pluck('id')->random()
    ];
});
