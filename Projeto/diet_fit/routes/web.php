<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\FoodController;
use App\Http\Controllers\ExerciseController;
use App\Http\Controllers\ProgressController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WaterController;

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

Route::get('/welcome', function () {
    return view('welcome');
})->name('welcome');

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::get('/register', function () {
    return view('register');
})->name('register');

Route::get('/principal', function () {
    return view('principal');
})->name('principal');

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/progress', function () {
    return view('progress');
})->name('progress');

Route::get('/progress.show', [ProgressController::class, 'show'])->name('progress.show');

Route::get('/profile', function () {
    return view('profile');
})->name('profile');


Route::resource('/food', FoodController::class);

Route::resource('/exercise', ExerciseController::class);

Route::resource('/water', WaterController::class);

Route::resource('/user', UserController::class);
