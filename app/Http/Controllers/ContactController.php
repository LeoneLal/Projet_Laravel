<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;
use App\Entreprise;

class ContactController extends Controller
{
    public function index(){
        $contact =  Contact::all();
        return view('contact.index', compact('contact'));
    }

    public function create($entrepriseId){
        return view('contact.create', compact('entrepriseId'));
    }

    public function store(Request $request){
        $contact = new Contact();
        $contact->nom = $request->get('nom');
        $contact->prenom = $request->get('prenom');
        $contact->poste = $request->get('poste');
        $contact->mail = $request->get('mail');
        $contact->numero = $request->get('numero');
        $contact->entreprise_id = $request->get('entreprise_id');
        $contact->save();
        return redirect()->route('contact.index');
    }

    public function edit($contactId){
        $contact = Contact::where('id', $contactId)->first();
        return view('contact.edit', compact('contact'));
    }

    public function delete($contactId){
        $contact = Contact::where('id', $contactId)->first();
        $contact->delete();  
        // $contact->entreprise_id->id)    compact('contact');            
        return redirect()->route('entreprises.index') ;
    }

    //Fonction update BDD
    public function update(Request $request, $contactId)
    {
        $contact = Contact::where('id', $contactId)->first();
        $contact->nom = $request->get('nom');
        $contact->prenom = $request->get('prenom');
        $contact->poste = $request->get('poste');
        $contact->mail = $request->get('mail');
        $contact->numero = $request->get('numero');
        $contact->entreprise_id = $request->get('entreprise_id');
        $contact->save();
        return redirect()->route('entreprises.show', $contact->entreprise_id);
    }
}
