<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Character;
use Illuminate\Support\Facades\DB;


class CharacterController extends Controller
{
    //Mostrar Personajes
    public function getIndex(){
        $characters = DB::table('characters')->get();
        return view('characters',array('characters'=> $characters));
    }

    public function getShow($id){
        $character = Character::findOrFail($id);
        return view('characters',array('personaje'=> $character));
    }

    public function addCharacter(Request $request){
        if( null!== ($request->all())){

            $character = new Character;
            $character->id = uniqid();
            $character->name = $request->name;
            $character->birth_year = $request->birth_year;
            $character->planet_id = $request->planet_id;
            $character->url = $request->url;
            $character->save();
        }
    }
}
