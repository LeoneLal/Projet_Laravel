<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;
use App\Company;

class ContactController extends Controller
{
    //Send the index contact view with all contacts
    public function index(){
        $user = \Auth::user()->id;
        $contact =  Contact::with('company')->get();
        return view('contact.index', compact('contact', 'user'));
    }

    //Send the contact creation view to DB
    public function create($companyId){
        return view('contact.create', compact('companyId'));
    }

    //Send contact to DB
    public function store(Request $request){

        $validatedData = $request->validate([
            'surname' => 'required',
            'name' => 'required',
            'post' => 'required',
            'email' => 'required|email',
            'number' => 'required',
        ]); 

        $message = "Le champ est incorrect.";


        $contact = new Contact();
        $contact->nom = $request->get('surname');
        $contact->prenom = $request->get('name');
        $contact->poste = $request->get('post');
        $contact->mail = $request->get('email');
        $contact->numero = $request->get('number');
        $contact->entreprise_id = $request->get('company_id');
        $contact->user_id = \Auth::user()->id;
        $contact->save();
        return redirect()->route('companies.show', $contact->entreprise_id);
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
        return redirect()->route('companies.show', $contact->entreprise_id);
    }

    //Update the DB
    public function update(Request $request, $contactId)
    {
        $validatedData = $request->validate([
            'surname' => 'required',
            'name' => 'required',
            'post' => 'required',
            'email' => 'required|email',
            'number' => 'required',
        ]); 


        $contact = Contact::where('id', $contactId)->first();
        $contact->nom = $request->get('surname');
        $contact->prenom = $request->get('name');
        $contact->poste = $request->get('post');
        $contact->mail = $request->get('email');
        $contact->numero = $request->get('number');
        $contact->entreprise_id = $request->get('company_id');
        $contact->user_id = \Auth::user()->id;
        $contact->save(); 
        return redirect()->route('companies.show', $contact->entreprise_id);
    }
}
