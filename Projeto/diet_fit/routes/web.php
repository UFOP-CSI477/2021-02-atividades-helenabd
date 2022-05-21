<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\FoodController;
use App\Http\Controllers\ExerciseController;
use App\Http\Controllers\WaterController;

use App\Models\Food;
use App\Models\Exercise;
use App\Models\Water;

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

Route::get('/', function () {
    return view('principal');
})->name('principal');

Route::get('/home', function () {
    return view('home');
})->name('home');

Route::get('/progress', function () {
    // Food
    $foods = Food::all();
    $totalFood = 0;
    foreach ($foods as $food) {
        $totalFood = $totalFood + $food->calories;
    }
    // Exercise
    $exercises = Exercise::all();
    $totalExercise = 0;
    foreach ($exercises as $exercise) {
        $totalExercise = $totalExercise + $exercise->calories;
    }
    // Water
    $waters = Water::all();
    $totalWater = 0;
    foreach ($waters as $water) {
        $totalWater = $totalWater + $water->amount;
    }
    // TODO: descobrir melhor forma de pegar esse valores utilizando Controller
    // TODO: descobrir como buscar os valores a partir da data
    return view('progress', ['foods' => $foods, 'totalFood' => $totalFood, 'exercises' => $exercises, 'totalExercise' => $totalExercise, 'waters' => $waters, 'totalWater' => $totalWater]);
})->name('progress');

Route::get('/profile', function () {
    return view('profile');
})->name('profile');

Route::resource('/food', FoodController::class);

Route::resource('/exercise', ExerciseController::class);

Route::resource('/water', WaterController::class);
