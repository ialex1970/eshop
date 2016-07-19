<?php

use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $product = new \App\Product();
        $product->name = 'iPhone 6S 16Gb';
        $product->category_id = 1;
        $product->brand_id = 4;
        $product->description = 'На задней части теперь красуется литера S, раньше такое было только в iPhone 3Gs, остальные «эски» были без опознавательных знаков. ';
        $product->price = 40000;
        $product->is_active = true;
        $product->save();

        $product = new \App\Product();
        $product->name = 'Nokia Lumia 730';
        $product->category_id = 1;
        $product->brand_id = 2;
        $product->description = 'На задней части теперь красуется литера S, раньше такое было только в iPhone 3Gs, остальные «эски» были без опознавательных знаков. ';
        $product->price = 15000;
        $product->is_active = true;
        $product->save();
    }
}
