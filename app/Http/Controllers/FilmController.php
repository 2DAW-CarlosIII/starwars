<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\characters;

class FilmController extends Controller {
	// Mostrar Articulo Particular:
	public function show($id) { 
		// Controlador Accede Al Model Devuelve Vista:
		$characters = characters::findOrFail($id);
		return view('characters', array('characters' => $characters));
		//return $characters->toJson();
	}
}
