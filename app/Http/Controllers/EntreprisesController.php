<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Entreprise;
use App\Contact;

class EntreprisesController extends Controller
{



    //Send the home page by recovering all the companies present in DB
    public function index(){
        $entreprises = Entreprise::all();
        return view('entreprises.index', compact('entreprises'));
    }

    //Send the company create view
    public function create()
    {
        return view('entreprises.create');
    }

    //Delete a company
    public function delete($entrepriseId)
    {
        $contact = Contact::where('entreprise_id', $entrepriseId);
        $contact->delete();
        $entreprise = Entreprise::where('id', $entrepriseId)->first();
        $entreprise->delete();
        return redirect()->route('entreprises.index');
    }

    //Send to DB
    public function store(Request $request)
    {
        //Content check
        $validatedData = $request->validate([
            'nom' => 'required',
            'adresse' => 'required',
            'telephone' => 'required',
            'mail' => 'required|email',
        ]);       

        $entreprise = new Entreprise();
        $entreprise->nom = $request->get('nom');
        $entreprise->adresse = $request->get('adresse');
        $entreprise->telephone = $request->get('telephone');
        $entreprise->mail = $request->get('mail');
        $entreprise->user_id = \Auth::user()->id;
        $entreprise->save();
        return redirect()->route('entreprises.index');
    }

    //Send the company edit view
    public function edit($entrepriseId)
    {
        $entreprise = Entreprise::where('id', $entrepriseId)->first();
        return view('entreprises.edit', compact('entreprise'));
    }

    //Update DB
    public function update(Request $request, $entrepriseId)
    {

        $validatedData = $request->validate([
            'nom' => 'required',
            'adresse' => 'required',
            'telephone' => 'required',
            'mail' => 'required|email',
        ]);

        $entreprise = Entreprise::where('id', $entrepriseId)->first();
        $entreprise->nom = $request->get('nom');
        $entreprise->adresse = $request->get('adresse');
        $entreprise->telephone = $request->get('telephone');
        $entreprise->mail = $request->get('mail');
        $entreprise->user_id = \Auth::user()->id;
        $entreprise->save();

        return redirect()->route('entreprises.index');
    }

    //Viewing the details of a company
    public function show($entrepriseId)
    {
        $entreprise = Entreprise::where('id', $entrepriseId)->with('contact')->first();
        return view('entreprises.show', compact('entreprise'));
    }
}
