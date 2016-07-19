<?php

use Illuminate\Database\Seeder;

class BrandtableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $brand = \App\Brand::create(['name' => 'Sony']);
        $brand = \App\Brand::create(['name' => 'Nokia']);
        $brand = \App\Brand::create(['name' => 'Samsung']);
        $brand = \App\Brand::create(['name' => 'Apple']);
    }
}
