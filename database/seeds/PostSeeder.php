<?php

use Illuminate\Database\Seeder;

use Faker\Factory;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        $limit = 30;
        for ($i=0; $i < $limit; $i++) { 
        	DB::table('posts')->insert([
        		'title' => $faker->sentence,
        		'description' => implode('. ', $faker->sentences),
        		'content' => $faker->paragraph($nbSentences= $faker->numberBetween($min = 40, $max = 80), $variableNbSentences=true),
        		'image_url' => $faker->randomElement($array = array ('images/blog/blog-one.jpg','images/blog/blog-two.jpg','images/blog/blog-three.jpg')),
        		'user_id' => App\User::pluck('id')->random()
        	]);
        }
    }
}
