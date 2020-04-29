<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\entreprises;

class EntreprisesController extends Controller
{
    //Envoie la page d'accueil en récupérant toutes les entreprises présentes en BDD
    public function index(){
        $entreprises = entreprises::all();
        return view('entreprises.index', compact('entreprises'));
    }

    //Envoie la vue create entreprise
    public function create()
    {
        return view('entreprises.create');
    }

    //Envoie la vue update entreprise
    public function update($entrepriseId)
    {
        $entreprises = entreprises::where('id', $entrepriseId)->first();
        return view('entreprises.update');
    }


    //Fonction envoie en BDD
    public function store(Request $request)
    {
        $entreprises = new entreprises();
        $entreprises->nom = $request->get('nom');
        $entreprises->adresse = $request->get('adresse');
        $entreprises->telephone = $request->get('telephone');
        $entreprises->mail = $request->get('mail');
        $entreprises->save();
        return redirect()->route('entreprises.index');
    }

    //Affichage des éléments 
    public function show($entrepriseId)
    {
        $entreprises = entreprises::where('id', $entrepriseId)->first();
        return view('entreprises.show', compact('entreprises'));
    }
}
