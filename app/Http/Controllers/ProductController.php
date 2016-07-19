<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

use App\Http\Requests;

class ProductController extends Controller
{
    protected $data = [];
    public function getProducts($brand)
    {
        $brand_id = \DB::table('brands')->where('name', $brand)->value('id');
        $data['goods'] = Product::where('brand_id', $brand_id)->get();
        $data['brand'] = $brand;

        return view('products.products', $data);
    }
}
