@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<title>Affichage d'une demande</title>

    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <style>
    .content {
        flex: 1;
        display: flex;
        flex-direction: column;
        margin-left: 100px;
    }

    .content h2{
        font-family: Arial, Helvetica, sans-serif;
        margin-bottom : 5px;
    }

    .statut {
        display: flex;
        flex-direction: column
    }

    .links{
        display : flex;
        flex-direction : column;
        margin-left: 100px;
    }

    .links a{
        margin: 1%;
    }
    </style>
</head>
<body>
    <div class="content">
    @if(!is_null($demande))
    <h1>{{ $demande->type }} : {{ $demande->emploi }}</h1>
        <div class="statut">
            <h4>Statut mails :</h4>
            @if($demande->envoi_mail == 1 && $demande->reception_mail == 1)
                <p>Communication par mail établie des deux côtés</p>
            @elseif($demande->envoi_mail == 1)
                <p>Mail envoyé, en attente de réponse...</p>
            @endif
        </div>
        
        <div class="statut">
            <h4>Statut appel :</h4>
            @if($demande->envoie_appel == 1 && $demande->reception_appel == 1)
                <p>Mise en contact téléphonique avec l'entreprise</p>
            @elseif($demande->envoie_appel == 1)
                <p>Entreprise appelée, en attente de réponse...</p>
            @endif
        </div>

        <div class="statut">
            <h4>Statut rendez-vous :</h4>
            @if( $demande->date_rendez_vous == NULL)
                <p>Pas de rendez vous de programmé</p>
            @else
                <p>Date : {{ $demande->date_rendez_vous }}</p>
            @endif
        </div>

        <div class="statut">
            <h4>Statut rendez-vous :</h4>
            <p>{{$demande->resultat}}</p>
            <p>ID : {{$demande->id}}</p>
        </div>
    @else
        <p>La demande n'existe pas</p>
    @endif
    </div>
    <div class="links">
        <a href="{{ route('demandes.edit', $demande->id) }}" title="Modification"><button type="button" class="btn btn-info">Modifier la demande</button></a>
        <a href="{{ route('demandes.delete', $demande->id) }}" title="Supprimer la demande"><button type="button" class="btn btn-danger">Supprimer la demande</button></a>
    </div>
</body>
</html>
@endsection