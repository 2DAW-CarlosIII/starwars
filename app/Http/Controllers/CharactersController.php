<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Character;

class CharactersController extends Controller
{
    public function getAllCharacters(){
        return view("characters", array("arrayPersonajes" => Character::all()));
    }

    public function getNewCharacterForm(){
        return view("newCharacter");
    }

    public function insertCharacter(Request $request){
        //Para generar un nuevo id cogemos el ultimo id y le sumamos uno
        $lastId = Character::orderBy('id', 'desc')->first()->id;
        Character::insert(["id"=>$lastId+1,
                            "name"=>$request->InputName,
                            "gender"=>$request->InputGender,
                            "birth_year"=>$request->InputBirthYear,
                            "planet_id"=>$request->InputPlanetId,
                            "url"=>$request->InputUrl]);
        //Al terminar se redirige para poder ver todos los personajes
        //Deberías poder ver el nuevo personaje al final de la lista
        return redirect('/characters');
    }
}
