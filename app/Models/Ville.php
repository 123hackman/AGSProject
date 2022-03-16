<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ville extends Model
{
    use HasFactory;

    protected $fillable = ['nomVlle', 'codePostal', 'rue', 'adresse'];

    public function etablissement(){
        return $this->belongsToMany(etablissement::class, 'gerant');
    }
}
