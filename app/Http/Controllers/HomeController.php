<?php


namespace App\Http\Controllers;


use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Input;
use Auth;
use Redirect;
use App\User;
use Hash;
use App\Dechet;
use App\Type_Dechet;
use App\Fait;
use App\Client;
use App\Type_Client;
use App\Type_Sortie;
use App\Type_Collecte;
use App\Type_Dechet_Evacue;
use App\Point_De_Collecte;
use App\Point_De_Sortie;
use App\Point_De_Vente;
use App\Moyen_De_Paiement;
use App\Localite;
use App\Grille_Des_Prix;
use App\Type_Contenant;
use App\Type_Poubelle;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Collection;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;


class HomeController extends Controller
{
    
    public function ajouter_type_dechet(Request $request)
    {
       $type_dechet = new Type_Dechet;
       $type_dechet->nom = $request->input('nom');
       $type_dechet->description = $request->input('commentaire');
       $type_dechet->images = $request->input('image');
       $type_dechet->couleur = $request->input('couleur');
       $type_dechet->id_createur = 1;
       $type_dechet->id_last_hero = 1;
       $type_dechet->save();
       return back();
    }
    public function modifier_type_dechet($id)
    {
        $type_dechet = Type_Dechet::find($id);
        return view('modifier_type_dechet', compact('type_dechet'));
    }
    public function modifier_type_dechet_submit(Request $request)
    {
        $id = $request->input('id');
        $type_dechet = Type_Dechet::find($id);
        $type_dechet->nom = $request->input('nom');
        $type_dechet->description = $request->input('description');
        $type_dechet->images = $request->input('image');
        $type_dechet->couleur = $request->input('couleur');
        $type_dechet->save();
        return redirect()->back()->with('success','Modification réussie');
    }

    public function ajouter_type_client(Request $request)
    {
       $type_client = new Type_Client;
       $type_client->nom = $request->input('nom');
       $type_client->description = $request->input('commentaire');
       $type_client->couleur = $request->input('couleur');
       $type_client->save();
       return back();
    }
    public function modifier_type_client($id)
    {
        $type_client = Type_Client::find($id);
        return view('modifier_type_client', compact('type_client'));
    }
    public function modifier_type_client_submit(Request $request)
    {
        $id = $request->input('id');
        $type_client = Type_Client::find($id);
        $type_client->nom = $request->input('nom');
        $type_client->description = $request->input('description');
        $type_client->couleur = $request->input('couleur');
        $type_client->save();
        return redirect()->back()->with('success','Modification réussie');
    }
    public function ajouter_client_submit(Request $request)
    {
       $client = new Client;
       $client->nom = $request->input('nom');
       $client->prenom = $request->input('prenom');
       $client->titre= $request->input('titre');
       $client->adresse= $request->input('adresse');
       $client->ville= $request->input('ville');
       $client->cp= $request->input('cp');
       $client->phone= $request->input('tel');
       $client->email= $request->input('email');
       $client->montant= $request->input('montant');
       $client->date_adhesion= $request->input('date_adhesion');
       $client->categorie= $request->input('categorie');
       $client->save();
       return redirect()->back()->with('success','Ajout du nouveau client réussie');
    }

    public function dechets()
    {
        $dechets = Dechet::all();
        return view('dechets', compact('dechets'));
    }

    public function ajouter_type_sorties_hors_boutique(Request $request)
    {
       $type_sorties_hors_boutique = new Type_Sortie;
       $type_sorties_hors_boutique->nom = $request->input('nom');
       $type_sorties_hors_boutique->description = $request->input('commentaire');
       $type_sorties_hors_boutique->couleur = $request->input('couleur');
       $type_sorties_hors_boutique->save();
       return redirect()->back()->with('success','Ajout réussie');
    }
    public function modifier_type_sorties_hors_boutique($id)
    {
        $type_sorties_hors_boutique = Type_Sortie::find($id);
        return view('modifier_type_sorties_hors_boutique', compact('type_sorties_hors_boutique'));
        
    }
    public function modifier_type_sorties_hors_boutique_submit(Request $request)
    {
        $id = $request->input('id');
        $type_sorties_hors_boutique = Type_Sortie::find($id);
        $type_sorties_hors_boutique->nom = $request->input('nom');
        $type_sorties_hors_boutique->description = $request->input('description');
        $type_sorties_hors_boutique->couleur = $request->input('couleur');
        $type_sorties_hors_boutique->save();
        return redirect()->back()->with('success','Modification réussie');
    }

