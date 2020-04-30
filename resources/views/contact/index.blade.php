<!DOCTYPE html>
<html>
<head>
	<title>Affichage des contacts</title>
</head>
<body>
    <h1>Affichage des contacts</h1>
    <br>
    @foreach($contact as $one)
    <ul>
    <!--Il faut trouver comment afficher le nom de l'entreprise-->
        <li>{{ $one->entreprise }}</li>
        <li>{{ $one->nom }} {{ $one->prenom }}</li>
        <li>{{ $one->poste }}</li>
        <li>{{ $one->mail }}</li>
        <li>{{ $one->numero }}</li>
    </ul>
    @endforeach
    <br><br>
</body>
</html>