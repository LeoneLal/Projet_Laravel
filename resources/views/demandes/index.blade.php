@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<title>Index des demandes</title>
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <h1>Index des demandes</h1>
                <a href="{{ route('demandes.create') }}" title="Ajouter une catégorie"><p style="font-size : 20px; text-align : center">Ajouter une demande</p></a>
                <!--List of all user's requests-->
                <ul class="list-group">
                    @foreach($demandes as $demande)
                        @if($demande->user_id == \Auth::user()->id)
                        <li class="list-group-item"><a href="{{ route('demandes.show', $demande->id) }}" >{{ $demande->type }} : {{ $demande->emploi }}</a></li>
                        @endif
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</body>
</html>
@endsection