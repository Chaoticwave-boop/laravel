<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
//use App\Models\Songs;

class Genres extends Model
{
    use HasFactory;

    public function Songs(){
        return $this->hasMany(Songs::class); 
    }
}
