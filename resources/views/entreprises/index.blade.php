<!DOCTYPE html>
<html>
<head>
	<title>Index des entreprises</title>
</head>
<body>
    <h1>Index des entreprises</h1>

    <a href="{{ route('entreprises.create') }}" title="Ajouter une catégorie">Ajouter une catégorie</a>

    <ul>
        @foreach($entreprises as $entreprise)
        <li>
            <a href="{{ route('entreprises.show', $entreprise->id) }}" title="{{ $entreprise->name }}">{{ $entreprise->name }}</a>
        </li>
        @endforeach
    </ul>

</body>
</html>