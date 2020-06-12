<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Request;
use App\Company;

class DemandesController extends Controller
{
    //Send the home page by recovering all the demands present in DB
    public function index()
    {
        $demandes = Demande::all();
        return view('demandes.index', compact('demandes'));
    }

    //Send the demand create view
    public function create()
    {
        $entreprises = Entreprise::all();
        return view('demandes.create', compact('entreprises'));
    }

    public function delete($demandeId)
    {
        $demande = Demande::where('id', $demandeId)->first();
        $demande->delete();
        return redirect()->route('demandes.index');
    }

    //Send to database
    public function store(Request $request)
    {
        $demande = new Demande();
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
        return redirect()->route('demandes.index');
    }

    //Send the demand edit view
    public function edit($demandeId)
    {
        $demande = Demande::where('id', $demandeId)->with('Company')->first();
        return view('demandes.edit', compact('demande'));
    }

    //Update database
    public function update(Request $request, $demandeId)
    {
        $demande = Demande::where('id', $demandeId)->first();
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
        return redirect()->route('demandes.show', $demande->id);
    }

    //View of the details of a demand
    public function show($demandeId)
    {
        $demande = Demande::where('id', $demandeId)->first();
        return view('demandes.show', compact('demande'));
    }
}
