<!DOCTYPE html>
<html>
<head>
	<title>Modification d'une entreprise</title>
</head>
<body>
    <h1>Modification d'une entreprise</h1>

    <form method="POST" action="{{ route('entreprises.store') }}">

        @csrf

        <label for="nom">Nom de l'entreprise</label><br>
        {{ $entreprises->nom }}
        <input id="nom" type="text" name="nom">
        <br><br>
        <label for="adresse">Adresse de l'entreprise</label><br>
        {{$entreprises->adresse}}
        <input id="adresse" type="text" name="adresse">
        <br><br>
        <label for="telephone">Téléphone de l'entreprise</label><br>
        {{$entreprises->telephone}}
        <input id="telephone" type="text" name="telephone">
        <br><br>
        <label for="mail">Mail de l'entreprise</label><br>
        {{$entreprises->mail}}
        <input id="mail" type="text" name="mail">


        <input type="submit">
    </form>

</body>
</html>
