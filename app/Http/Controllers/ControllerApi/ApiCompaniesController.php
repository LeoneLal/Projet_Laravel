<?php

namespace App\Http\Controllers\ControllerApi;

use Illuminate\Http\Request;

use App\Company;
use App\User;
use App\Contact;
use App\Demand;
use App\Http\Controllers\Controller;

class ApiCompaniesController extends Controller
{
    public function index()
    {
        //This will show every company
        $companies = Company::all();
        return response()->json([
            'entreprises' => $companies
        ]);
    }

    public function detail($companyId)
    {
        //This will show detail of an company.
        $company = Company::where('id', $companyId)->with('contact')->first();
        return response()->json([
            'entreprise' => $company
        ]);
      
    }

    public function user($userId)
    {
        //This will show a lot of user informations and some statistics.
        $user = User::where('id', $userId)->first();
        $nb_ent = Company::where('user_id', $user->id)->count();
        $nb_contact = contact::where('user_id', $user->id)->count();
        $nb_demands = Demand::where('user_id', $user->id)->count();
        return response()->json([
            'user' => $user,
            'Nombre d entreprise'=> $nb_ent,
            'Nombre de contact' => $nb_contact,
            'Nombre de demandes'=> $nb_demands,
        ]);
      
    }

















}
