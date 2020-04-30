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
    
   
    public function delete($entrepriseId)
    {
        $entreprise = entreprises::where('id', $entrepriseId)->first();
        // suppression, au choix !
        // $category->destroy();
        $entreprise->delete();
        return redirect()->route('entreprises.index');
    }

    



    public function store(Request $request)
    {
        $entreprise = new entreprises();
        $entreprise->nom = $request->get('nom');
        $entreprise->adresse = $request->get('adresse');
        $entreprise->telephone = $request->get('telephone');
        $entreprise->mail = $request->get('mail');
        $entreprise->save();
        return redirect()->route('entreprises.index');
    }


    public function show($entrepriseId)
    {
        $entreprise = entreprises::where('id', $entrepriseId)->first();
        return view('entreprises.show', compact('entreprise'));
    }
}
