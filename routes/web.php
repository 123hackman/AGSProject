<?php

use App\Http\Controllers\adminController;
use App\Http\Controllers\gestionController;
use App\Http\Controllers\serviceController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//route des diverents services
//Route::get('/', function(){return view('welcome');});
Route::get('/', [serviceController::class, 'index']);
Route::get('/hebergement', [serviceController::class, 'hebergement']);
Route::get('/restaurant', [serviceController::class, 'restaurant']);
Route::get('/voyage', [serviceController::class, 'voyage']);

//routes des inscriptions
Route::get('/inscription/{inscrit}', [serviceController::class, 'inscription'])->name('inscription');
Route::get('/connexion/{con}', [serviceController::class, 'connexion'])->name('connexion');
Route::post('/validerConnexion/{con}', [serviceController::class, 'validerConnexion'])->name('validerConnexion');

Route::post('/publication', [serviceController::class, 'publication']);

Route::post('/registerInscription/{inscrit}',  [serviceController::class, 'registerInscription'])->name('registerInscription');

Route::post('/publicationRegister/{idAdmin}',  [serviceController::class, 'publicationRegister'])->name('regist');

Route::get('/voyage', [serviceController::class, 'voyage']);

Route::get('/gestionnaire/{id}', [adminController::class, 'gestionnaire']);

Route::get('/reservation/{idAdmin}', [adminController::class, 'reservation']);

Route::get('/voirOffre/{idPublication}',[serviceController::class, 'voirOffre'])->name('voirOffre');

Route::post('/reservation/{idPublication}',[serviceController::class, 'reservation'])->name('reservation');

Route::get('/gestionProfilAdmin/{idAdmin}', [gestionController::class, 'gestionProfilAdmin']);

Route::get('/gestionEtabllAdmin', [gestionController::class, 'gestionEtabllAdmin']);

Route::get('/gestionPublication/{idEtablissement}', [gestionController::class, 'gestionPublication']);

Route::get('/supprimerPubication/{idPublication}', [gestionController::class, 'supprimerPubication']);

Route::post('/valideConnexionClient', [serviceController::class, 'valideConnexionClient']);
Route::get('/index', function(){return view('index');});