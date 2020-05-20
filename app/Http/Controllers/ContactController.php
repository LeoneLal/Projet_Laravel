<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;
use App\Entreprise;

class ContactController extends Controller
{
    //Envoie la vue index de Contact avec tout les contacts
    public function index(){
        $contact =  Contact::all();
        return view('contact.index', compact('contact'));
    }

    //Envoie la vue create de contact
    public function create($entrepriseId){
        return view('contact.create', compact('entrepriseId'));
    }

    //Fonction envoie en BDD d'un contact
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

    //Envoie la vue edit contact
    public function edit($contactId){
        $contact = Contact::where('id', $contactId)->first();
        return view('contact.edit', compact('contact'));
    }
    //Supprime un contact de l'entrerpise
    public function delete($contactId){
        $contact = Contact::where('id', $contactId)->first();
        $contact->delete();  
        return redirect()->route('entreprises.show', $contact->entreprise_id);
    }

    //Fonction update BDD
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
