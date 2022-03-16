<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\publication;

class packFonction extends Controller
{
    public function index(){
        $publications = publication::all();
        $titres = [
            'titre2'=>'Réservez un service pour chaque occassion',
            'titre3'=>'avec annulation gratuite pour',
            'titre4'=>'plus de flexibilité',
        ];
        return view('index', ['publications'=>$publications,'titres'=>$titres,'titre1'=>'TROUVEZ TOUTES NOS OFFRES']);
    }
}
