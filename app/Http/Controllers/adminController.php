<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Client;
use App\Models\etablissement;
use App\Models\publication;
use Illuminate\Contracts\Session\Session;

class adminController extends Controller
{
    public function gestionnaire($id){
        if (Session('typeInscr')=='prestataire') {
            $admin = Admin::where('id',$id)->first();
            $etablissements = etablissement::where('admin_id', $admin->id)->get();
            return view('admin/gestionnaire',['admin'=>$admin,'etablissements'=>$etablissements]);
        }
        if (Session('typeInscr')=='client') {
            $client = Client::where('id',$id)->first();
            return view('client/gestionnaire',['client'=>$client]);
        }
    }

    public function reservation($idAdmin){
        $admin = Admin::where('id', $idAdmin)->first();
        $etablissements = $admin->etablissements;
        //$reservations = publication::where('etablissement_id', $reservations->id)->get();
        //dd($reservations);
        return view('admin/reservation',['etablissements'=>$etablissements, 'admin'=>$admin]);
    }
}
