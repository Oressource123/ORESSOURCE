<?php

use Illuminate\Support\Facades\Route;
use App\Type_Dechet;
use App\Dechet;
use App\Type_Client;
use App\Client;
use App\Type_Sortie;
use App\Type_Collecte;
use App\Type_Dechet_Evacue;
use App\Point_De_Collecte;
use App\Point_De_Sortie;
use App\Point_De_Vente;
use App\Moyen_De_Paiement;
use App\Localite;
use App\Grille_des_prix;
use App\Type_Contenant;
use App\Type_Poubelle;



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
Route::post('add_to_cart', 'HomeController@add_to_cart');
Route::get('/test', function () {
    $type_dechets = Type_Dechet::all();
    return view('test', compact('type_dechets'));
});
Route::get('/', function () {
    return view('welcome');
});
Route::get('/vente', function () {
    return view('vente');
});
Route::get('/dechets', 'HomeController@dechets');
Route::get('/pos', function () {
    $clients = Client::all();
    $type_dechets = Type_Dechet::all();
    return view('pos', compact('type_dechets','clients'));
});
Route::get('/fiche_client', function () {
    return view('fiche_client');
});
Route::get('/clients', function () {
    $clients = Client::all();

    return view('client', compact('clients'));
});
Route::get('/ajouter_client', function () {
    $types_clients = Type_Client::all();
    return view('ajouter_client', compact('types_clients'));
});
Route::post('/ajouter_client_submit', 'HomeController@ajouter_client_submit');
Route::get('/gestion_clients', function () {
    return view('gestion_clients');
});
Route::get('/type_dechets', function () {
    $type_dechets = Type_Dechet::all();
    return view('type_dechets', compact('type_dechets'));
});
Route::get('/gestion_clients', function () {
    $types_clients = Type_Client::all();
    return view('gestion_clients', compact('types_clients'));
});
Route::post('/ajouter_type_dechet', 'HomeController@ajouter_type_dechet');
Route::get('/modifier_type_dechet/{id}', 'HomeController@modifier_type_dechet');
Route::post('/modifier_type_dechet_submit', 'HomeController@modifier_type_dechet_submit');
Route::post('/ajouter_type_client', 'HomeController@ajouter_type_client');
Route::get('/modifier_type_client/{id}', 'HomeController@modifier_type_client');
Route::post('/modifier_type_client_submit', 'HomeController@modifier_type_client_submit');
Route::get('/deconnexion', 'HomeController@logout');

//configuration type sorties hors boutique
Route::get('/type_sorties_hors_boutique', function () {
    $type_sorties = Type_Sortie::all();
    return view('type_sorties_hors_boutique', compact('type_sorties'));
});
Route::post('/ajouter_type_sorties_hors_boutique', 'HomeController@ajouter_type_sorties_hors_boutique');
Route::get('/modifier_type_sorties_hors_boutique/{id}', 'HomeController@modifier_type_sorties_hors_boutique');
Route::post('/modifier_type_sorties_hors_boutique_submit', 'HomeController@modifier_type_sorties_hors_boutique_submit');
//configuration type collectes
Route::get('/type_collectes', function () {
    $type_collectes = Type_Collecte::all();
    return view('type_collectes', compact('type_collectes'));
});
Route::post('/ajouter_type_collectes', 'HomeController@ajouter_type_collectes');
Route::get('/modifier_type_collectes/{id}', 'HomeController@modifier_type_collectes');
Route::post('/modifier_type_collectes_submit', 'HomeController@modifier_type_collectes_submit');
//configuration type déchets évacués
Route::get('/types_dechets_evacues', function () {
    $types_dechets_evacues = Type_Dechet_Evacue::all();
    return view('types_dechets_evacues', compact('types_dechets_evacues'));
});
Route::post('/ajouter_types_dechets_evacues', 'HomeController@ajouter_types_dechets_evacues');
Route::get('/modifier_types_dechets_evacues/{id}', 'HomeController@modifier_types_dechets_evacues');
Route::post('/modifier_types_dechets_evacues_submit', 'HomeController@modifier_types_dechets_evacues_submit');
//configuration point de collecte
Route::get('/point_de_collecte', function () {
    $point_de_collectes = Point_De_Collecte::all();
    return view('point_de_collecte', compact('point_de_collectes'));
});
Route::post('/ajouter_point_de_collecte', 'HomeController@ajouter_point_de_collecte');
Route::get('/modifier_point_de_collecte/{id}', 'HomeController@modifier_point_de_collecte');
Route::post('/modifier_point_de_collectes_submit', 'HomeController@modifier_point_de_collecte_submit');
//configuration point de sorties hors boutique
Route::get('/points_de_sorties_hors_boutique', function () {
    $points_de_sorties = Point_De_Sortie::all();
    return view('points_de_sorties_hors_boutique', compact('points_de_sorties'));
});
Route::post('/ajouter_points_de_sorties_hors_boutique', 'HomeController@ajouter_points_de_sorties_hors_boutique');
Route::get('/modifier_points_de_sorties_hors_boutique/{id}', 'HomeController@modifier_points_de_sorties_hors_boutique');
Route::post('/modifier_points_de_sorties_hors_boutique_submit', 'HomeController@modifier_points_de_sorties_hors_boutique_submit');
//configuration point de vente
Route::get('/points_de_vente', function () {
    $points_de_ventes = Point_De_Vente::all();
    return view('points_de_vente', compact('points_de_ventes'));
});
Route::post('/ajouter_points_de_vente', 'HomeController@ajouter_points_de_vente');
Route::get('/modifier_points_de_vente/{id}', 'HomeController@modifier_points_de_vente');
Route::post('/modifier_points_de_vente_submit', 'HomeController@modifier_points_de_vente_submit');

