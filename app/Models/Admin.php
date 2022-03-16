<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    use HasFactory;

    protected $fillable = ['avatarAdminPath', 'nomAdmin', 'PrenomAdmin', 'teleAdmin', 'emailAdmin', 'mdpAdmin', 'dateNaissance'];

    public function etablissements(){
        return $this->hasMany(etablissement::class);
    }
}
