<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<title>Modification d'une entreprise</title>
</head>
<body>
    <h1>Modification d'une entreprise</h1>

    <form method="POST" action="{{ route('entreprises.update', $entreprise->id) }}">

        @csrf
        @method('PUT')

        <label for="nom">Nom de l'entreprise</label><br>
        <input id="nom" type="text" name="nom" value="{{$entreprise->nom}}">
        <br><br>
        <label for="adresse">Adresse de l'entreprise</label><br>
        <input id="adresse" type="text" name="adresse" value="{{$entreprise->adresse}}">
        <br><br>
        <label for="telephone">Téléphone de l'entreprise</label><br>
        <input id="telephone" type="text" name="telephone" value="{{$entreprise->telephone}}">
        <br><br>
        <label for="mail">Mail de l'entreprise</label><br>
        <input id="mail" type="text" name="mail" value="{{$entreprise->mail}}">
        <br><br>
        <input type="submit">
    </form>
</body>
</html>
