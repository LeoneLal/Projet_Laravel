@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="{{asset ('css/style.css') }}" rel="stylesheet" type="text/css">
    <title>Modification d'une entreprise</title>
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <h1>Modification d'une entreprise</h1>
                <!--Company modification form-->
                <form method="POST" action="{{ route('companies.update', $company->id) }}">

                    @csrf
                    @method('PUT')

                    <div class="form-group">
                        <label for="nom">Nom de l'entreprise</label><br>
                        <input id="nom" type="text" class="form-control" name="nom" value="{{$company->nom}}">
                    </div>
                    <div class="form-group">
                        <label for="adresse">Adresse de l'entreprise</label><br>
                        <input id="adresse" type="text" class="form-control" name="adresse" value="{{$company->adresse}}">
                    </div>
                    <div class="form-group">
                        <label for="telephone">Téléphone de l'entreprise</label><br>
                        <input id="telephone" type="text" class="form-control" name="telephone" value="{{$company->telephone}}">
                    </div>
                    <div class="form-group">
                        <label for="mail">Mail de l'entreprise</label><br>
                        <input id="mail" type="text" class="form-control" name="mail" value="{{$company->mail}}">
                    </div>
                    <input type="submit" class="btn btn-info center-block">
                </form>
            </div>
        </div>
    </div>
</body>
</html>
@endsection