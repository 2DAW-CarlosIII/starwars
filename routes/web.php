<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CharactersController;
use App\Http\Controllers\CharacterFilmsController;

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

Route::get('/films/{id}/characters', [CharacterFilmsController::class, "getFilmCharacters"]);

Route::get('/newCharacter', [CharactersController::class, "getNewCharacterForm"]);
Route::put('/characterInsert', [CharactersController::class, "insertCharacter"]);
Route::get('/characters', [CharactersController::class, "getAllCharacters"]);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
