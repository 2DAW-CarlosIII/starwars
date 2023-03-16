<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PeliculasController;
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
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
Route::get('/films', function () {
    return view('films');
});

// Route::get('/characters', function () {
//     return view('characters');
// });

Route::get('/personajes',[PeliculasController::class,'getIndex']);

Route::get('/personajes/create',[PeliculasController::class,'getCreate']);
Route::post('/personajes/create',[PeliculasController::class,'postCreate']);

Route::get('/personaje/{id}',[PeliculasController::class,'getPersonaje']);