//configuration point de moyen de paiement
Route::get('/moyen_de_paiement', function () {
    $moyen_de_paiements = Moyen_De_Paiement::all();
    return view('moyen_de_paiement', compact('moyen_de_paiements'));
});
Route::post('/ajouter_moyen_de_paiement', 'HomeController@ajouter_moyen_de_paiement');
Route::get('/modifier_moyen_de_paiement/{id}', 'HomeController@modifier_moyen_de_paiement');
Route::post('/modifier_moyen_de_paiement_submit', 'HomeController@modifier_moyen_de_paiement_submit');
//configuration localites
Route::get('/localites', function () {
    $localites = Localite::all();
    return view('localite', compact('localites'));
});
Route::post('/ajouter_localite', 'HomeController@ajouter_localite');
Route::get('/modifier_localite/{id}', 'HomeController@modifier_localite');
Route::post('/modifier_localite_submit', 'HomeController@modifier_localite_submit');
// onfiguration grille des prix
Route::get('/grille_des_prix', function () {
    $grilles_des_prix = Grille_Des_Prix::all();
    $type_dechets = Type_Dechet::all();
    return view('grille_des_prix', compact('grilles_des_prix','type_dechets'));
});
Route::post('/ajouter_grille_des_prix', 'HomeController@ajouter_grille_des_prix');
Route::get('/modifier_grille_des_prix/{id}', 'HomeController@modifier_grille_des_prix');
Route::post('/modifier_grille_des_prix_submit', 'HomeController@modifier_grille_des_prix_submit');
//configuration type contenant
Route::get('/bacs_et_chariots', function () {
    $type_contenants = Type_Contenant::all();
    return view('type_contenant', compact('type_contenants'));
});
Route::post('/ajouter_type_contenant', 'HomeController@ajouter_type_contenant');
Route::get('/modifier_type_contenant/{id}', 'HomeController@modifier_type_contenant');
Route::post('/modifier_type_contenant_submit', 'HomeController@modifier_type_contenant_submit');
//configuration type poubelle
Route::get('/types_de_poubelles', function () {
    $type_poubelles = Type_Poubelle::all();
    return view('types_de_poubelles', compact('type_poubelles'));
});
Route::post('/ajouter_type_poubelle', 'HomeController@ajouter_type_poubelle');
Route::get('/modifier_type_poubelle/{id}', 'HomeController@modifier_type_poubelle');
Route::post('/modifier_type_poubelle_submit', 'HomeController@modifier_type_poubelle_submit');


