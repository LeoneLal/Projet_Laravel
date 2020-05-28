<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Demande;
use App\Entreprise;

class DemandesController extends Controller
{
    //Envoie la page d'accueil en récupérant toutes les entreprises présentes en BDD
    public function index(){
        $demandes = Demande::all();
        return view('demandes.index', compact('demandes'));
    }


    //Envoie la vue create entreprise
    public function create()
    {
        $entreprises = Entreprise::all();
        return view('demandes.create', compact('entreprises'));
    }


    public function delete($demandeId)
    {
        $demande = Demande::where('id', $demandeId)->first();
        // suppression, au choix !
        $demande->delete();
        return redirect()->route('demandes.index');
    }


    //Fonction envoie en BDD
    public function store(Request $request)
    {

        $validatedData = $request->validate([
            'type' => 'required',
            'emploi' => 'required',
            'date_rendez_vous' => 'date',
            'mail' => 'required|email',
            'resultat' => 'required',
            'entreprise' => 'required',
        ]); 

        //dd(\Auth::user());
        $demande = new Demande();
        $demande->type = $request->get('type');
        $demande->emploi = $request->get('emploi');
        //dd($request);
        if(!is_null($request->get('envoi_mail'))) {
            $demande->envoi_mail = True;
        } else {
            $demande->envoi_mail = False;
        }
        //$demande->reception_mail = $request->get('reception_mail');
        if(!is_null($request->get('reception_mail'))) {
            $demande->reception_mail = True;
        } else {
            $demande->reception_mail = False;
        }
        //$demande->envoie_appel = $request->get('envoie_appel');
        if(!is_null($request->get('envoie_appel'))) {
            $demande->envoie_appel = True;
        } else {
            $demande->envoie_appel = False;
        }
        //$demande->reception_appel = $request->get('reception_appel');
        if(!is_null($request->get('reception_appel'))) {
            $demande->reception_appel = True;
        } else {
            $demande->reception_appel = False;
        }
        if(!is_null($request->get('date_rendez_vous'))) {
            $demande->date_rendez_vous = $request->get('date_rendez_vous');
        }
        $demande->resultat = $request->get('resultat');
        $demande->entreprise = $request->get('entreprise');
        //$demande->created_at = $request->get('created_at');
        $demande->user_id = \Auth::user()->id;
        $demande->save();
        return redirect()->route('demandes.index');
    }


    //Envoie la vue edit entreprise
    public function edit($demandeId)
    {
        $demande = Demande::where('id', $demandeId)->first();
        return view('demandes.edit', compact('demande'));
    }


    //Fonction update BDD
    public function update(Request $request, $demandeId)
    {
        $entreprise = Demande::where('id', $demandeId)->first();
        $entreprise->nom = $request->get('nom');
        $entreprise->adresse = $request->get('adresse');
        $entreprise->telephone = $request->get('telephone');
        $entreprise->mail = $request->get('mail');
        $entreprise->save();

        return redirect()->route('demandes.index');
    }


    //Affichage des détails d'une demande
    public function show($demandeId)
    {
        $demande = Demande::where('id', $demandeId)->first();
        return view('demandes.show', compact('demande'));
    }
}
