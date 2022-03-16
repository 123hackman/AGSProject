<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class publication extends Model
{
    use HasFactory;

    protected $fillable = [
        'categorie_id',
        'complement_id',
        'etablissement_id',
        'libelle',
        'litType',
        'imagePath',
        'disponible',
        'prix',
        'description',
        'reduction',
    ];

    public function client(){
        return $this->belongsToMany(Client::class, 'reservation');
    }
    
    public function complement(){
        return $this->belongsTo(complement::class);
    }
    
    public function etablissement(){
        return $this->belongsTo(etablissement::class);
    }

    public function reservations(){
        return $this->hasMany(reservation::class);
    }
}