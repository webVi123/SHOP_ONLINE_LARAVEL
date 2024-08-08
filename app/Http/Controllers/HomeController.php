<?php

namespace App\Http\Controllers;

use App\Models\Product;


class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except(['index']);
    }

   
    public function index(){
        $products = Product::New(8);
        $productbest=Product::Bestseller(8);
        $productview=Product::View(6);
        return view('home', compact('products','productbest','productview'));
      
    }
}
