<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CharacterController;

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

Route::get('/characters',[CharacterController::class, 'getIndex']);

Route::get('/insertCharacter', function (){
    return view('newCharacter');
});

Route::get('/insertCharacter', [CharacterController::class,'addCharacter']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
