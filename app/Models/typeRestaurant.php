<?php

namespace App\Models;

use App\Models\Categorie;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class typeRestaurant extends Model
{
    use HasFactory;

    public function categorie(){
        return $this->belongsTo(Categorie::class);
    }
}
