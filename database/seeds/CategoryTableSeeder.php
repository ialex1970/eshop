<?php

use Illuminate\Database\Seeder;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $category = new \App\Category();
        $category->name = 'Смартфон';
        $category->save();

        $category = new \App\Category();
        $category->name = 'Ноутбук';
        $category->save();

        $category = new \App\Category();
        $category->name = 'Планшет';
        $category->save();

        $category = new \App\Category();
        $category->name = 'Монитор';
        $category->save();
    }
}
