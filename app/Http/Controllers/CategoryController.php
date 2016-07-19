<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

use App\Http\Requests;

class CategoryController extends Controller
{
    protected $data =[];
    public function getCategory($category)
    {
        $category_id = \DB::table('categories')->where('name', $category)->value('id');
        $data['goods'] = Product::where('category_id', $category_id)->get();
        $data['category'] = $category;

        return view('categories.category', $data);
    }
}