    public function ajouter_type_collectes(Request $request)
    {
       $type_collectes = new Type_Collecte;
       $type_collectes->nom = $request->input('nom');
       $type_collectes->description = $request->input('commentaire');
       $type_collectes->couleur = $request->input('couleur');
       $type_collectes->save();
       return redirect()->back()->with('success','Ajout réussie');
    }
    public function modifier_type_collectes($id)
    {
        $type_collecte = Type_Collecte::find($id);
        return view('modifier_type_collectes', compact('type_collecte'));
        
    }
    public function modifier_type_collectes_submit(Request $request)
    {
        $id = $request->input('id');
        $type_collectes = Type_Collecte::find($id);
        $type_collectes->nom = $request->input('nom');
        $type_collectes->description = $request->input('description');
        $type_collectes->couleur = $request->input('couleur');
        $type_collectes->save();
        return redirect()->back()->with('success','Modification réussie');
    }

    public function ajouter_types_dechets_evacues(Request $request)
    {
       $types_dechets_evacues = new Type_Dechet_Evacue;
       $types_dechets_evacues->nom = $request->input('nom');
       $types_dechets_evacues->description = $request->input('commentaire');
       $types_dechets_evacues->couleur = $request->input('couleur');
       $types_dechets_evacues->save();
       return redirect()->back()->with('success','Ajout réussie');
    }
    public function modifier_types_dechets_evacues($id)
    {
        $types_dechets_evacue = Type_Dechet_Evacue::find($id);
        return view('modifier_types_dechets_evacues', compact('types_dechets_evacue'));
        
    }
    public function modifier_types_dechets_evacues_submit(Request $request)
    {
        $id = $request->input('id');
        $types_dechets_evacues = Type_Dechet_Evacue::find($id);
        $types_dechets_evacues->nom = $request->input('nom');
        $types_dechets_evacues->description = $request->input('description');
        $types_dechets_evacues->couleur = $request->input('couleur');
        $types_dechets_evacues->save();
        return redirect()->back()->with('success','Modification réussie');
    }
    public function ajouter_point_de_collecte(Request $request)
    {
       $point_de_collecte = new Point_De_Collecte;
       $point_de_collecte->nom = $request->input('nom');
       $point_de_collecte->commentaire = $request->input('commentaire');
       $point_de_collecte->couleur = $request->input('couleur');
       $point_de_collecte->adresse = $request->input('adresse');
       $point_de_collecte->pesee_max = $request->input('pesee_max');
       $point_de_collecte->save();
       return redirect()->back()->with('success','Ajout réussie');
    }
    public function modifier_point_de_collecte($id)
    {
        $point_de_collecte = Point_De_Collecte::find($id);
        return view('modifier_point_de_collecte', compact('point_de_collecte'));
        
    }
    public function modifier_point_de_collecte_submit(Request $request)
    {
        $id = $request->input('id');
        $point_de_collecte = Point_De_Collecte::find($id);
        $point_de_collecte->nom = $request->input('nom');
        $point_de_collecte->commentaire = $request->input('description');
        $point_de_collecte->couleur = $request->input('couleur');
        $point_de_collecte->adresse = $request->input('adresse');
        $point_de_collecte->pesee_max = $request->input('pesee_max');
        $point_de_collecte->save();
        return redirect()->back()->with('success','Modification réussie');
    }

