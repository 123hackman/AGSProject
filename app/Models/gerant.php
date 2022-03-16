<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class gerant extends Model
{
    use HasFactory;

    protected $fillable = [
        'ville_id',
        'etablissement_id',
        'nomGerant',
        'prenomGerant',
        'teleGerant1',
        'teleGerant2',
    ];
}
