@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="css/style.css" rel="stylesheet" type="text/css">
    <title>API Home</title>
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <h1>Index API</h1>
                
                <h2>Votre Token ID</h2>
                <!-- Permet de récupérer le token de l'utilisateur  -->
                <p>{{$save_token}}</p>
                
                <h2>Accès à l'API</h2>
                <p>Pour accéder à l'API vous allez devoir accéder à une url via Postman en ajoutant votre api_token ci-dessus</p>
                <p>Avec une requête GET, cela vous donnera un .JSON</p>
                <p>URL pour avoir toutes les entreprises : </p>
                <h4>http://localhost/alterbiere/public/api/entreprisesapi</h4>
                <p>Cela devrait donner sur postman quelque chose de similaire :</p>
                <h4>http://localhost/alterbiere/public/api/entreprisesapi?api_token={{$save_token}}</h4>
                <p>URL pour avoir le détail d'une entrerprise : </p>
                <div class="col-md-6">
                    <ul class="list-group">
                    @foreach($entreprises as $entreprise)
                        <li class="list-group-item">
                            <p>Nom de l'entreprise : {{ $entreprise->nom }}</p>
                            <p>ID : {{$entreprise->id}}</p>
                        </li>
                    @endforeach
                    </ul>
                </div>
                <p>Choissisez l'entreprise que vous voulez en utilisant son ID</p>
                <p>URL : </p>
                <h4>http://localhost/alterbiere/public/api/entreprisesapi/id/detail</h4>
                <p>Exemple : Pour l'entreprise Devenir Chiant </p>
                <h4>http://localhost/alterbiere/public/api/entreprisesapi/9/detail</h4>
                <p>Il ne vous reste plus qu'à rajouter votre token et on obtient cette URL : </p>
                <h4>http://localhost/alterbiere/public/api/entreprisesapi/9/detail?api_token={{$save_token}}</h4>
                <p>URL pour avoir le détail de votre utilisateur : </p>
                <p>Votre utilisateur</p>
                <ul>
                    <li>
                        <p> Votre ID : {{$id_user}}</p>
                    </li>    
                </ul>
                <p>Affiche votre utilisateur : </p>
                <h4>http://localhost/alterbiere/public/api/entreprisesapi/{{$id_user}}/user?api_token={{$save_token}}</h4>
            </div>
        </div>
    </div>
</body>
</html>
@endsection