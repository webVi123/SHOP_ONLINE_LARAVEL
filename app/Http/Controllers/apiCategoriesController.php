<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class apiCategoriesController extends Controller
{
    //
    public function index()
    {
        return Category::all();
    }

    public function show($id)
    {
        return Category::find($id);
    }

    public function store(Request $request)
    {
        $product = Category::create($request->all());
        return response()->json($product, 201);
    }

    public function update(Request $request, $id)
    {
        $product = Category::findOrFail($id);
        $product->update($request->all());
        return response()->json($product, 200);
    }

    public function delete($id)
    {
        $product = Category::findOrFail($id);
        $product->delete();
        return response()->json(null, 204);
    }

}
