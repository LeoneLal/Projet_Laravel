<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Demande;
use App\Entreprise;

class DemandesController extends Controller
{
    //Send the home page by recovering all the demands present in DB
    public function index(){
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

    //Send to DB
    public function store(Request $request)
    {
        $demande = new Demande();
        $demande->type = $request->get('type');
        $demande->emploi = $request->get('emploi');

        if(!is_null($request->get('envoi_mail'))) {
            $demande->envoi_mail = True;
        } else {
            $demande->envoi_mail = False;
        }

        if(!is_null($request->get('reception_mail'))) {
            $demande->reception_mail = True;
        } else {
            $demande->reception_mail = False;
        }

        if(!is_null($request->get('envoie_appel'))) {
            $demande->envoie_appel = True;
        } else {
            $demande->envoie_appel = False;
        }

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

    //Send the demand edit view
    public function edit($demandeId)
    {
        $demande = Demande::where('id', $demandeId)->first();
        $entreprise = Entreprise::where('id', $demande->entreprise)->first();
        return view('demandes.edit', compact('demande', 'entreprise'));
    }

    //Update DB
    public function update(Request $request, $demandeId)
    {
        $demande = Demande::where('id', $demandeId)->first();
        $demande->type = $request->get('type');
        $demande->emploi = $request->get('emploi');
        if(!is_null($request->get('envoi_mail'))) {
            $demande->envoi_mail = True;
        } else {
            $demande->envoi_mail = False;
        }
        if(!is_null($request->get('reception_mail'))) {
            $demande->reception_mail = True;
        } else {
            $demande->reception_mail = False;
        }
        if(!is_null($request->get('envoie_appel'))) {
            $demande->envoie_appel = True;
        } else {
            $demande->envoie_appel = False;
        }
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
        return redirect()->route('demandes.show', $demande->id);
    }

    //Viewing the details of a demand
    public function show($demandeId)
    {
        $demande = Demande::where('id', $demandeId)->first();
        return view('demandes.show', compact('demande'));
    }
}
