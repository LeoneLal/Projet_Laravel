<?php

namespace App\Http\Controllers;
use App\User;
use App\Entreprise;
use Illuminate\Http\Request;

class ApiHomeController extends Controller
{
    
    public function index()
    {

        $usersapi=\Auth::user();
        $save_token= $usersapi->api_token;
        $id_user =\Auth::user()->id;
        $entreprises = Entreprise::all();

        return view('apiuser.index', compact('usersapi','save_token','entreprises','id_user'));
       
    }


   

   
}
