<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Character extends Model
{
    use HasFactory;


    public function peliculas()
    {
        return $this->belongsToMany(Character::class, 'Flim', 'id_flim', 'id_character');
    }
}
