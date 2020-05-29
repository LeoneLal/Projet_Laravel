@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="col-md-10">
                <h2>Tableau des badges</h2>
                <div class="cadre">
                    @if($tab_entreprise['image'] != 0)
                        <img src="images/badge{{ $tab_entreprise['image']}}.png" alt="Biere" id="badge" />
                        <p><b>Badge : {{ $tab_entreprise['badge']}}</b></p>
                    @endif

                    @if($nb_ent == 0)
                        <p>Entre une entreprise pour obtenir ce badge</p>

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
                        <p>Entre un contact pour obtenir ce badge</p>

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
                        <p>Entre une demande pour obtenir ce badge</p>

                    @else    
                        <p>Encore {{ $tab_demande['number_left'] }} demandes avant le prochain badge</p>
                    @endif
                </div>
                <div class="cadre">
                    @if ($nb_ent == 0 && $nb_contact == 0 && $nb_demandes == 0)
                        <p>Entrer une entreprise, un contact et une demande pour obtenir ce badge</p>
                    @elseif($nb_ent > 0 && $nb_contact > 0 && $nb_demandes > 0)
                        <img src="images/badge1.png" alt="Biere" id="badge" />
                        <p><b>Badge : Bon début !</b></p>
                        <p>Il faut au moins 5 entreprises, contacts et demandes pour débloquer ce badge</p>
                        <p>Tes contacts : {{$nb_contact}}  et {{ 5 - $nb_ent}} entreprises et {{ 5 - $nb_demandes}} demandes avant le prochain badge</p>

                    @elseif($nb_ent >= 5 && $nb_contact >= 5 && $nb_demandes >= 5)
                        <img src="images/badge2.png" alt="Biere" id="badge" />
                        <p><b>Badge : On progresse !</b></p>
                        <p>Encore {{ 10 - $nb_contact}} contacts et {{ 10 - $nb_ent}} entreprises et {{ 10 - $nb_demandes}} demandes avant le prochain badge</p>

                    @elseif($nb_ent >= 10 && $nb_contact >= 10 && $nb_demandes >= 10)
                        <img src="images/badge3.png" alt="Biere" id="badge" />
                        <p><b>Badge : Ca devient serieux ! </b></p>
                        <p>Encore {{ 15 - $nb_contact}} contacts et {{ 15 - $nb_ent}} entreprises et {{ 15 - $nb_demandes}} demandes avant le prochain badge</p>

                    @elseif($nb_ent >=15 && $nb_contact >=15 && $nb_demandes >=15)
                        <img src="images/badge4.png" alt="Biere" id="badge" />
                        <p><b>Badge : Les yeux fermés !</b></p>
                        <p>Encore {{ 20 - $nb_contact}} contacts et {{ 20 - $nb_ent}} entreprises et {{ 20 - $nb_demandes}} demandes avant le prochain badge</p>

                    @elseif($nb_ent >=20 && $nb_contact >=20 && $nb_demandes >=20)
                        <img src="images/badge5.png" alt="Biere" id="badge" />
                        <p><b>Badge : Un vrai pro ! !</b></p>
                    @endif 
                </div>
            </div>
        </div>
        <div class="row">  
            <div class="col-md-10" >
                <h2>Liens vers les différentes fonctionnalités</h2>
                <div class="acces">
                    <a href="{{ route('entreprises.index') }}">Vos entreprises</a>
                    <a href="{{ route('contact.index') }}">Vos contacts</a>
                    <a href="{{ route('demandes.index') }}">Vos demandes</a>
                    <a href="{{ route('apihome.index') }}" title="Home API">Home API</a>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
