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

// Importar el controladores:
use App\Http\Controllers\FilmController;
use App\Http\Controllers\CharactersController;
use App\Http\Controllers\newCharacterController; 

// Creacion de Ruta Show Personajes Por Film:
Route::pattern('id', '\d+');  // Esto hace que todos los  'id' del Archivo, solo pueda ser uno o mas digitos!
Route::get('/films/{id}/characters', [FilmController::class, 'show']);
// ------------------------------------- 

Route::get('/', function () {
    return view('welcome');
});

Route::get('/films', function () {
    return view('films');
});

// Mostrar Todos los Caracteres:
Route::get('/characters', [CharactersController::class, 'index']);
//Route::get('/characters', function () {
//    return view('characters');
//});

// Nuevo Caracter:
Route::get('/characters/newCharacter', function() {
        return view('newCharacter');
});
Route::post('/characters/newCharacter', function() {
        return [newCharacterController::class, 'store']);
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
