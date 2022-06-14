<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
// Importar Model Para Acceso a Datos:
use App\Models\characters;

class CharactersController extends Controller {
    // index : Mostrar Todos los Articulos
   public function index() {
	// Controlador Accede Al Model Devuelve Vista:
        $characters = characters::all();
        return view('characters', array('characters' => $characters));
	//return $characters->toJson();
   }
}
