<?php

use Illuminate\Database\Seeder;

use Faker\Factory;

class CategoryPostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        $limit = 50;
        for ($i=0; $i < $limit; $i++) { 
        	DB::table('category_posts')->insert([
        		'category_id' => App\Category::pluck('id')->random(),
        		'post_id' => App\Post::pluck('id')->random()
        	]);
        }
    }
}
