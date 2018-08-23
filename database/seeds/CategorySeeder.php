<?php

use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
        	['name'=>'SPORTSWEAR'],
        	['name'=>'MENS'],
        	['name'=>'WOMENS'],
        	['name'=>'KIDS'],
        	['name'=>'FASHION'],
        	['name'=>'HOUSEHOLDS'],
        	['name'=>'INTERIORS'],
        	['name'=>'CLOTHING'],
        	['name'=>'BAGS'],
        	['name'=>'SHOES']
        ]);
    }
}
