<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Product;

class apiHomeController extends Controller
{
    //
    public function index()
    {
        $bestsellers = Product::where('sold', '>', 200)->limit(4)->get();
        $view = Product::where('view', '>', 500)->limit(8)->get();

        return response()->json([
            'status' => 200,
            'data' => [
                'bestsellers' => $bestsellers,
                'view' => $view
            ]
        ]);
        
    }
    

}
