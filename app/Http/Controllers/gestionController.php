<?php

namespace App\Http\Controllers;

use App\Models\complement;
use App\Models\publication;
use App\Models\reservation;
use Illuminate\Http\Request;

class gestionController extends Controller
{
    public function gestionProfilAdmin()
    {
        return view('admin/gestionProfil');
    }

    public function gestionEtabllAdmin(){
        return view('admin/gestionEtablissement');
    }

    public function gestionPublication($idEtablissement){
        $publications = publication::where('etablissement_id', $idEtablissement)->get();
        return view('admin/gestionPublication',['publications'=>$publications]);
    }

    public function supprimerPubication($idPublication){

        $publication = publication::findOrFail($idPublication);
        $publication->delete();
    }
}
