<!DOCTYPE html>
<html>
<head>
	<title>Affichage des contacts</title>
</head>
<body>
    <h1>Affichage des contacts</h1>

    <a href="{{ route('contact.create') }}" title="Ajouter un contact">Ajouter un contact</a>

    <br>
    @foreach($contact as $one)
    <ul>
    <!--Il faut trouver comment afficher le nom de l'entreprise-->
        <li>{{ $one->entreprise }}, {{ $one->nom }} {{ $one->prenom }}</li>
    </ul>
    @endforeach
    <br><br>
</body>
</html>