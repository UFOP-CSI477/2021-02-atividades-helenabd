<?php

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
    return view('home');
})->name('home');

Route::get('/dashboard', function () {
    return view('home');
})->middleware(['auth'])->name('dashboard');

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::get('/register', function () {
    return view('register');
})->name('register');

Route::middleware(['auth'])->group(function () {
    Route::get('/profile', function () {
        return view('profile');
    })->name('profile');

    Route::get('/progress', function () {
        return view('progress');
    })->name('progress');

    Route::get('/progress.show', [ProgressController::class, 'show'])->name('progress.show');

    Route::resource('/food', FoodController::class);

    Route::resource('/exercise', ExerciseController::class);

    Route::resource('/water', WaterController::class);

    Route::resource('/user', UserController::class);
});

require __DIR__ . '/auth.php';
