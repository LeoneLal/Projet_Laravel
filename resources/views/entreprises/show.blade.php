@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="{{asset ('css/style.css') }}" rel="stylesheet" type="text/css">
    <title>Affichage d'une entreprise</title>
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <h1>{{$entreprise->nom}}</h1>
                <div class="cadre">
                    @if(!is_null($entreprise))
                        <p>{{$entreprise->adresse}}</p>
                        <p>{{$entreprise->telephone}}</p>
                        <p>{{$entreprise->mail}}</p>
                    @else
                        <p>L'entreprise n'existe pas</p>
                    @endif
                </div>
                <div class="btn-grp">
                    <a href="{{ route('entreprises.edit', $entreprise->id) }}" title="Modification"><button type="button" class="btn btn-info">Modifier l'entreprise</button></a>
                    <a href="{{ route('entreprises.delete', $entreprise->id) }}" title="Supprimer l'entreprise"><button type="button" class="btn btn-danger">Supprimer l'entreprise</button></a>
                    <a href="{{ route('contact.create', $entreprise->id) }}" title="Ajouter un contact"><button type="button" class="btn btn-success">Ajouter un contact</button></a>
                </div>
                <hr>
                <h1>Contacts</h1>
                <!-- Afficher les différents contact -->
                <p>Les contacts liés à l'entreprise apparaitront ici !</p>

                @if(!is_null($entreprise->contact))
                    @foreach($entreprise->contact as $contact)
                        <ul class="list-group-item">
                            <li>Nom - Prénom :
                                {{ $contact->nom}}
                                {{ $contact->prenom}}
                            </li>
                            <li>Poste : {{ $contact->poste}}</li>
                            <li>Télephone : {{ $contact->numero}}</li>
                            <li>E-mail : {{ $contact->mail}}</li> 
                        </ul>
                        <div class="btn-grp">
                            <a href="{{ route('contact.edit', $contact->id) }}" title="Modification"><button type="button" class="btn btn-info">Modifier le contact</button></a>
                            <a href="{{ route('contact.delete', $contact->id) }}" title="Supprimer le contact"><button type="button" class="btn btn-danger">Supprimer le contact</button></a>
                        </div>
                    @endforeach
                @endif
            </div>
        </div>
    </div>
</body>
</html>
@endsection