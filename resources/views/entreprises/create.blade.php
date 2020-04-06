<!DOCTYPE html>
<html>
<head>
	<title>Création d'une entreprise</title>
</head>
<body>
    <h1>Création d'une entreprise</h1>

    <form method="POST" action="{{ route('entreprise.store') }}">

        @csrf

        <label for="name">Nom de l'entreprise à créer</label>
        <input id="name" type="text" name="name">

        <input type="submit">
    </form>

</body>
</html>