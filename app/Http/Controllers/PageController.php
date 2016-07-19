<?php

namespace App\Http\Controllers;

use App\Brand;
use App\Category;
use App\Product;
use Illuminate\Http\Request;

use App\Http\Requests;

class PageController extends Controller
{
    protected $data = [];
    public function getIndex()
    {
        $data['brands'] = Brand::all();
        $data['categories'] = Category::all();
        $data['products'] = Product::all();
        
        return view('pages.index', $data);
    }

    public function getProducts($brand)
    {
        $brand_id = \DB::table('brands')->where('name', $brand)->value('id');
        $data['goods'] = Product::where('brand_id', $brand_id)->get();
        $data['brand'] = $brand;
        $data['brands'] = Brand::all();
        $data['categories'] = Category::all();
        $data['products'] = Product::all();

        return view('pages.products', $data);
    }

    public function getCategory($category)
    {
        $category_id = \DB::table('categories')->where('name', $category)->value('id');
        $data['goods'] = Product::where('category_id', $category_id)->get();
        $data['category'] = $category;
        $data['brands'] = Brand::all();
        $data['categories'] = Category::all();
        $data['products'] = Product::all();

        return view('pages.category', $data);
    }
}
