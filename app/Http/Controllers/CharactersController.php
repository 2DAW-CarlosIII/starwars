<?php

namespace App\Http\Controllers;

use App\Models\Characters;
use Illuminate\Http\Request;

class CharactersController extends Controller
{
    public function getIndex()
    {
        $characters = Characters::all();
        return view ('characters', array('characters'=>$characters));
    }
    public function getCreate()
    {
        return view('newCharacter');
    }
    public function postCreate(Request $request)
    {
        $characters = new Characters;
        $characters->Name = $request->input('InputName');
        $characters->birth_year = $request->input('InputBirthYear');
        $characters->height = $request->input('InputHeight');
        $characters->mass = $request->input('InputMass');
        $characters->hair_color = $request->input('InputHairColor');
        $characters->skin_color = $request->input('InputSkinColor');
        $characters->eye_color = $request->input('InputEyeColor');
        $characters->gender = $request->input('InputGender');
        $characters->planet_id = $request->input('InputPlanetId');
        $characters->url = $request->input('url-new');
        $characters->save();

        return redirect()->action([CharactersController::class, 'getIndex']);
    }
    public function getFilmCharacter($id)
    {
        $characters = Characters::findOrFail($id);
        return view ('characters', array('characters'=>$characters,
                                         'id' => $id));
    }

}
