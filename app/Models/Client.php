<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    public function publications(){
        return $this->belongsToMany(publication::class, 'reservations');
    }
    
    protected $fillable = ['nomClient', 'prenomClient', 'dateNaissance', 'teleClient', 'emailClient', 'mdpClient', 'avatarClientPath'];
}
