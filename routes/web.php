<?php

use App\Http\Controllers\CharactersController;
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
});

Route::get('/films', function () {
    return view('films');
});

Route::get('/films/{id}/characters', [CharactersController::class, 'getOneFilmCharacters']);

Route::get('/characters', [CharactersController::class, 'verCharacters']);

Route::get('/newCharacter', [CharactersController::class, 'getNewCharacter']);

Route::post('/newCharacter', [CharactersController::class, 'postNewCharacter']);//->middleware(['auth'])->name('characters');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
