<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Entreprise;
use App\Contact;

class EntreprisesController extends Controller
{
    //Envoie la page d'accueil en récupérant toutes les entreprises présentes en BDD
    public function index(){
        $entreprises = Entreprise::all();
        return view('entreprises.index', compact('entreprises'));
    }

    //Envoie la vue create entreprise
    public function create()
    {
        return view('entreprises.create');
    }


    public function delete($entrepriseId)
    {
        $entreprise = Entreprise::where('id', $entrepriseId)->first();
        // suppression, au choix !
        // $category->destroy();
        $entreprise->delete();
        return redirect()->route('entreprises.index');
    }


    //Fonction envoie en BDD
    public function store(Request $request)
    {
        $entreprise = new Entreprise();
        $entreprise->nom = $request->get('nom');
        $entreprise->adresse = $request->get('adresse');
        $entreprise->telephone = $request->get('telephone');
        $entreprise->mail = $request->get('mail');
        $entreprise->save();
        return redirect()->route('entreprises.index');
    }

    //Envoie la vue edit entreprise
    public function edit($entrepriseId)
    {
        $entreprise = Entreprise::where('id', $entrepriseId)->first();
        return view('entreprises.edit', compact('entreprise'));
    }

    //Fonction update BDD
    public function update(Request $request, $entrepriseId)
    {
        $entreprise = Entreprise::where('id', $entrepriseId)->first();
        $entreprise->nom = $request->get('nom');
        $entreprise->adresse = $request->get('adresse');
        $entreprise->telephone = $request->get('telephone');
        $entreprise->mail = $request->get('mail');
        $entreprise->save();

        return redirect()->route('entreprises.index');
    }

    //Affichage des éléments pour une entreprise
    public function show($entrepriseId)
    {
        $entreprise = Entreprise::where('id', $entrepriseId)->with('contact')->first();
        return view('entreprises.show', compact('entreprise'));
    }
}
