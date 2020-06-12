<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Demand;
use App\Company;

class DemandsController extends Controller
{
    //Send the home page by recovering all the demands present in DB
    public function index()
    {
        $demands = Demand::all();
        return view('demands.index', compact('demands'));
    }

    //Send the demand create view
    public function create()
    {
        $entreprises = Company::all();
        return view('demands.create', compact('entreprises'));
    }

    public function delete($demandeId)
    {
        $demande = Demand::where('id', $demandeId)->first();
        $demande->delete();
        return redirect()->route('demands.index');
    }

    //Send to database
    public function store(Request $request)
    {
        $demande = new Demand();
        $demande->type = $request->get('type');
        $demande->emploi = $request->get('emploi');
        $booleans = ['envoi_mail', 'reception_mail', 'envoie_appel', 'reception_appel'];

        foreach($booleans as $boolean){
            if(!is_null($request->get($boolean))) {
                $demande->$boolean = True;
            } else {
                $demande->$boolean = False;
            }
        }
        if(!is_null($request->get('date_rendez_vous'))) {
            $demande->date_rendez_vous = $request->get('date_rendez_vous');
        }
        
        $demande->resultat = $request->get('resultat');
        $demande->entreprise = $request->get('entreprise');
        //$demande->created_at = $request->get('created_at');
        $demande->user_id = \Auth::user()->id;
        $demande->save();
        return redirect()->route('demands.index');
    }

    //Send the demand edit view
    public function edit($demandeId)
    {
        $demande = Demand::where('id', $demandeId)->with('Company')->first();
        return view('demands.edit', compact('demande'));
    }

    //Update database
    public function update(Request $request, $demandeId)
    {
        $demande = Demand::where('id', $demandeId)->first();
        $demande->type = $request->get('type');
        $demande->emploi = $request->get('emploi');
        $booleans = ['envoi_mail', 'reception_mail', 'envoie_appel', 'reception_appel'];

        foreach($booleans as $boolean){
            if(!is_null($request->get($boolean))) {
                $demande->$boolean = True;
            } else {
                $demande->$boolean = False;
            }
        }

        if(!is_null($request->get('date_rendez_vous'))) {
            $demande->date_rendez_vous = $request->get('date_rendez_vous');
        }
        $demande->resultat = $request->get('resultat');
        $demande->entreprise = $request->get('entreprise');
        //$demande->created_at = $request->get('created_at');
        $demande->user_id = \Auth::user()->id;
        $demande->save();
        return redirect()->route('demands.show', $demande->id);
    }

    //View of the details of a demand
    public function show($demandeId)
    {
        $demande = Demand::where('id', $demandeId)->first();
        return view('demands.show', compact('demande'));
    }
}
