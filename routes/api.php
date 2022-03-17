<?php

use App\Http\Controllers\ProductCategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ResourceController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('test-binding', function (){
//   return (new ProductController(new ProductService(new Product(), new ProductRequest())))->index();
    return app()->make(ProductController::class)->index();
});

Route::get('{resource}', [ResourceController::class, 'index']);
Route::post('{resource}', [ResourceController::class, 'store']);
Route::put('{resource}/{resource_id}', [ResourceController::class, 'update']);
Route::delete('{resource}/{resource_id}', [ResourceController::class, 'destroy']);
//Route::resource('products', ProductController::class);
//Route::resource('product-categories', ProductCategoryController::class);
