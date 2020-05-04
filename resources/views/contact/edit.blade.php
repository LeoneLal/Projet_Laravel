<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<title>Modification d'un contact</title>
</head>
<body>
    <h1>Modification d'un contact</h1>

    <form method="POST" action="{{ route('contact.update', $contact->id) }}">

        @csrf
        @method('PUT')

        <label for="nom">Nom du contact</label><br>
        <input id="nom" type="text" name="nom" value="{{$contact->nom}}">
        <br><br>
        <label for="prenom">Prenom du contact</label><br>
        <input id="prenom" type="text" name="prenom" value="{{$contact->prenom}}">
        <br><br>
        <label for="poste">Poste du contact</label><br>
        <input id="poste" type="text" name="poste" value="{{$contact->poste}}">
        <br><br>
        <label for="mail">Mail du contact</label><br>
        <input id="mail" type="text" name="mail" value="{{$contact->mail}}">
        <br><br>
        <label for="telephone">Téléphone du contact</label><br>
        <input id="numero" type="text" name="numero" value="{{$contact->numero}}">

        <input id="entreprise_id" type="hidden" name="entreprise_id" value="{{$contact->entreprise_id}}">
        <br><br>
        <input type="submit">
    </form>
</body>
</html>
