@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<title>Affichage d'une catégorie</title>
</head>
<body>
    <h1>Affichage d'une catégorie</h1>

    <p>
    @if(!is_null($entreprise))
        {{$entreprise->nom}}
        <br>
        {{$entreprise->adresse}}
        <br>
        {{$entreprise->telephone}}
        <br>
        {{$entreprise->mail}}
    @else
        <p>l'entreprise n'existe pas</p>
    @endif
    </p>    
    <a href="{{ route('entreprises.edit', $entreprise->id) }}" title="Modification"><button type="button" class="btn btn-info">Modifier l'entreprise</button></a>
    <a href="{{ route('entreprises.delete', $entreprise->id) }}" title="Supprimer l'entreprise"><button type="button" class="btn btn-danger">Supprimer l'entreprise</button></a>
    <a href="{{ route('contact.create', $entreprise->id) }}" title="Ajouter un contact"><button type="button" class="btn btn-success">Ajouter un contact</button></a>
    <hr>
    <br>
    <h2>Affichage des contacts</h2>
    <!-- Afficher les différents contact -->
    <p>Les contacts liés à l'entreprise apparaitrons ici !</p>

    @if(!is_null($entreprise->contact))
        @foreach($entreprise->contact as $contact)
            <ul>
                <li>Nom-Prénom :
                    {{ $contact->nom}}
                    {{ $contact->prenom}}
                </li>
                <li>Poste : {{ $contact->poste}}</li>
                <li>Télephone : {{ $contact->numero}}</li>
                <li>E-mail : {{ $contact->mail}}</li> 
            </ul>
            <a href="{{ route('contact.edit', $contact->id) }}" title="Modification"><button type="button" class="btn btn-info">Modifier le contact</button></a>
            <a href="{{ route('contact.delete', $contact->id) }}" title="Supprimer le contact"><button type="button" class="btn btn-danger">Supprimer le contact</button></a>
    
        @endforeach
    @endif

</body>
</html>
@endsection