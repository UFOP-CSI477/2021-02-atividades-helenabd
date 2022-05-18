<?php

use Illuminate\Support\Facades\Route;
use App\Models\Product;
use App\Http\Controllers\ProductController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('principal');
})->name('principal');

Route::resource('/products', ProductController::class);

// Route::get('/products', function () {
//     $products = Product::all();
//     return view('products', [
//         'products' => $products
//     ]);
// });

// Route::get('/products/{id}', function ($id) {
//     $products = Product::all();
//     $product = $products->where('id', $id);
//     return view('products', [
//         'products' => $product
//     ]);
// });
