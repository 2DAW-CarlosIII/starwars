<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Character;
use App\Models\CharacterFilm;

class CharacterFilmsController extends Controller
{
    public function getFilmCharacters($id){
        $arrayPersonajes = array();

        $arrayCharacterFilm = CharacterFilm::where("id_film", $id)->get();

        foreach($arrayCharacterFilm as $characterFilm){
            array_push($arrayPersonajes, Character::findOrFail($characterFilm->id_character));
        }

        return view("characters", array("arrayPersonajes" => $arrayPersonajes));
    }
}
