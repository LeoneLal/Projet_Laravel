@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <h2>Tableau des badges</h2>
            <div class="cadre">
                @if($tab_entreprise['image'] != 0)
                    <img src="images/badge{{ $tab_entreprise['image']}}.png" alt="Biere" id="badge" />
                    <p><b>Badge : {{ $tab_entreprise['badge']}}</b></p>
                @endif

                @if($nb_ent == 0)
                    <p>Ajoutes une entreprise pour obtenir ce badge</p>
                @else    
                    <p>Encore {{ $tab_entreprise['number_left'] }} entreprises avant le prochain badge</p>
                @endif
            </div>
            <div class="cadre">
                @if($tab_contact['image'] != 0)
                    <img src="images/badge{{ $tab_contact['image']}}.png" alt="Biere" id="badge" />
                    <p><b>Badge : {{ $tab_contact['badge']}}</b></p>
                @endif

                @if($nb_contact == 0)
                    <p>Ajoutes un contact pour obtenir ce badge</p>
                @else    
                    <p>Encore {{ $tab_contact['number_left'] }} contacts avant le prochain badge</p>
                @endif

            </div>
            <div class="cadre">
                @if($tab_demande['image'] != 0)
                    <img src="images/badge{{ $tab_demande['image']}}.png" alt="Biere" id="badge" />
                    <p><b>Badge : {{ $tab_demande['badge']}}</b></p>
                @endif

                @if($nb_demandes == 0)
                    <p>Ajoutes une demande pour obtenir ce badge</p>
                @else    
                    <p>Encore {{ $tab_demande['number_left'] }} demandes avant le prochain badge</p>
                @endif
            </div>
            <div class="cadre">
                @if ($nb_ent == 0 && $nb_contact == 0 && $nb_demandes == 0)
                    <p>Ajoutes une entreprise, un contact et une demande pour obtenir ce badge</p>
                @elseif($nb_ent > 0 && $nb_contact > 0 && $nb_demandes > 0)
                    <img src="images/badge1.png" alt="Biere" id="badge" />
                    <p><b>Badge : Bon début !</b></p>
                    <p>Il faut au moins 5 entreprises, contacts et demandes pour débloquer ce badge</p>
                    <p>Tu possèdes {{$nb_contact}}  contacts, {{$nb_ent}} entreprises et {{$nb_demandes}} demandes.</p>

                @elseif($nb_ent >= 5 && $nb_contact >= 5 && $nb_demandes >= 5)
                    <img src="images/badge2.png" alt="Biere" id="badge" />
                    <p><b>Badge : On progresse !</b></p>
                    <p>Tu possèdes {{$nb_contact}} contacts, {{$nb_ent}} entreprises et {{$nb_demandes}} demandes.</p>

                @elseif($nb_ent >= 10 && $nb_contact >= 10 && $nb_demandes >= 10)
                    <img src="images/badge3.png" alt="Biere" id="badge" />
                    <p><b>Badge : Ca devient serieux ! </b></p>
                    <p>Tu possèdes {{$nb_contact}} contacts, {{$nb_ent}} entreprises et {{$nb_demandes}} demandes.</p>

                @elseif($nb_ent >=15 && $nb_contact >=15 && $nb_demandes >=15)
                    <img src="images/badge4.png" alt="Biere" id="badge" />
                    <p><b>Badge : Les yeux fermés !</b></p>
                    <p>Tu possèdes {{$nb_contact}} contacts, {{$nb_ent}} entreprises et {{$nb_demandes}} demandes.</p>

                @elseif($nb_ent >=20 && $nb_contact >=20 && $nb_demandes >=20)
                    <img src="images/badge5.png" alt="Biere" id="badge" />
                    <p><b>Badge : Un vrai pro ! !</b></p>
                @endif 
            </div>
        </div>
    </div>
</div>

@endsection
