<?php

namespace App\Http\Controllers\ControllerApi;

use Illuminate\Http\Request;

use App\Company;
use App\User;
use App\Contact;
use App\Demand;
use App\Http\Controllers\Controller;

class ApiEntreprisesController extends Controller
{
    public function index()
    {
        //This will show every company
        $entreprises = Company::all();
        return response()->json([
            'entreprises' => $entreprises
        ]);
    }

    public function detail($entrepriseId)
    {
        //This will show detail of an company.
        $entreprise = Company::where('id', $entrepriseId)->with('contact')->first();
        return response()->json([
            'entreprise' => $entreprise
        ]);
      
    }

    public function user($userId)
    {
        //This will show a lot of user informations and some statistics.
        $user = User::where('id', $userId)->first();
        $nb_ent = Company::where('user_id', $user->id)->count();
        $nb_contact = Contact::where('user_id', $user->id)->count();
        $nb_demandes = Demand::where('user_id', $user->id)->count();
        return response()->json([
            'user' => $user,
            'Nombre d entreprise'=> $nb_ent,
            'Nombre de contact' => $nb_contact,
            'Nombre de demandes'=> $nb_demandes,
        ]);
      
    }

















}