    public function ajouter_points_de_sorties_hors_boutique(Request $request)
    {
       $points_de_sortie = new Point_De_Sortie;
       $points_de_sortie->nom = $request->input('nom');
       $points_de_sortie->commentaire = $request->input('commentaire');
       $points_de_sortie->couleur = $request->input('couleur');
       $points_de_sortie->adresse = $request->input('adresse');
       $points_de_sortie->pesee_max = $request->input('pesee_max');
       $points_de_sortie->save();
       return redirect()->back()->with('success','Ajout réussie');
    }
    public function modifier_points_de_sorties_hors_boutique($id)
    {
        $points_de_sortie = Point_De_Sortie::find($id);
        return view('modifier_points_de_sorties_hors_boutique', compact('points_de_sortie'));
        
    }
    public function modifier_points_de_sorties_hors_boutique_submit(Request $request)
    {
        $id = $request->input('id');
        $points_de_sortie = Point_De_Sortie::find($id);
        $points_de_sortie->nom = $request->input('nom');
        $points_de_sortie->commentaire = $request->input('description');
        $points_de_sortie->couleur = $request->input('couleur');
        $points_de_sortie->adresse = $request->input('adresse');
        $points_de_sortie->pesee_max = $request->input('pesee_max');
        $points_de_sortie->save();
        return redirect()->back()->with('success','Modification réussie');
    }
    public function ajouter_points_de_vente(Request $request)
    {
       $points_de_vente = new Point_De_Vente;
       $points_de_vente->nom = $request->input('nom');
       $points_de_vente->commentaire = $request->input('commentaire');
       $points_de_vente->couleur = $request->input('couleur');
       $points_de_vente->adresse = $request->input('adresse');
       $points_de_vente->surface_vente= $request->input('surface_vente');
       $points_de_vente->save();
       return redirect()->back()->with('success','Ajout réussie');
    }
    public function modifier_points_de_vente($id)
    {
        $points_de_vente = Point_De_Vente::find($id);
        return view('modifier_points_de_vente', compact('points_de_vente'));
        
    }
    public function modifier_points_de_vente_submit(Request $request)
    {
        $id = $request->input('id');
        $points_de_vente = Point_De_Vente::find($id);
        $points_de_vente->nom = $request->input('nom');
        $points_de_vente->commentaire = $request->input('description');
        $points_de_vente->couleur = $request->input('couleur');
        $points_de_vente->adresse = $request->input('adresse');
        $points_de_vente->surface_vente= $request->input('surface_vente');
        $points_de_vente->save();
        return redirect()->back()->with('success','Modification réussie');
    }
    
    public function ajouter_moyen_de_paiement(Request $request)
    {
       $moyen_de_paiement = new Moyen_De_Paiement;
       $moyen_de_paiement->nom = $request->input('nom');
       $moyen_de_paiement->description = $request->input('commentaire');
       $moyen_de_paiement->couleur = $request->input('couleur');
       $moyen_de_paiement->save();
       return redirect()->back()->with('success','Ajout réussie');
    }
    public function modifier_moyen_de_paiement($id)
    {
        $moyen_de_paiement = Moyen_De_Paiement::find($id);
        return view('modifier_moyen_de_paiement', compact('moyen_de_paiement'));
        
    }
    public function modifier_moyen_de_paiement_submit(Request $request)
    {
        $id = $request->input('id');
        $moyen_de_paiement = Moyen_De_Paiement::find($id);
        $moyen_de_paiement->nom = $request->input('nom');
        $moyen_de_paiement->description = $request->input('description');
        $moyen_de_paiement->couleur = $request->input('couleur');
        $moyen_de_paiement->save();
        return redirect()->back()->with('success','Modification réussie');
    }


