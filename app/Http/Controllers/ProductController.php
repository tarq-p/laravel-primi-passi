<?php

namespace App\Http\Controllers;

// use Illuminate\Http\Request;
use App\Product;

class ProductController extends Controller
{
    public function index()
    {

        $products = Product::all();
        dd($products);

        return view('home',['cards'=>'products']);

    }
}
