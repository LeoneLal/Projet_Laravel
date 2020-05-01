<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<title>Index des entreprises</title>
</head>
<body>
    <h1>Index des entreprises</h1>

    <a href="{{ route('entreprises.create') }}" title="Ajouter une catégorie">Ajouter une entreprise</a>

    <ul>
        @foreach($entreprises as $entreprise)
        <li>
            <a href="{{ route('entreprises.show', $entreprise->id) }}" title="{{ $entreprise->nom }}">{{ $entreprise->nom }}</a>
        </li>
        @endforeach
    </ul>

</body>
</html>