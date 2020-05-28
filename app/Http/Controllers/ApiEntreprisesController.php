<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Entreprise;

class ApiEntreprisesController extends Controller
{
    public function index()
    {
        $entreprises = Entreprise::all();
        # SELECT * FROM bidules
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
