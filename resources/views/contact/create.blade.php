@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<title>Création d'un contact</title>
</head>
<body>
    <h1>Création d'un contact</h1>
    <!--Contact creation form-->
    <form method="POST" action="{{ route('contact.store') }}">

        @csrf

        <div class="container">
            <label for="nom">Nom du contact</label><br>
            <input id="nom" type="text" name="nom">
            @error('nom')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="container">
            <label for="nom">Prénom du contact</label><br>
            <input id="prenom" type="text" name="prenom">
            @error('prenom')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="container">
            <label for="Poste">Poste du contact</label><br>
            <input id="Poste" type="text" name="poste">
            @error('poste')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="container">
            <label for="mail">Mail du contact</label><br>
            <input id="mail" type="text" name="mail">
            @error('mail')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="container">
            <label for="telephone">Téléphone du contact</label><br>
            <input id="numero" type="text" name="numero">
            @error('numero')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <input type="hidden" name="entreprise_id" value="{{ $entrepriseId }}">

        <div class="container">
            <input type="submit">
        </div>
    </form>

</body>
</html>
@endsection