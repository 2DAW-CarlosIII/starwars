<?php

namespace App\Http\Controllers;

use App\Models\Character;
use Illuminate\Http\Request;
use App\Models\Character_Film;

class CharacterController extends Controller
{
    public function getCharacter($Id_Film){
        $personaje = new Character_Film();


        return view('characters',
                    array('personajes'=>Character_Film::find($Id_Film)));
    }

    public function getAllCharacter(){
        $personajes=Character::all();
        return view('characters',
               array('arrayPersonajes'=>$personajes));
    }

    public function newCharacter(Request $request) {

        $personaje = new Character();
        $personaje->name = $request->input('InputName');
        $personaje->birth_year = $request->input('InputBirthYear');
        $personaje->planet_id = $request->input('InputPlanetId');
        $personaje->url = $request->input('url-new');
        $personaje->save();


        return view('welcome');
    }
}
