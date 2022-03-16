<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class etablissement extends Model
{
        use HasFactory;  
        
        public function ville(){
                return $this->belongsToMany(Ville::class, 'gerant');
        }

        public function admin(){
                return $this->belongsTo(Admin::class);
        }

        public function publications(){
                return $this->hasMany(publication::class);
        }

        protected $fillable = [
                'admin_id',
                'nomEtabl',
                'nbrChambre', 
        ];
}
