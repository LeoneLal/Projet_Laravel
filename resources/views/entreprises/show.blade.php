<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

	<title>Affichage d'une catégorie</title>
</head>
<body>
    <h1>Affichage d'une catégorie</h1>

    <a href="{{ route('entreprises.index') }}">Retour a l'accueil</a>
    <br>
    @if(!is_null($entreprises))
        {{ $entreprises->nom }}
        <br>
        {{$entreprises->adresse}}
        <br>
        {{$entreprises->telephone}}
        <br>
        {{$entreprises->mail}}
    @else
        <p>l'entreprise n'existe pas</p>
    @endif

    <br><br>
    <a href="{{ route('entreprises.edit', $entreprises->id) }}" title="Modification"><button type="button" class="btn btn-info">Modifier l'entreprise</button></a>
    <a href="/" title="Supprimer l'entreprise"><button type="button" class="btn btn-danger">Supprimer l'entreprise</button></a>
    <a href="{{ route('contact.create', $entreprises->id) }}" title="Ajouter un contact"><button type="button" class="btn btn-success">Ajouter un contact</button></a>
    <hr>
    <br>
    <h2>Affichage des contacts</h2>
    <p>Les contacts liés à l'entreprise apparaitrons ici !</p>
    @foreach($contact as $one)
    @if($one->entreprise == $entreprises->id)
    <ul>
        <li>{{ $one->nom }} {{ $one->prenom }}</li>
        <li>{{ $one->poste }}</li>
        <li>{{ $one->mail }}</li>
        <li>{{ $one->numero }}</li>
    </ul>
    <a href="{{ route('entreprises.edit', $one->id) }}" title="Modification"><button type="button" class="btn btn-info">Modifier le contact</button></a>
    <a href="/" title="Supprimer le contact"><button type="button" class="btn btn-danger">Supprimer le contact</button></a>
    @endif
    @endforeach
    <br><br>

</body>
</html>