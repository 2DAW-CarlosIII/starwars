<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Flim extends Model
{
    use HasFactory;


    public function personajes()
    {
        return $this->belongsToMany(Flim::class, 'Character', 'id_character', 'id_flim');
    }
}
