<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;
use App\Entreprise;

class ContactController extends Controller
{
    //Send the index contact view with all contacts
    public function index(){
        $contact =  Contact::all();
        $entreprise = Entreprise::where('id', $contact->entreprise_id);
        return view('contact.index', compact('contact', 'entreprise'));
    }

    //Send the contact creation view to DB
    public function create($entrepriseId){
        return view('contact.create', compact('entrepriseId'));
    }

    //Send contact to DB
    public function store(Request $request){

        $validatedData = $request->validate([
            'nom' => 'required',
            'prenom' => 'required',
            'poste' => 'required',
            'mail' => 'required|email',
            'numero' => 'required',
        ]); 

        $message = "Le champ numéro est incorrect.";


        $contact = new Contact();
        $contact->nom = $request->get('nom');
        $contact->prenom = $request->get('prenom');
        $contact->poste = $request->get('poste');
        $contact->mail = $request->get('mail');
        $contact->numero = $request->get('numero');
        $contact->entreprise_id = $request->get('entreprise_id');
        $contact->user_id = \Auth::user()->id;
        $contact->save();
        return redirect()->route('entreprises.show', $contact->entreprise_id);
    }

    //Send the contact edit view
    public function edit($contactId){
        $contact = Contact::where('id', $contactId)->first();
        return view('contact.edit', compact('contact'));
    }

    //Delete a contact from the company
    public function delete($contactId){
        $contact = Contact::where('id', $contactId)->first();
        $contact->delete();  
        return redirect()->route('entreprises.show', $contact->entreprise_id);
    }

    //Update the DB
    public function update(Request $request, $contactId)
    {
        $validatedData = $request->validate([
            'nom' => 'required',
            'prenom' => 'required',
            'poste' => 'date',
            'mail' => 'required|email',
            'numero' => 'required',
        ]);

        $contact = Contact::where('id', $contactId)->first();
        $contact->nom = $request->get('nom');
        $contact->prenom = $request->get('prenom');
        $contact->poste = $request->get('poste');
        $contact->mail = $request->get('mail');
        $contact->numero = $request->get('numero');
        $contact->entreprise_id = $request->get('entreprise_id');
        $contact->user_id = \Auth::user()->id;
        $contact->save(); 
        return redirect()->route('entreprises.show', $contact->entreprise_id);
    }
}
