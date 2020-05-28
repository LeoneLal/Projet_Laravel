<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<title>Api Home</title>
</head>
<body>
    <h1>Votre Token id</h1>


    <!-- Permet de récupérer le token de l'utilisateur  -->
    <ul>
            <li>
                <p>{{$save_token}}</p>  
            </li>
    </ul>
    <h1>Acces à l'API</h1>

    <p>Pour accéder à l'API vous allez devoir accéder à une url via Postaman en ajoutant votre api_token ci dessus</p>
    <p>Avec une requete get, Cela vous donnera un JSON</p>
<br>
<br>

    <h3><span> Url pour avoir toutes les entreprises :</span></h3>
    <br>
    <h4>http://localhost/alterbiere/public/api/entreprisesapi</h4>
    <br>
    <p>Cela devrait donner sur postman quelque chose comme ça:</p>
    <h4>http://localhost/alterbiere/public/api/entreprisesapi?api_token={{$save_token}}</h4>
    <br>
    <br>
    <h3><span> Url pour avoir le détail d'une entrerprises :</span></h3>
    <br>
    <br>
    <h3><span> Url pour avoir le détail d'un utilisateur:</span></h3>



    <br>
    <br>
    <a href="{{ route('home') }}">Retour a l'accueil</a>
    
</body>
</html>