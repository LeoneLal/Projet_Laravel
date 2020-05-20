@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Dashboard</div>
            </div>
            
            <div>
                {{ $nb_ent = DB::table('entreprises')->where('user_id', \Auth::user()->id)->count()}}
                {{ $nb_contact = DB::table('contact')->where('user_id', \Auth::user()->id)->count()}}
                {{ $nb_demandes = DB::table('demandes')->where('user_id', \Auth::user()->id)->count()}}
            </div>

            
            <div class="col-md-6">
                @if ($nb_ent == 0)
                    <p>Entre une entreprises pour obtenir ce badge</p>
                @elseif($nb_ent < 5)
                    <img src="images/level1.png" alt="Biere" id="first_step" />
                    <p><b>Badge : Bon début !</b></p>
                    <p>Encore {{ 5 - $nb_ent}} entreprises avant le prochain badge</p>

                @elseif($nb_ent < 10)
                    <img src="images/level2.png" alt="Biere" id="great" />
                    <p><b>Badge : On progresse !</b></p>
                    <p>Encore {{ 10 - $nb_ent}} entreprises avant le prochain badge</p>

                @elseif($nb_ent < 15)
                    <img src="images/level3.png" alt="Biere" id="third" />
                    <p><b>Badge : On progresse !</b></p>
                    <p>Encore {{ 15 - $nb_ent}} entreprises avant le prochain badge</p>

                @elseif($nb_ent < 20)
                    <img src="images/level4.png" alt="Biere" id="third" />
                    <p><b>Badge : On progresse !</b></p>
                    <p>Encore {{ 15 - $nb_ent}} entreprises avant le prochain badge</p>

                @elseif($nb_ent < 25)
                    <img src="images/level5.png" alt="Biere" id="third" />
                    <p><b>Badge : On progresse !</b></p>
                    <p>Encore {{ 15 - $nb_ent}} entreprises avant le prochain badge</p>

                @endif 

                @if ($nb_contact == 0)
                    <p>Entre un contact pour obtenir ce badge</p>
                @elseif($nb_contact < 2)
                    <img src="images/level1.png" alt="Biere" id="first_step" />
                    <p><b>Badge : Bon début !</b></p>
                    <p>Encore {{ 2 - $nb_contact}} contacts avant le prochain badge</p>

                @elseif($nb_contact < 10)
                    <img src="images/level2.png" alt="Biere" id="great" />
                    <p><b>Badge : On progresse !</b></p>
                    <p>Encore {{ 10 - $nb_contact}} contacts avant le prochain badge</p>

                @elseif($nb_contact < 15)
                    <img src="images/level3.png" alt="Biere" id="third" />
                    <p><b>Badge : Ca devient serieux ! </b></p>
                    <p>Encore {{ 15 - $nb_contact}} contacts avant le prochain badge</p>

                @elseif($nb_contact < 20)
                    <img src="images/level4.png" alt="Biere" id="third" />
                    <p><b>Badge : Les yeux fermés !</b></p>
                    <p>Encore {{ 15 - $nb_contact}} contacts avant le prochain badge</p>

                @elseif($nb_contact < 25)
                    <img src="images/level5.png" alt="Biere" id="third" />
                    <p><b>Badge : Un vrai pro ! !</b></p>
                    <p>Encore {{ 15 - $nb_contact}} contacts avant le prochain badge</p>

                @endif 
            </div>



            <div class="col-md-5">
                <div class="row"><a href="{{ route('entreprises.index') }}" title="Ajouter une catégorie">Voir vos entreprises</a></div>
                <div class="row"><a href="{{ route('contact.index') }}" title="Ajouter une catégorie">Voir vos contacts</a></div>
                <div class="row"><a href="{{ route('demandes.index') }}" title="Ajouter une catégorie">Voir vos demandes</a></div>
            </div>
            
        </div>
    </div>
</div>

@endsection
