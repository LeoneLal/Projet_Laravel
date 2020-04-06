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

    public function show($entrepriseId)
    {
        $category = Category::where('id', $entrepriseId)->first();
        return view('entreprises.show', compact('entreprises'));
    }
}
