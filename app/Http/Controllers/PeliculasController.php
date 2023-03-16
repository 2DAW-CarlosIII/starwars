<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Character;


class PeliculasController extends Controller
{
    //
    public function getindex(){

    $personajes = Character::all();
    return view('/characters',array('arrayPersonajes'=>$personajes));




    }

    public function getPersonaje($id){

        $pelicula = Flim::findOrFail($id);
        return view('/characters',array('pelicula'=>$pelicula));



    }






    public function getCreate(){
        return view('newCharacter');
    }

    public function postCreate(Request $request){

        $personaje=new Character();

        $personaje->name = $request->input('InputName');
        $personaje->birth_year = $request->input('InputBirthYear');
        $personaje->planet_id = $request->input('InputPlanetId');
         $personajes->url= $request->input('url-new');
        $personaje->save();

        return "creado";

    }

}
