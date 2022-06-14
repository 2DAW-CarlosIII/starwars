<?php

use App\Http\Controllers\CharacterController;
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

Route::get('/films/{Id_film}/characters', [CharacterController::class, 'getCharacter'])->name('characters');

Route::get('/characters', [CharacterController::class, 'getAllCharacter'])->name('allCharacters');

Route::get('/newCharacter', function(){
    return view('newCharacter');
});

Route::post('/newCharacter', [CharacterController::class, 'newCharacter'])->name('newCharacter');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
