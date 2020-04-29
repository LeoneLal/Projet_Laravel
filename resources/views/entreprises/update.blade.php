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
        
        <input id="nom" type="text" name="nom" value="{{ $entreprises->nom }}">
        <br><br>
        <label for="adresse">Adresse de l'entreprise</label><br>
        
        <input id="adresse" type="text" name="adresse" value="{{ $entreprises->adresse }}">
        <br><br>
        <label for="telephone">Téléphone de l'entreprise</label><br>
        
        <input id="telephone" type="text" name="telephone" value="{{ $entreprises->telephone }}">
        <br><br>
        <label for="mail">Mail de l'entreprise</label><br>
        
        <input id="mail" type="text" name="mail" value="{{ $entreprises->mail }}">


        <input type="submit">
    </form>

</body>
</html>
