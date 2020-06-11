@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<link href="{{asset ('css/style.css') }}" rel="stylesheet" type="text/css">
    <title>Modification d'un contact</title>
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <h1>Modification d'un contact</h1>
                <!--Contact modification form-->
                <form method="POST" action="{{ route('contact.update', $contact->id) }}">

                    @csrf
                    @method('PUT')

                    <div class="form-group">
                        <label for="nom">Nom du contact</label><br>
                        <input id="nom" type="text" class="form-control" name="nom" value="{{$contact->nom}}">
                    </div>
                    <div class="form-group">
                        <label for="prenom">Prenom du contact</label><br>
                        <input id="prenom" type="text" class="form-control" name="prenom" value="{{$contact->prenom}}">
                    </div>
                    <div class="form-group">
                        <label for="poste">Poste du contact</label><br>
                        <input id="poste" type="text" class="form-control" name="poste" value="{{$contact->poste}}">
                    </div>
                    <div class="form-group">
                        <label for="mail">Mail du contact</label><br>
                        <input id="mail" type="text" class="form-control" name="mail" value="{{$contact->mail}}">
                    </div>
                    <div class="form-group">
                        <label for="telephone">Téléphone du contact</label><br>
                        <input id="numero" type="text" class="form-control" name="numero" value="{{$contact->numero}}">
                    </div>

                    <input id="entreprise_id" type="hidden" name="entreprise_id" value="{{$contact->entreprise_id}}">

                    <input type="submit" class="btn btn-info center-block">
                </form>
            </div>
        </div>
    </div>
</body>
</html>
@endsection