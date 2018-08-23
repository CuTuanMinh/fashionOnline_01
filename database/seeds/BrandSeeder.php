<?php

use Illuminate\Database\Seeder;

class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('brands')->insert([
        	['name'=>'ACNE'],
        	['name'=>'GRUNE ERDE'],
        	['name'=>'ALBIRO'],
        	['name'=>'RONHILL'],
        	['name'=>'ODDMOLLY'],
        	['name'=>'BOUDESTIJN'],
        	['name'=>'ROSCH CREATIVE CULTURE']
        ]);
    }
}
