<?php

use Illuminate\Database\Seeder;

use Faker\Factory;

class CategoryProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        $limit = 100;
        for ($i=0; $i < $limit; $i++) { 
        	DB::table('category_products')->insert([
        		'category_id' => App\Category::pluck('id')->random(),
        		'product_id' => App\Product::pluck('id')->random()
        	]);
        }
    }
}
