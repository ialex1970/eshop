<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

use App\Http\Requests;

class PageController extends Controller
{
    protected $data = [];
    
    public function getIndex()
    {
        $data['products'] = Product::all();
        
        return view('pages.index', $data);
    }

    public function getAbout()
    {
        return view('pages.about');
    }

    public function getContacts()
    {
        return view('pages.contacts');
    }

}
