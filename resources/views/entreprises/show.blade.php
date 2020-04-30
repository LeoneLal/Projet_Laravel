<!DOCTYPE html>
<html>
<head>
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
    
    <a href="{{ route('entreprises.edit', $entreprises->id) }}" title="Modification">Modifer les informations liées à l'entreprise</a>
    <br>
    
    <a href="/" title="Supprimer l'entreprise">Supprimer l'entreprise</a>
    <br>
    <a href="{{ route('contact.create') }}" title="Ajouter un contact">Ajouter un contact</a>
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
    @endif
    @endforeach
    <br><br>

</body>
</html>