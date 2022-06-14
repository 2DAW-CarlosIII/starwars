<?php

namespace App\Http\Controllers;

use App\Models\Character;
use Illuminate\Broadcasting\Channel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CharactersController extends Controller
{

    public function getOneFilmCharacters($id) {


        $characters_id = DB::table('character_films')->where('id_film', $id)->get();

        foreach($characters_id as $id) {
            $characters = Character::find($id);
        }

        return view('characters',[
            'characters' => $characters
        ]);
    }

    public function getNewCharacter() {
        return view('newCharacter');
    }

    public function postNewCharacter(Request $request) {

        $character = new Character();
        $character->name = $request->input('InputName');
        $character->birth_year = $request->input('InputBirthYear');
        $character->planet_id = $request->input('InputPlanetId');
        $character->url = $request->input('url-new');
        $character->save();

        return view('welcome');
    }


    public function verCharacters() {
        $characters = Character::all();

        return view('characters',[
            'characters' => $characters
        ]);
    }
}
