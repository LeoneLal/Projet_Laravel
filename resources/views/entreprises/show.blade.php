<!DOCTYPE html>
<html>
<head>
	<title>Affichage d'une catégorie</title>
</head>
<body>
    <h1>Affichage d'une catégorie</h1>

    <a href="{{ route('entreprises.index') }}">Retour a l'accueil</a>

    @if(!is_null($entreprises))
        {{ $entreprises->nom }}
    @else
        <p>l'entreprise n'existe pas</p>
    @endif

</body>
</html>