<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Company;
use App\Contact;

class CompaniesController extends Controller
{
    //Send the home page by recovering all the companies present in DB
    public function index(){
        $companies = Company::all();
        return view('companies.index', compact('companies'));
    }

    //Send the company create view
    public function create()
    {
        return view('companies.create');
    }

    //Delete a company
    public function delete($companyId)
    {
        $contact = Contact::where('entreprise_id', $companyId);
        $contact->delete();
        $company = Company::where('id', $companyId)->first();
        $company->delete();
        return redirect()->route('companies.index');
    }

    //Send to DB
    public function store(Request $request)
    {
        //Content check
        $validatedData = $request->validate([
            'nom' => 'required',
            'adresse' => 'required',
            'telephone' => 'required',
            'mail' => 'required|email',
        ]);       

        $company = new Company();
        $company->nom = $request->get('nom');
        $company->adresse = $request->get('adresse');
        $company->telephone = $request->get('telephone');
        $company->mail = $request->get('mail');
        $company->user_id = \Auth::user()->id;
        $company->save();
        return redirect()->route('companies.index');
    }

    //Send the company edit view
    public function edit($companyId)
    {
        $company = Company::where('id', $companyId)->first();
        return view('companies.edit', compact('company'));
    }

    //Update DB
    public function update(Request $request, $companyId)
    {

        $validatedData = $request->validate([
            'nom' => 'required',
            'adresse' => 'required',
            'telephone' => 'required',
            'mail' => 'required|email',
        ]);

        $company = Company::where('id', $companyId)->first();
        $company->nom = $request->get('nom');
        $company->adresse = $request->get('adresse');
        $company->telephone = $request->get('telephone');
        $company->mail = $request->get('mail');
        $company->user_id = \Auth::user()->id;
        $company->save();

        return redirect()->route('companies.index');
    }

    //Viewing the details of a company
    public function show($companyId)
    {
        $company = Company::where('id', $companyId)->with('contact')->first();
        dd($company);
        return view('companies.show', compact('company'));
    }
}
