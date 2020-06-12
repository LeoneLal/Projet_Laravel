@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<link href="{{asset ('css/style.css') }}" rel="stylesheet" type="text/css">
    <title>Création d'une entreprise</title>
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <h1>Création d'une entreprise</h1>
                <!--Company creation form-->
                <form method="POST" action="{{ route('companies.store') }}">

                    @csrf

                    <div class="form-group">
                        <label for="nom">Nom de l'entreprise à créer</label><br>
                        <input id="nom" type="text" class="form-control" name="nom">
                    </div>
                    <div class="form-group">
                        <label for="adresse">Adresse de l'entreprise à créer</label><br>
                        <input id="adresse" type="text" class="form-control" name="adresse">
                    </div>
                    <div class="form-group">
                        <label for="telephone">Téléphone de l'entreprise à créer</label><br>
                        <input id="telephone" type="text" class="form-control" name="telephone">
                    </div>
                    <div class="form-group">
                        <label for="mail">Mail de l'entreprise à créer</label><br>
                        <input id="mail" type="text" class="form-control" name="mail">
                    </div>

                    <input type="submit">
                </form>
            </div>
        </div>
    </div>
</body>
</html>
@endsection