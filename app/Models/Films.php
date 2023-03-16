<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Films extends Model
{
    use HasFactory;
    public function characters(){
        return $this->belongsTo(Characters::class,'id_character');
    }
}
