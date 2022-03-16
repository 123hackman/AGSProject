<?php

namespace App\Models;

use App\Models\typeHebergement;
use App\Models\typeVoyage;
use App\Models\typeRestaurant;
use Illuminate\Database\Eloquent\hasMany;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categorie extends Model

{
    use HasFactory;

    public function typeHebergements(){
        return $this->hasMany(typeHebergement::class);
    }

    public function typeVoyages(){
        return $this->hasMany(typeVoyage::class);
    }

    public function typeRestaurants(){
        return $this->hasMany(typeRestaurant::class);
    }
}
