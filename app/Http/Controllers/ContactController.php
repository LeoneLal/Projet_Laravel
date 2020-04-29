<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\contact;

class ContactController extends Controller
{
    public function index(){
        $contact =  contact::all();
        return view('contact.index', compact('contact'));
    }

    public function create(){
        return view('contact.create');
    }

    public function store(Request $request){
        $contact = new contact();
        $contact->nom = $request->get('nom');
        $contact->adresse = $request->get('poste');
        $contact->mail = $request->get('mail');
        $contact->telephone = $request->get('telephone');
        $contact->save();
        return redirect()->route('contact.index');
    }
}
