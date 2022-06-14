<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
// Importar Model Para Acceso a Datos:
use App\Models\characters;

class newCharacterController extends Controller {
    // Store:  Cuando se haga el submit del Form, se Almacena:
    public function store(Request $request) {
	// Store Posts:
	$characters = characters::create($request->except('csrf'));
	return view('newCharacter');
    }
}
