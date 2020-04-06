<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\entreprises;

class EntreprisesController extends Controller
{
    public function index(){
        $entreprises = entreprises::all();
        return view('entreprises.index', compact('entreprises'));
    }

    public function create()
    {
        return view('entreprises.create');
    }

    public function store(Request $request)
    {
        $entreprises = new entreprises();
        $entreprises->nom = $request->get('nom');
        $entreprises->adresse = $request->get('adresse');
        $entreprises->telephone = $request->get('telephone');
        $entreprises->mail = $request->get('mail');
        $entreprises->save();
        return redirect()->route('entreprises.index');
    }


    public function show($entrepriseId)
    {
        $entreprises = entreprises::where('id', $entrepriseId)->first();
        return view('entreprises.show', compact('entreprises'));
    }
}
