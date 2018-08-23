<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
        	['name'=>'minh','email'=>'tuanminh@gmail.com','password'=>'tuanminh'],
        	['name'=>'duong','email'=>'dinhduong@gmail.com','password'=>'dinhduong'],
        	['name'=>'huyen','email'=>'thuhuyen@gmail.com','password'=>'thuhuyen'],
        	['name'=>'ngan','email'=>'haingan@gmail.com','password'=>'haingan'],
        	['name'=>'dong','email'=>'ngocdong@gmail.com','password'=>'ngocdong'],
        	['name'=>'nga','email'=>'nguyenthinga@gmail.com','password'=>'nguyenthinga'],
        	['name'=>'khanh','email'=>'vankhanh@gmail.com','password'=>'vankhanh'],
        	['name'=>'tu','email'=>'doananhtu@gmail.com','password'=>'doananhtu']
        ]);
    }
}
