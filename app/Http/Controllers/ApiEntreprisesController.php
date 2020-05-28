<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Entreprise;
use App\Contact;
use App\User;

class ApiEntreprisesController extends Controller
{
    //Envoie la page d'accueil en récupérant toutes les entreprises présentes en BDD
    public function index(){
        $entreprises = Entreprise::all();
        return response()->json([
        'entreprises' => $entreprises
        ]);
    }


    public function indexnav($api_token){
   
        $entreprises = Entreprise::all();
        return response()->json([
        'entreprises' => $entreprises
        ]);
    }











    public function store(Request $request)
    {
        $entreprise = new Entreprise();
        $entreprise->nom = $request->get('nom');
        $entreprise->adresse = $request->get('adresse');
        $entreprise->telephone = $request->get('telephone');
        $entreprise->mail = $request->get('mail');
        $entreprise->user_id = $request->get('id');

        
        if ($entreprise->save()) {
            return response()->json([
                'Etat'=>'Wesh ca marche frère'
            ]);
            //return redirect()->route('entreprises.index');
            }
        return response()->json([
            'Etat'=> "Aie c'est la lose"

        ]);
        
    }

}
