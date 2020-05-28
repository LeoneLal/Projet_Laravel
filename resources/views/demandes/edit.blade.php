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
        <div class="form-check">
            <input
                type="checkbox"
                class="form-check-input"
                name="envoi_mail"
                value="{{$demande->envoi_mail}}"
            />
            <label>Envoi d'un mail : </label>
        </div>
        <div class="form-check">
            <input
                type="checkbox"
                class="form-check-input"
                name="reception_mail"
                value="{{$demande->reception_mail}}"
            />
            <label>Réception d'un mail : </label>
        </div>
        <div class="form-check">
            <input
                type="checkbox"
                class="form-check-input"
                name="envoie_appel"
                value="{{$demande->envoie_appel}}"
            />
            <label>Appel sortant : </label>
        </div>
        <div class="form-check">
            <input
                type="checkbox"
                class="form-check-input"
                name="reception_appel"
                value="{{$demande->reception_appel}}"
            />
            <label>Appel entrant : </label>
        </div>
        <input type="submit">
    </form>
</body>
</html>