    public function ajouter_localite(Request $request)
    {
       $localite = new Localite;
       $localite->nom = $request->input('nom');
       $localite->commentaire = $request->input('commentaire');
       $localite->relation_openstreetmap = $request->input('lien');
       $localite->couleur = $request->input('couleur');
       $localite->save();
       return redirect()->back()->with('success','Ajout réussie');
    }
    public function modifier_localite($id)
    {
        $localite = Localite::find($id);
        return view('modifier_localite', compact('localite'));
        
    }
    public function modifier_localite_submit(Request $request)
    {
        $id = $request->input('id');
        $localite = Localite::find($id);
        $localite->nom = $request->input('nom');
        $localite->commentaire = $request->input('description');
        $localite->relation_openstreetmap = $request->input('lien');
        $localite->couleur = $request->input('couleur');
        $localite->save();
        return redirect()->back()->with('success','Modification réussie');
    }
    public function ajouter_grille_des_prix(Request $request)
    {
       $grille_des_prix = new Grille_Des_Prix;
       $grille_des_prix->nom = $request->input('nom');
       $grille_des_prix->description = $request->input('description');
       $grille_des_prix->prix = $request->input('prix');
       $grille_des_prix->id_type_dechet = $request->input('id_type_dechet');


       $request->validate([
        'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
    ]);

    $imageName = time().'.'.$request->image->extension();  

    $request->image->move(public_path('images'), $imageName);




       $grille_des_prix->image = $imageName;
       $grille_des_prix->save();
       return redirect()->back()->with('success','Ajout réussie');
    }
    public function modifier_grille_des_prix($id)
    {
        $grille_des_prix = Grille_Des_Prix::find($id);
        return view('modifier_grille_des_prix', compact('grille_des_prix'));
        
    }
    public function modifier_grille_des_prix_submit(Request $request)
    {
        $id = $request->input('id');
        $grille_des_prix = Grille_Des_Prix::find($id);
        $grille_des_prix->nom = $request->input('nom');
        $grille_des_prix->description = $request->input('description');
        $grille_des_prix->prix = $request->input('prix');
        $grille_des_prix->save();
        return redirect()->back()->with('success','Modification réussie');
    }

    public function ajouter_type_contenant(Request $request)
    {
       $type_contenant = new Type_Contenant;
       $type_contenant->nom = $request->input('nom');
       $type_contenant->description = $request->input('description');
       $type_contenant->masse = $request->input('masse');
       $type_contenant->couleur = $request->input('couleur');
       $type_contenant->save();
       return redirect()->back()->with('success','Ajout réussie');
    }
    public function modifier_type_contenant($id)
    {
        $type_contenant = Type_Contenant::find($id);
        return view('modifier_type_contenant', compact('type_contenant'));
        
    }
    public function modifier_type_contenant_submit(Request $request)
    {
        $id = $request->input('id');
        $type_contenant = Type_Contenant::find($id);
        $type_contenant->nom = $request->input('nom');
        $type_contenant->description = $request->input('description');
        $type_contenant->masse= $request->input('masse');
        $type_contenant->couleur= $request->input('couleur');
        $type_contenant->save();
        return redirect()->back()->with('success','Modification réussie');
    }


    public function ajouter_type_poubelle(Request $request)
    {
       $type_poubelle = new Type_Poubelle;
       $type_poubelle->nom = $request->input('nom');
       $type_poubelle->description = $request->input('description');
       $type_poubelle->masse_bac = $request->input('masse');
       $type_poubelle->ultime = $request->input('ultime');
       $type_poubelle->couleur = $request->input('couleur');
        if(isset($_POST['ultime'])){
            $type_poubelle->ultime=1;
        }else{
            $type_poubelle->ultime=0;
        }
        $type_poubelle->save();
        return redirect()->back()->with('success','Modification réussie');
    }
    public function modifier_type_poubelle($id)
    {
        $type_poubelle = Type_Poubelle::find($id);
        return view('modifier_type_poubelle', compact('type_poubelle'));
        
    }
    public function modifier_type_poubelle_submit(Request $request)
    {
        
        $id = $request->input('id');
        $type_poubelle = Type_Poubelle::find($id);
        $type_poubelle->nom = $request->input('nom');
        $type_poubelle->description = $request->input('description');
        $type_poubelle->masse_bac= $request->input('masse');
        $type_poubelle->ultime = $request->input('ultime');
        $type_poubelle->couleur= $request->input('couleur');
        if(isset($_POST['ultime'])){
            $type_poubelle->ultime=1;
        }else{
            $type_poubelle->ultime=0;
        }
        $type_poubelle->save();
        return redirect()->back()->with('success','Modification réussie');
    }

    public function add_to_cart(Request $request){
            Schema::create('temp_list', function (Blueprint $table) {
                $table->increments('id');
                $table->string('nom');
                $table->decimal('prix');
                $table->string('quantite');
                $table->string('masse');
                $table->timestamps();
                $table->temporary();
            });

        
            DB::table('temp_list')->insert(['nom'=>2,'prix'=>'1','masse'=>3,'quantite'=>2]);
        
            $datas = DB::table('temp_list')->get();
        
            return response()->json(['return' => 'some data']);
        }





   
}