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
        $companies = Company::all();
        return view('demands.create', compact('companies'));
    }

    public function delete($demandId)
    {
        $demand = Demand::where('id', $demandId)->first();
        $demand->delete();
        return redirect()->route('demands.index');
    }

    //Send to database
    public function store(Request $request)
    {
        $demand = new Demand();
        $demand->type = $request->get('type');
        $demand->emploi = $request->get('emploi');
        $booleans = ['envoi_mail', 'reception_mail', 'envoie_appel', 'reception_appel'];

        foreach($booleans as $boolean){
            if(!is_null($request->get($boolean))) {
                $demand->$boolean = True;
            } else {
                $demand->$boolean = False;
            }
        }
        if(!is_null($request->get('date_rendez_vous'))) {
            $demand->date_rendez_vous = $request->get('date_rendez_vous');
        }
        
        $demand->resultat = $request->get('resultat');
        $demand->entreprise = $request->get('entreprise');
        //$demande->created_at = $request->get('created_at');
        $demande->user_id = \Auth::user()->id;
        $demande->save();
        return redirect()->route('demands.index');
    }

    //Send the demand edit view
    public function edit($demandId)
    {
        $demande = Demand::where('id', $demandId)->with('Company')->first();
        return view('demands.edit', compact('demand'));
    }

    //Update database
    public function update(Request $request, $demandId)
    {
        $demand = Demand::where('id', $demandId)->first();
        $demand->type = $request->get('type');
        $demand->emploi = $request->get('emploi');
        $booleans = ['envoi_mail', 'reception_mail', 'envoie_appel', 'reception_appel'];

        foreach($booleans as $boolean){
            if(!is_null($request->get($boolean))) {
                $demand->$boolean = True;
            } else {
                $demand->$boolean = False;
            }
        }

        if(!is_null($request->get('date_rendez_vous'))) {
            $demand->date_rendez_vous = $request->get('date_rendez_vous');
        }
        $demand->resultat = $request->get('resultat');
        $demand->entreprise = $request->get('entreprise');
        //$demande->created_at = $request->get('created_at');
        $demand->user_id = \Auth::user()->id;
        $demand->save();
        return redirect()->route('demands.show', $demand->id);
    }

    //View of the details of a demand
    public function show($demandId)
    {
        $demande = Demand::where('id', $demandId)->first();
        return view('demands.show', compact('demand'));
    }
}
