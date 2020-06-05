@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<title>Création d'une entreprise</title>
</head>
<body>
    <h1>Création d'une entreprise</h1>
    <!--Company creation form-->
    <form method="POST" action="{{ route('entreprises.store') }}">

        @csrf

        <label for="nom">Nom de l'entreprise à créer</label><br>
        <input id="nom" type="text" name="nom">
        <br><br>
        <label for="adresse">Adresse de l'entreprise à créer</label><br>
        <input id="adresse" type="text" name="adresse">
        <br><br>
        <label for="telephone">Téléphone de l'entreprise à créer</label><br>
        <input id="telephone" type="text" name="telephone">
        <br><br>
        <label for="mail">Mail de l'entreprise à créer</label><br>
        <input id="mail" type="text" name="mail">


        <input type="submit">
    </form>

</body>
</html>
@endsection