<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Categorie;
use App\Models\Client;
use App\Models\complement;
use App\Models\etablissement;
use App\Models\gerant;
use App\Models\publication;
use App\Models\Ville;
use App\Models\reservation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

function registerClient($request,$photo){
    if($photo!= null)
    {$client = Client::create([
        'nomClient'=>$request->nom,
        'prenomClient'=>$request->prenom,
        'dateNaissance'=>$request->dateNaissance,
        'teleClient'=>$request->telephone,
        'emailClient'=>$request->email,
        'mdpClient'=>$request->mdp,
        'avatarClienPath'=>$photo
    ]);
    }else
    {$client = Client::create([
        'nomClient'=>$request->nom,
        'prenomClient'=>$request->prenom,
        'dateNaissance'=>$request->dateNaissance,
        'teleClient'=>$request->telephone,
        'emailClient'=>$request->email,
        'mdpClient'=>$request->mdp,
    ]);
    }
    return $client;
}

function registerAdmin($request,$photo){
    if($photo!= null)
    {$Admin = Admin::create([
        'nomAdmin'=>$request->nom,
        'PrenomAdmin'=>$request->prenom,
        'dateNaissance'=>$request->prenom,
        'teleAdmin'=>$request->telephone,
        'emailAdmin'=>$request->email,
        'mdpAdmin'=>$request->mdp,
        'avatarAdminPath'=>$photo
    ]);
    }else
    {$Admin = Admin::create([
        'nomAdmin'=>$request->nom,
        'PrenomAdmin'=>$request->prenom,
        'dateNaissance'=>$request->prenom,
        'teleAdmin'=>$request->telephone,
        'emailAdmin'=>$request->email,
        'mdpAdmin'=>$request->mdp,
    ]);
    return $Admin;
    }
}

function accueilFonction(){
    $publications = publication::all();
    $titres = [
        'titre2'=>'Réservez un service pour chaque occassion',
        'titre3'=>'avec annulation gratuite pour',
        'titre4'=>'plus de flexibilité',
    ];
    return view('index', ['publications'=>$publications,'titres'=>$titres,'titre1'=>'TROUVEZ TOUTES NOS OFFRES']);
}

