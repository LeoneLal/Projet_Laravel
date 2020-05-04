<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Demande;

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
        return view('demandes.create');
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
        $demande = new Demande();
        $demande->envoi_mail = $request->get('envoi_mail');
        $demande->reception_mail = $request->get('reception_mail');
        $demande->envoie_appel = $request->get('envoie_appel');
        $demande->reception_appel = $request->get('reception_appel');
        $demande->date_rendez_vous = $request->get('date_rendez_vous');
        $demande->resultat = $request->get('resultat');
        $demande->entreprise = $request->get('entreprise');
        $demande->created_at = $request->get('created_at');
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


    //Affichage des éléments pour une entreprise
    public function show($demandeId)
    {
        $demande = Demande::where('id', $demandeId)->first();
        return view('demandes.show', compact('demande'));
    }
}
