<!DOCTYPE html>
<html>
<head>
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
        <label for="adresse">Adresse du contact</label><br>
        <input id="adresse" type="text" name="adresse" value="{{$contact->adresse}}">
        <br><br>
        <label for="telephone">Téléphone du contact</label><br>
        <input id="numero" type="text" name="numero" value="{{$contact->numero}}">
        <br><br>
        <label for="mail">Mail du contact</label><br>
        <input id="mail" type="text" name="mail" value="{{$contact->mail}}">
        <br><br>
        <input type="submit">
    </form>
</body>
</html>
