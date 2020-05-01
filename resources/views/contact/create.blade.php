<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<title>Création d'un contact</title>
</head>
<body>
    <h1>Création d'un contact</h1>

    <form method="POST" action="{{ route('contact.store') }}">

        @csrf

        <label for="nom">Nom du contact</label><br>
        <input id="nom" type="text" name="nom">
        <br><br>
        <label for="nom">Prénom du contact</label><br>
        <input id="prenom" type="text" name="prenom">
        <br><br>
        <label for="Poste">Poste du contact</label><br>
        <input id="Poste" type="text" name="poste">
        <br><br>
        <label for="mail">Mail du contact</label><br>
        <input id="mail" type="text" name="mail">
        <br><br>
        <label for="telephone">Téléphone du contact</label><br>
        <input id="numero" type="text" name="numero">
        <input type="hidden" name="entreprise_id" value="{{ $entrepriseId }}">
        

        <input type="submit">
    </form>

</body>
</html>