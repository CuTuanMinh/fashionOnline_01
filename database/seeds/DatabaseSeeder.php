<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call([
        	BrandSeeder::class,
        	CategorySeeder::class,
            UserSeeder::class,
        	PostSeeder::class,
        	ProductSeeder::class,
        	CategoryPostSeeder::class,
        	CategoryProductSeeder::class
        ]);
    }
}
