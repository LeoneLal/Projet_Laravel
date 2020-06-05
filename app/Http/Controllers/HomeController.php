<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Entreprise;
use App\contact;
use App\Demande;
use App\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */


    /**
     * Breakpoints for number of badges
     */
    public $bps = [
        [0, ""],
        [1, "Bon début !"],
        [5, "On progresse"],
        [10, "Ca devient serieux !"],
        [15, "Les yeux fermés !"],
        [20, "Un vrai pro !"]
    ]; 

    public function index()
    {   
        /**
         * Get number of each elements linked to the connected user
         */
        $user = \Auth::user();
        $nb_ent = Entreprise::where('user_id', $user->id)->count();
        $nb_contact = contact::where('user_id', $user->id)->count();
        $nb_demandes = Demande::where('user_id', $user->id)->count();

        /**
         * Tabs for data of each elements
         */
        $tab_contact = ['image' => '','badge' => '','number_left' => ''];
        $tab_entreprise = ['image' => '','badge' => '','number_left' => ''];
        $tab_demande = ['image' => '','badge' => '','number_left' => ''];

        $badge = "";
        /**
         * For each badge we give the value that correspond.
         */
        foreach ($this->bps as $key => $value) {
            if ($nb_contact >= $value[0]) {
                $tab_contact['image'] = $key;
                $tab_contact['badge'] = $value[1];
                $tab_contact['number_left'] = $value[0] - $nb_contact + 5;
            }

            if ($nb_ent >= $value[0]) {
                $tab_entreprise['image'] = $key;
                $tab_entreprise['badge'] = $value[1];
                $tab_entreprise['number_left'] = $value[0] - $nb_ent + 5;
                $badge = $value[1];
            }

            if ($nb_demandes >= $value[0]) {
                $tab_demande['image'] = $key;
                $tab_demande['badge'] = $value[1];
                $tab_demande['number_left'] = $value[0] - $nb_demandes + 5;
            }

            if ($nb_contact < 5) {
                $tab_contact['image'] = 1;
                $tab_contact['badge'] = "Bon début !";
                $tab_contact['number_left'] = 5 - $nb_contact;
            }

            if ($nb_ent < 5) {
                $tab_entreprise['image'] = 1;
                $tab_entreprise['badge'] = "Bon début !";
                $tab_entreprise['number_left'] = 5 - $nb_ent;
                $badge = "Bon début !";
            }

            if ($nb_demandes < 5) {
                $tab_demande['image'] = 1;
                $tab_demande['badge'] = "Bon début !";
                $tab_demande['number_left'] = 5 - $nb_demandes;
            }
        }

        $user = User::where('id', $user->id)->first();
        $user->badge = $badge;
        $user->save(); 
        return view('home', compact('nb_ent', 'nb_contact', 'nb_demandes', 'tab_contact', 'tab_entreprise', 'tab_demande'));
    }
    
}
