<!DOCTYPE html>
<html>
<head>
	<title>Index des entreprises</title>
</head>
<body>
    <h1>Index des entreprises</h1>

    <a href="{{ route('categories.create') }}" title="Ajouter une catégorie">Ajouter une catégorie</a>

    <ul>
        @foreach($entreprises as $entreprise)
        <li>
            <a href="{{ route('categories.show', $category->id) }}" title="{{ $category->name }}">{{ $category->name }}</a>
        </li>
        @endforeach
    </ul>

</body>
</html>