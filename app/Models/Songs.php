<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Songs extends Model
{
    use HasFactory;

    public function Genre(){
       return $this->belongsTo(Genres::class, foreignKey:"genres_id");
    }

    public function Playlist(){ 
        return $this->belongsToMany(Playlist::class);
    }
}
