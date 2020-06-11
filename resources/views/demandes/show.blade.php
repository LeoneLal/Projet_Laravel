@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="{{asset ('css/style.css') }}" rel="stylesheet" type="text/css">
    <title>Affichage d'une demande</title>
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                @if(!is_null($demande))
                    <h1>{{ $demande->type }} : {{ $demande->emploi }}</h1>
                    <div class="list-group">
                        <h4>Statuts : </h4>
                        <div class="list-group-item">
                            @if($demande->envoi_mail == 1 && $demande->reception_mail == 1)
                                <p>Mail : Communication par mail établie des deux côtés</p>
                            @elseif($demande->envoi_mail == 1)
                                <p>Mail : Entreprise contactée, en attente de réponse...</p>
                            @else
                                <p>Aucun mail envoyé</p>
                            @endif
                        </div>
                        <div class="list-group-item">
                            @if($demande->envoie_appel == 1 && $demande->reception_appel == 1)
                                <p>Appel : Mise en contact téléphonique avec l'entreprise</p>
                            @elseif($demande->envoie_appel == 1)
                                <p>Appel : Entreprise contactée, en attente de réponse...</p>
                            @else
                                <p>Aucun appel sortant</p>
                            @endif
                        </div>
                        <div class="list-group-item">
                            @if( $demande->date_rendez_vous == NULL)
                                <p>Pas de rendez-vous de programmé</p>
                            @else
                                <p>Date du rendez-vous : {{ $demande->date_rendez_vous }}</p>
                            @endif
                        </div>
                        <div class="list-group-item">
                            <p>Résultat de la demande : {{$demande->resultat}}</p>
                        </div>
                    </div> 
                    <div class="btn-grp">
                        <a href="{{ route('demandes.edit', $demande->id) }}" title="Modification"><button type="button" class="btn btn-info">Modifier la demande</button></a>
                        <a href="{{ route('demandes.delete', $demande->id) }}" title="Supprimer la demande"><button type="button" class="btn btn-danger">Supprimer la demande</button></a>
                    </div>
                @else
                    <p>La demande n'existe pas</p>
                @endif
            </div>
        </div>
    </div>
</body>
</html>
@endsection