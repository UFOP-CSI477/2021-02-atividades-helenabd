<?php

use App\Http\Controllers\ColetaController;
use App\Http\Controllers\EntidadeController;
use App\Http\Controllers\ItemController;
use Illuminate\Support\Facades\Route;

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
    return view('welcome');
})->name('welcome');

Route::get('/dashboard', function () {
    return view('welcome');
})->middleware(['auth'])->name('welcome');

Route::middleware('auth')->group(function () {
    Route::get('/administrativo', function () {
        return view('administrativo');
    })->name('administrativo');
});

Route::get('/geral', function () {
    return view('geral');
})->name('geral');

Route::resource('/items', ItemController::class);

Route::resource('/entidades', EntidadeController::class);

Route::resource('/coletas', ColetaController::class);

require __DIR__ . '/auth.php';
