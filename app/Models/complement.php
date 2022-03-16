<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class complement extends Model
{
    use HasFactory;

    public function publication(){
        return $this->hasOne(publication::class);
    }
    
    protected $fillable = [
        'publication_id', 
        'parking', 
        'petitDej', 
        'bar', 
        'jardin', 
        'picine', 
        'terrasse', 
        'climatisation', 
        'plage'
    ];
}
