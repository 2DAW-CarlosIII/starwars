<?php

namespace App\Http\Controllers;

use App\Models\Character;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CharactersController extends Controller
{
    public function getPersonajes(){

        $personajes = Character::all();
        return view('characters', array('listaPersonajes' => $personajes));
    }

    public function newPersonaje()
    {
        return view('newCharacter');
    }

    public function postNewPersonaje(Request $request){

        $datosNuevoPersonaje = $request->all();
        DB::table('characters')->insert([
            'id' => (Character::max('id')) + 1,
            'name' => $datosNuevoPersonaje['name'],
            'birth_year' => $datosNuevoPersonaje['birth_year'],
            'planet_id' => $datosNuevoPersonaje['planet_id'],
            'url' => $datosNuevoPersonaje['url'],
        ]);

    }
}
