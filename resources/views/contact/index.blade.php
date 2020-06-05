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
                <!--List of all user's contacts-->
                @foreach($contact as $one)
                    @if($one->user_id == $user)
                    <div class="list-group">
                        <ul class="list-group-item">
                            <li>{{ $one->nom }} {{ $one->prenom }}</li>
                            <li>{{ $one->poste }} chez {{ $one->entreprise->nom }}</li>
                            <li>{{ $one->mail }}</li>
                            <li>{{ $one->numero }}</li>
                        </ul>
                    </div>
                    @endif
                @endforeach
            </div>
        </div>
    </div>
</body>
</html>
@endsection