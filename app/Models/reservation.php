<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class reservation extends Model
{
    use HasFactory;

    protected $fillable = [
        'client_id',
        'publication_id',
        'nbrReservation',
        'dateDebut',
        'dateFin',
        'cout',
    ];

    public function publication(){
        return $this->belongsTo(publication::class);
    }
    
}
