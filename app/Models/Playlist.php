<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Playlist extends Model
{
    use HasFactory;

    public function SongsPlaylist(){
        return $this->hasMany(Songs::class); 
    }

    public function songs(){
        return $this->belongsToMany(Songs::class);


    }

    public function User(){
        return $this->belongsTo(User::class);
     }
}
