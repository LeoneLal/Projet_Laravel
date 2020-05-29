@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<title>Index des entreprises</title>
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <h1>Index des entreprises</h1>
                <a href="{{ route('entreprises.create') }}" title="Ajouter une catégorie"><p style="font-size : 20px; text-align : center">Ajouter une entreprise</p></a>
                <ul class="list-group">
                    @foreach($entreprises as $entreprise)
                        @if($entreprise->user_id == \Auth::user()->id)
                        <li class="list-group-item">
                            <a href="{{ route('entreprises.show', $entreprise->id) }}" title="{{ $entreprise->nom }}">{{ $entreprise->nom }}</a>
                        </li>
                        @endif
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</body>
</html>
@endsection