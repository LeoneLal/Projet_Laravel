<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<title>Index des demandes</title>
</head>
<body>
    <h1>Index des demandes</h1>

    <a href="{{ route('demandes.create') }}" title="Ajouter une catégorie">Ajouter une demande</a>

    <ul>
        @foreach($demandes as $demande)
        <li>
            <a href="{{ route('demandes.show', $demande->id) }}" title="{{ $demande->entreprise }}">{{ $demande->entreprise }}</a>
        </li>
        @endforeach
    </ul>

</body>
</html>