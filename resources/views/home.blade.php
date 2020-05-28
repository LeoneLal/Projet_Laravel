@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div style= "display: none">
                <p type="hidden">{{ $nb_ent = DB::table('entreprises')->where('user_id', \Auth::user()->id)->count()}}
                {{ $nb_contact = DB::table('contact')->where('user_id', \Auth::user()->id)->count()}}
                {{ $nb_demandes = DB::table('demandes')->where('user_id', \Auth::user()->id)->count()}}</p>
            </div>
           
            <div class="col-md-10">
                <h2>Tableau des badges</h2>
                <div class="cadre">
                    @if ($nb_ent == 0)
                        <p>Entre une entreprises pour obtenir ce badge</p>
                    @elseif($nb_ent < 5)
                        <img src="images/badge1.png" alt="Biere" id="badge" />
                        <p><b>Badge : Bon début !</b></p>
                        <p>Encore {{ 5 - $nb_ent}} entreprises avant le prochain badge</p>

                    @elseif($nb_ent < 10)
                        <img src="images/badge2.png" alt="Biere" id="badge" />
                        <p><b>Badge : On progresse !</b></p>
                        <p>Encore {{ 10 - $nb_ent}} entreprises avant le prochain badge</p>

                    @elseif($nb_ent < 15)
                        <img src="images/badge3.png" alt="Biere" id="badge" />
                        <p><b>Badge : On progresse !</b></p>
                        <p>Encore {{ 15 - $nb_ent}} entreprises avant le prochain badge</p>

                    @elseif($nb_ent < 20)
                        <img src="images/badge4.png" alt="Biere" id="badge" />
                        <p><b>Badge : On progresse !</b></p>
                        <p>Encore {{ 15 - $nb_ent}} entreprises avant le prochain badge</p>

                    @elseif($nb_ent < 25)
                        <img src="images/badge5.png" alt="Biere" id="badge" />
                        <p><b>Badge : On progresse !</b></p>
                        <p>Encore {{ 15 - $nb_ent}} entreprises avant le prochain badge</p>

                    @endif 
                </div>
                <div class="cadre">
                    @if ($nb_contact == 0)
                        <p>Entre un contact pour obtenir ce badge</p>
                    @elseif($nb_contact < 5)
                        <img src="images/badge1.png" alt="Biere" id="badge" />
                        <p><b>Badge : Bon début !</b></p>
                        <p>Encore {{ 5 - $nb_contact}} contacts avant le prochain badge</p>

                    @elseif($nb_contact >= 5)
                        <img src="images/badge2.png" alt="Biere" id="badge" />
                        <p><b>Badge : On progresse !</b></p>
                        <p>Encore {{ 10 - $nb_contact}} contacts avant le prochain badge</p>

                    @elseif($nb_contact > 10)     
                        <img src="images/badge3.png" alt="Biere" id="badge" />
                        <p><b>Badge : Ca devient serieux ! </b></p>
                        <p>Encore {{ 15 - $nb_contact}} contacts avant le prochain badge</p>

                    @elseif($nb_contact > 15)  
                        <img src="images/badge4.png" alt="Biere" id="badge" />
                        <p><b>Badge : Les yeux fermés !</b></p>
                        <p>Encore {{ 15 - $nb_contact}} contacts avant le prochain badge</p>

                    @elseif($nb_contact > 20)
                        <img src="images/badge5.png" alt="Biere" id="badge" />
                        <p><b>Badge : Un vrai pro ! !</b></p>
                        <p>Encore {{ 15 - $nb_contact}} contacts avant le prochain badge</p>

                    @endif 
                </div>
                <div class="cadre">
                    @if ($nb_demandes == 0)
                        <p>Créer une demande pour obtenir ce badge</p>
                    @elseif($nb_demandes < 5)
                        <img src="images/badge1.png" alt="Biere" id="badge" />
                        <p><b>Badge : Bon début !</b></p>
                        <p>Encore {{ 5 - $nb_demandes}} demandes avant le prochain badge</p>

                    @elseif($nb_demandes >= 5)
                        <img src="images/badge2.png" alt="Biere" id="badge" />
                        <p><b>Badge : On progresse !</b></p>
                        <p>Encore {{ 10 - $nb_demandes}} demandes avant le prochain badge</p>

                    @elseif($nb_demandes >= 10)     
                        <img src="images/badge3.png" alt="Biere" id="badge" />
                        <p><b>Badge : Ca devient serieux ! </b></p>
                        <p>Encore {{ 15 - $nb_demandes}} demandes avant le prochain badge</p>

                    @elseif($nb_demandes >= 15)  
                        <img src="images/badge4.png" alt="Biere" id="badge" />
                        <p><b>Badge : Les yeux fermés !</b></p>
                        <p>Encore {{ 20 - $nb_demandes}} demandes avant le prochain badge</p>

                    @elseif($nb_demandes >= 20)
                        <img src="images/badge5.png" alt="Biere" id="badge" />
                        <p><b>Badge : Un vrai pro ! !</b></p>
                        <p>Encore {{ 25 - $nb_demandes}} demandes avant le prochain badge</p>

                    @endif 
                </div>
                <div class="cadre">
                    @if ($nb_ent == 0 && $nb_contact == 0 && $nb_demandes == 0)
                        <p>Entrer une entreprise, un contact et une demande pour obtenir ce badge</p>
                    @elseif($nb_ent > 0 && $nb_contact > 0 && $nb_demandes > 0)
                        <img src="images/badge1.png" alt="Biere" id="badge" />
                        <p><b>Badge : Bon début !</b></p>
                        <p>Encore {{ 5 - $nb_contact}} contacts avant le prochain badge</p>

                    @elseif($nb_ent >= 5 && $nb_contact >= 5 && $nb_demandes >= 5)
                        <img src="images/badge2.png" alt="Biere" id="badge" />
                        <p><b>Badge : On progresse !</b></p>
                        <p>Encore {{ 10 - $nb_contact}} contacts avant le prochain badge</p>

                    @elseif($nb_ent >= 10 && $nb_contact >= 10 && $nb_demandes >= 10)
                        <img src="images/badge3.png" alt="Biere" id="badge" />
                        <p><b>Badge : Ca devient serieux ! </b></p>
                        <p>Encore {{ 15 - $nb_contact}} contacts avant le prochain badge</p>

                    @elseif($nb_ent >=15 && $nb_contact >=15 && $nb_demandes >=15)
                        <img src="images/badge4.png" alt="Biere" id="badge" />
                        <p><b>Badge : Les yeux fermés !</b></p>
                        <p>Encore {{ 20 - $nb_contact}} contacts avant le prochain badge</p>

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
                    <a href="{{ route('api.entreprises.index') }}" title="Accéder à l'API">Accéder à l'API</a>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
