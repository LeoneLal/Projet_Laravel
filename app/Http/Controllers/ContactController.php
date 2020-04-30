<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\contact;
use App\entreprises;

class ContactController extends Controller
{
    public function index(){
        $contact =  contact::all();
        return view('contact.index', compact('contact'));
    }

    public function create($entrepriseId){
        return view('contact.create', compact('entrepriseId'));
    }

    public function store(Request $request){
        $contact = new contact();
        $contact->nom = $request->get('nom');
        $contact->prenom = $request->get('prenom');
        $contact->poste = $request->get('poste');
        $contact->mail = $request->get('mail');
        $contact->numero = $request->get('numero');
        $contact->entreprise = $request->get('entreprise');
        $contact->save();
        return redirect()->route('contact.index');
    }

    public function edit($contactId){
        $contact = contact::where('id', $contactId)->first();
        return view('contact.edit', compact('contact'));
    }

    //Fonction update BDD
    public function update(Request $request, $contactId)
    {
        $contact = contact::where('id', $contactId)->first();
        $contact->nom = $request->get('nom');
        $contact->prenom = $request->get('prenom');
        $contact->poste = $request->get('poste');
        $contact->mail = $request->get('mail');
        $contact->numero = $request->get('numero');
        $contact->entreprise = 4;
        $contact->save();

        return redirect()->route('contact.index');
    }
}