class serviceController extends Controller
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

    public function hebergement()
    {
        $hebergement = Categorie::where('nomCategorie', 'Hebergement')->first();
        $publications = publication::where('categorie_id',$hebergement->id)->get();
        $titres = [
            'titre2'=>'Réservez une chambre pour chaque occassion',
            'titre3'=>'avec annulation gratuite pour',
            'titre4'=>'plus de flexibilité',
        ];
        
        return view('index',['titres'=>$titres,'publications'=>$publications,'titre1'=>'TROUVEZ DES OFFRES SUR L\'HBERGEMENT']);
    }

    public function restaurant()
    {
        $hebergement = Categorie::where('nomCategorie', 'Restaurant')->first();
        $publications = publication::where('categorie_id',$hebergement->id)->get();
        $titres = [
            'titre2'=>'Réservez un restaurant pour chaque occassion',
            'titre3'=>'avec annulation gratuite pour',
            'titre4'=>'plus de flexibilité',
        ];
        return view('index',['titres'=>$titres,'publications'=>$publications,'titre1'=>'TROUVEZ DES OFFRES SUR LA RESTAURATION',]);
    }

    public function voyage()
    {
        $hebergement = Categorie::where('nomCategorie', 'Voyage')->first();
        $publications = publication::where('categorie_id',$hebergement->id)->get();
        $titres = [
            'titre2'=>'Réservez un service de voyage à tout moment',
            'titre3'=>'avec annulation gratuite pour',
            'titre4'=>'plus de flexibilité',
        ];
        return view('index',['titres'=>$titres,'publications'=>$publications,'titre1'=>'TROUVEZ DES OFFRES SUR LE VOYAGE',]);
    }

    public function inscription($inscrit){
        if ($inscrit=="client" || $inscrit == "prestataire")
        {return view('inscription/inscription', ['inscrit'=>$inscrit]);}
    }

    public function registerInscription(Request $request, $inscrit){
        $photo = null;

        if ($request->hasFile('files-input')) {
            $image = $request->file('files-input');
            $extension = $image->getClientOriginalExtension();
            $photo = time().'.'.$extension ;
            $image->move('photo/profil', $photo);
        }
        //dd($photo);
        if ($inscrit=='client'){
            if($photo!= null)
                {$inscrire = Client::create([
                    'nomClient'=>$request->nom,
                    'prenomClient'=>$request->prenom,
                    'dateNaissance'=>$request->dateNaissance,
                    'teleClient'=>$request->telephone,
                    'emailClient'=>$request->email,
                    'mdpClient'=>$request->mdp,
                    'avatarClienPath'=>$photo
                ]);
                }else
                {$inscrire = Client::create([
                    'nomClient'=>$request->nom,
                    'prenomClient'=>$request->prenom,
                    'dateNaissance'=>$request->dateNaissance,
                    'teleClient'=>$request->telephone,
                    'emailClient'=>$request->email,
                    'mdpClient'=>$request->mdp,
                ]);
                }   
                         
                $publications = publication::all();
                $titres = [
                    'titre2'=>'Réservez un service pour chaque occassion',
                    'titre3'=>'avec annulation gratuite pour',
                    'titre4'=>'plus de flexibilité',
                ];
                Session::put('inscrire', $inscrire->id);
                Session::put('typeInscr', 'client');
                return view('index', ['publications'=>$publications,'titres'=>$titres,'titre1'=>'TROUVEZ TOUTES NOS OFFRES']);            
        }

        if($inscrit=='prestataire'){
            if($photo!= null)
                {$inscrire = Admin::create([
                    'nomAdmin'=>$request->nom,
                    'PrenomAdmin'=>$request->prenom,
                    'dateNaissance'=>$request->prenom,
                    'teleAdmin'=>$request->telephone,
                    'emailAdmin'=>$request->email,
                    'mdpAdmin'=>$request->mdp,
                    'avatarAdmintPath'=>$photo
                ]);
                }else
                {$inscrire = Admin::create([
                    'nomAdmin'=>$request->nom,
                    'PrenomAdmin'=>$request->prenom,
                    'dateNaissance'=>$request->prenom,
                    'teleAdmin'=>$request->telephone,
                    'emailAdmin'=>$request->email,
                    'mdpAdmin'=>$request->mdp,
                    ]);
                }
                $categories = Categorie::all();
                Session::put('inscrire', $inscrire->id);
                Session::put('typeInscr', 'prestataire');
                return view('admin/publication', ['categories'=>$categories,'Admin'=>$inscrire->id]);
        }

        $publications = publication::all();
        $titres = [
            'titre2'=>'Réservez un service pour chaque occassion',
            'titre3'=>'avec annulation gratuite pour',
            'titre4'=>'plus de flexibilité',
        ];
        return view('index', ['publications'=>$publications,'titres'=>$titres,'titre1'=>'TROUVEZ TOUTES NOS OFFRES']);
    }

    public function publicationRegister(Request $request, $idAdmin){
       

        $idComplement = complement::create([
            'parking'=>$request->parking, 
            'petitDej'=>$request->petitDej, 
            'bar'=>$request->bar, 
            'jardin'=>$request->jardin, 
            'picine'=>$request->picine, 
            'terrasse'=>$request->terrasse, 
            'climatisation'=>$request->climatisation, 
            'plage'=>$request->plage,
        ])->id;
        
        $idVille = Ville::create([
            'nomVlle'=>$request->regionPays, 
            'codePostal'=>$request->codePoste, 
            'rue'=>$request->rue, 
            'adresse'=>$request->adresse,
        ])->id;
        
        $idEtablissement = etablissement::create([
            'admin_id'=> $idAdmin,
            'nomEtabl'=>$request->nomEtabl,
            'nbrChambre'=>$request->nbrHbr, 
        ])->id;

        $gerant=gerant::create([
            'ville_id'=>$idVille,
            'etablissement_id'=>$idEtablissement,
            'nomGerant'=>$request->nomGerant,
            'prenomGerant'=>$request->prenomGerant,
            'teleGerant1'=>$request->teleGerant,
            'teleGerant2'=>$request->teleGerantS,
        ]);
        
        $photo = null;
        if ($request->hasFile('file-input')) {
            $image = $request->file('file-input');
            $extension = $image->getClientOriginalExtension();
            $photo = time().'.'.$extension ;
            $image->move('photo/publication', $photo);
        }
        
        if ($photo != null) {
            $publication=publication::create([
                'categorie_id'=>$request->serviceCate,
                'complement_id'=>$idComplement,
                'etablissement_id'=>$idEtablissement,
                'libelle'=>$request->libelle,
                'litType'=>$request->typeService,
                'imagePath'=>$photo,
                'disponible'=>'oui',
                'prix'=>$request->tarifPers,
                'description'=>$request->descrip,
                'reduction'=>0, 
            ]);
        } 
        
        else {
            $publication= publication::create([
                'categorie_id'=>$request->serviceType,
                'complement_id'=>$idComplement,
                'etablissement_id'=>$idEtablissement,
                'libelle'=>$request->libelle,
                'litType'=>$request->libelle,
                'imagePath'=>'img.png',
                'disponible'=>'oui',
                'prix'=>$request->tarifPers,
                'description'=>$request->descrip,
                'reduction'=>0, 
            ]);
        }
       
        $publications = publication::all();
        $titres = [
            'titre2'=>'Réservez un service pour chaque occassion',
            'titre3'=>'avec annulation gratuite pour',
            'titre4'=>'plus de flexibilité',
        ];
        
        return view('index', ['publications'=>$publications,'titres'=>$titres,'titre1'=>'TROUVEZ TOUTES NOS OFFRES']);
    } 

    public function connexion($con){
        if ($con=='prestataire'||$con=='client'){
            return view('inscription/connexion', ['con'=>$con]);
        }
    }

    public function validerConnexion(Request $request, $con){
        $compte = null;
        
        if ($con=='prestataire'){
            $compte = Admin::where('emailAdmin', $request->email);
            $compte = $compte->where('mdpAdmin', $request->mdp)->first();
            
            if($compte!= null){
                Session::put('inscrire', $compte->id);
                Session::put('typeInscr', 'prestataire');
                return view('admin/gestionnaire', ['admin'=>$compte, 'etablissements'=>$compte->etablissements]);
            }
        }
        if ($con=='client'){
            $compte = Client::where('emailClient', $request->email)->where('mdpClient', $request->mdp)->first();

            if($compte!= null){
                Session::put('inscrire', $compte->id);
                Session::put('typeInscr', 'client');
                return view('client/gestionnaire', ['client'=>$compte]);
            }
        }
        return redirect()->back()->with('statut','Email ou mots de passe incoret svp reessayer');
    }

    public function voirOffre($idPublication){
        $publication = publication::find($idPublication);
        return view('voirOffre', ['publication'=>$publication]);
    }

    public function reservation(Request $request, $idPublication){
        $publication = publication::find($idPublication);
        $nbr = $request->nbrReservation;
        if ($nbr< 0){
            $nbr = 0;
        }

        if(Session::has('inscrire')){
            $prix = $publication->prix;
            $prix = $prix * $nbr;
            $id =reservation::create([
                'client_id'=>Session('inscrire'),
                'publication_id'=>$idPublication,
                'nbrReservation'=>$nbr,
                'dateDebut'=>$request->dateDebut,
                'dateFin'=>$request->dateFin,
                'cout'=> $prix,
            ])->id;
        }else{
            $prix = $publication->prix;
            $prix = $prix * $nbr;
            $id =reservation::create([
                'client_id'=>2,
                'publication_id'=>$idPublication,
                'nbrReservation'=>$nbr,
                'dateDebut'=>$request->dateDebut,
                'dateFin'=>$request->dateFin,
                'cout'=> $prix,
            ])->id;
        }
        return redirect()->back()->with('reserValide','Votre reservation a réussi!');
    }

