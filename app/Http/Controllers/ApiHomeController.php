<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;

class ApiHomeController extends Controller
{
    
    public function index()
    {

        $usersapi=\Auth::user();
        $save_token= $usersapi->api_token;

        return view('apiuser.index', compact('usersapi','save_token'));
       
    }


   

   
}
