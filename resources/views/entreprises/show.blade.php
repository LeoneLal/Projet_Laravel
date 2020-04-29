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
    
    <a href="{{ route('entreprises.update', $entreprises->id) }}" title="Modification">Modifer les informations liées à l'entreprise</a>
    <br>
    
    <a href="/" title="Supprimer l'entreprise">Supprimer l'entreprise</a>
    <br>
    <a href="{{ route('contact.create') }}" title="Ajouter un contact">Ajouter un contact</a>
    <br>
</body>
</html>