/*
 public function publication(){
        $categories = Categorie::all();
        return view('admin/publication', compact('categories'));//[ 'categories'=>$categories]
    }

    public function publicationRegister(Request $request, $idAdmin){

        $idComplement = complement::create([
            'parking'=>$request->parking, 
            'petitDej'=>$request->petitDej, 
            'bar'=>$request->bar, 
            'jardin'=>$request->jardin, 
            'picine'=>$request->picine, 
            'terrasse'=>$request->terrasse, 
            'climatisation'=>$request->climatisation, 
            'plage'=>$request->plage,
        ])->id;

        $idVille = Ville::create([
            'nomVlle'=>$request->regionPays, 
            'codePostal'=>$request->codePoste, 
            'rue'=>$request->rue, 
            'adresse'=>$request->adresse,
        ])->id;

        $idEtablissement = etablissement::create([
            'admin_id'=> $idAdmin,
            'nomEtabl'=>$request->nomEtabl,
            'nbrChambre'=>$request->nbrHbr, 
        ])->id;

        gerant::create([
            'ville_id'=>$idVille,
            'etablissement_id'=>$idEtablissement,
            'nomGerant'=>$request->nomGerant,
            'prenomGerant'=>$request->prenomGerant,
            'teleGerant1'=>$request->teleGerant,
            'teleGerant2'=>$request->teleGerantS,
        ]);

        $photo = null;
        if ($request->hasFile('file-input')) {
            $image = $request->file('file-input');
            $extension = $image->getClientOriginalExtension();
            $photo = time().'.'.$extension ;
            $image->move('photo/publication', $photo);
        }
        //dd($photo);
        if ($photo != null) {
            publication::create([
                'categorie_id'=>$request->serviceCate,
                'complement_id'=>$idComplement,
                'etablissement_id'=>$idEtablissement,
                'libelle'=>$request->libelle,
                'litType'=>$request->typeService,
                'imagePath'=>$photo,
                'disponible'=>'oui',
                'prix'=>$request->tarifPers,
                'description'=>$request->descrip,
                'reduction'=>0, 
            ]);
        } else {
            publication::create([
                'categorie_id'=>$request->serviceType,
                'complement_id'=>$idComplement,
                'etablissement_id'=>$idEtablissement,
                'libelle'=>$request->libelle,
                'litType'=>$request->libelle,
                'imagePath'=>'img.png',
                'disponible'=>'oui',
                'prix'=>$request->tarifPers,
                'description'=>$request->descrip,
                'reduction'=>0, 
            ]);
        }
        
        $publications = publication::all();
        $titres = [
            'titre2'=>'Réservez un service pour chaque occassion',
            'titre3'=>'avec annulation gratuite pour',
            'titre4'=>'plus de flexibilité',
        ];
        return view('accueil', ['publications'=>$publications,'titres'=>$titres,'titre1'=>'TROUVEZ TOUTES NOS OFFRES']);
    } 

    public function valideConnexionClient(Request $request){
        $compte = Client::where('emailClient', $request->email)->where('mdpClient', $request->mdp);
        dd($compte->nomClient);
        if($compte!= null){
            return view('index');
        }

        return Redirect()->back();
    }*/

}