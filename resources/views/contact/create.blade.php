@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<link href="{{asset ('css/style.css') }}" rel="stylesheet" type="text/css">
    <title>Création d'un contact</title>
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <h1>Création d'un contact</h1>
                <!--Contact creation form-->
                <form method="POST" action="{{ route('contact.store') }}">

                    @csrf

                    <div class="form-group">
                        <label for="nom">Nom du contact</label><br>
                        <input id="nom" type="text" class="form-control" name="nom">
                        @error('nom')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="nom">Prénom du contact</label><br>
                        <input id="prenom" type="text" class="form-control" name="prenom">
                        @error('prenom')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="Poste">Poste du contact</label><br>
                        <input id="Poste" type="text" class="form-control" name="poste">
                        @error('poste')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="mail">Mail du contact</label><br>
                        <input id="mail" type="text" class="form-control" name="mail">
                        @error('mail')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="telephone">Téléphone du contact</label><br>
                        <input id="numero" type="text" class="form-control" name="numero">
                        @error('numero')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <input type="hidden" name="entreprise_id" value="{{ $entrepriseId }}">

                    <input type="submit">
                </form>
            </div>
        </div>
    </div>
</body>
</html>
@endsection