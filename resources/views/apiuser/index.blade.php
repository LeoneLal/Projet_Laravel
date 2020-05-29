<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="css/api.css" rel="stylesheet" type="text/css">
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

    <p>Pour accéder à l'API vous allez devoir accéder à une url via Postman en ajoutant votre api_token ci dessus</p>
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

    <ul>
        @foreach($entreprises as $entreprise)
        
            <li>
            <p>Nom de l'entreprise: {{ $entreprise->nom }}/ Id: {{$entreprise->id}}</p>
            </li>
            
        @endforeach
    </ul>
<p>Choissisez l'entreprise que vous voulez en utilisant son id </p>
<p>Url: </p>
<h4>http://localhost/alterbiere/public/api/entreprisesapi/id/detail</h4>
<p>Exemple: Pour l'entreprise Devenir Chiant </p>
<h4>http://localhost/alterbiere/public/api/entreprisesapi/9/detail</h4>
<p>Il ne vous reste plus qu'à rajouter votre token et on obtient cette url : </p>
<h4>http://localhost/alterbiere/public/api/entreprisesapi/9/detail?api_token={{$save_token}}</h4>

    <br>
    <br>
    <br>
    <br>
    <h3><span> Url pour avoir le détail de votre utilisateur:</span></h3>
    <p>Votre utilisateur</p>
    <ul>
       
            <li>
            <p> Votre Id: {{$id_user}}</p>
            </li>  
      
    </ul>
    <p>Affiche votre utilisateur: </p>
    <h4>http://localhost/alterbiere/public/api/entreprisesapi/{{$id_user}}/user?api_token={{$save_token}}</h4>


    <br>
    <br>
   
    <div class="bouton">
  <p>
   <a href="{{ route('home') }}">Retour a l'accueil</a>
 </p>
    </div>


</body>
</html>