@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<title>Affichage des contacts</title>
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
            <h1>Affichage des contacts</h1>
    <br>
    @foreach($contact as $one)
        @if($one->user_id == $user)
            <ul>
            <!--Il faut trouver comment afficher le nom de l'entreprise-->
                <li>{{ $one->nom }} {{ $one->prenom }}</li>
                <li>{{ $one->poste }} chez {{ $one->entreprise->nom }}</li>
                <li>{{ $one->mail }}</li>
                <li>{{ $one->numero }}</li>
            </ul>
        @endif
    @endforeach
    <br><br>
    <a href="{{ route('home') }}" title="accueil">Retour à la page d'accueil</a>
            </div>
        </div>
    </div>
</body>
</html>
@endsection