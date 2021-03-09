<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Grille extends Model
{
    use HasFactory;
 
    public function chapitres(){
        return $this->hasMany(Chapitre::class);
    }
}
