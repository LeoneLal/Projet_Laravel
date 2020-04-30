<!DOCTYPE html>
<html>
<head>
	<title>Affichage d'une catégorie</title>
</head>
<body>
    <h1>Affichage d'une catégorie</h1>

    <a href="{{ route('entreprises.index') }}">Retour a l'accueil</a>
    <br>
    @if(!is_null($entreprise))
        {{ $entreprise->nom }}
        <br>
        {{$entreprise->adresse}}
        <br>
        {{$entreprise->telephone}}
        <br>
        {{$entreprise->mail}}
    @else
        <p>l'entreprise n'existe pas</p>
    @endif

    <br><br>
    
    <a href="/" title="Modification">Modifer les informations liées à l'entreprise</a>
    <br>
   
    <a href="{{ route('entreprises.delete', $entreprise->id) }}" title="Supprimer l'entreprise">Supprimer l'entreprise</a>
 
    <br>
    <a href="{{ route('contact.create') }}" title="Ajouter un contact">Ajouter un contact</a>
    <br>
</body>
</html>