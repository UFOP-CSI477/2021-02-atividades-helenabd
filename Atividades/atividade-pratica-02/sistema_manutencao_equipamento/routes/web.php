<?php

use App\Http\Controllers\EquipamentoController;
use App\Http\Controllers\RegistroController;
use App\Http\Controllers\UserController;
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
})->middleware(['auth'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/administrativo', function () {
        return view('administrativo');
    })->name('administrativo');
});
Route::resource('/usuarios', UserController::class);

Route::resource('/equipamentos', EquipamentoController::class);

Route::resource('/registros', RegistroController::class);

Route::get('/servicos', function () {
    return view('servicos');
})->name('servicos');

Route::get('/equipamentos.indexByName', [EquipamentoController::class, 'indexByName'])->name('equipamentos.indexByName');

Route::get('/registros.indexByDate', [RegistroController::class, 'indexByDate'])->name('registros.indexByDate');

Route::get('/registros.groupByEquipamento', [RegistroController::class, 'groupByEquipamento'])->name('registros.groupByEquipamento');

Route::get('/registros.showByEquipamento', [RegistroController::class, 'showByEquipamento'])->name('registros.showByEquipamento');

require __DIR__ . '/auth.php';
