<?php

namespace App\Http\Controllers\ControllerApi;
use App\User;
use App\Company;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ApiHomeController extends Controller
{
    
    public function index()
    {
       // We send some informations at the view to display them. 
       //The id_user, his token and some company.
        $usersapi=\Auth::user();
        $save_token= $usersapi->api_token;
        $id_user =\Auth::user()->id;
        $entreprises = Company::all();

        return view('apiuser.index', compact('usersapi','save_token','entreprises','id_user'));
       
    }


   

   
}
