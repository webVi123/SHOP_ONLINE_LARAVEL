<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\apiProductController;
use App\Http\Controllers\apiCategoriesController;
use App\Http\Controllers\apiHomeController;


Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');



Route::get('products', [apiProductController::class, 'index']);
Route::get('products/{id}', [apiProductController::class, 'show']);
Route::post('products', [apiProductController::class, 'store']);
Route::put('products/{id}', [apiProductController::class, 'update']);
Route::delete('products/{id}', [apiProductController::class, 'delete']);

Route::get('product', [apiHomeController::class, 'index']);

Route::get('categories', [apiCategoriesController::class, 'index']);
Route::get('categories/{id}', [apiCategoriesController::class, 'show']);
Route::post('categories', [apiCategoriesController::class, 'store']);
Route::put('categories/{id}', [apiCategoriesController::class, 'update']);
Route::delete('categories/{id}', [apiCategoriesController::class, 'delete']);


