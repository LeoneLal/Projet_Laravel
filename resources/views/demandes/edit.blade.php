<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<title>Modification d'une demande</title>
</head>
<body>
    <h1>Modification d'une demande</h1>

    <form method="POST" action="{{ route('demandes.update', $demande->id) }}">

        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="type">Type de la demande</label>
            <input
                id="type"
                type="text"
                class="form-control"
                name="type"
                value="{{$demande->type}}"
            />
        </div>

        <div class="form-group">
            <label for="emploi">Emploi visé</label>
            <input
                id="emploi"
                type="text"
                class="form-control"
                name="emploi"
                value="{{$demande->emploi}}"
            />
        </div>
    </form>
</body>
</html>
