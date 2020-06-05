@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<title>Modification d'une demande</title>
</head>
<body>
    <!--Request modification form-->
    <form method="POST" action="{{ route('demandes.update', $demande->id) }}">

        @csrf
        @method('PUT')

        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <h1>Modification d'une demande</h1>
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
                            <?php if($demande->envoi_mail==true) echo 'checked'; ?>
                        />
                        <label>Envoi d'un mail</label>
                    </div>
                    <div class="form-check">
                        <input
                            type="checkbox"
                            class="form-check-input"
                            name="reception_mail"
                            <?php if($demande->reception_mail==true) echo 'checked'; ?>
                        />
                        <label>Réception d'un mail</label>
                    </div>
                    <div class="form-check">
                        <input
                            type="checkbox"
                            class="form-check-input"
                            name="envoie_appel"
                            <?php if($demande->envoie_appel==true) echo 'checked'; ?>
                        />
                        <label>Appel sortant</label>
                    </div>
                    <div class="form-check">
                        <input
                            type="checkbox"
                            class="form-check-input"
                            name="reception_appel"
                            <?php if($demande->reception_appel==true) echo 'checked'; ?>
                        />
                        <label>Appel entrant</label>
                    </div>
                    <div class="form-group">
                        <div class="form-group">
                            <label for="date_rendez_vous">Date d'un rendez-vous : </label>
                            <input
                                id="date_rendez_vous"
                                class="form-control"
                                type="date"
                                name="date_rendez_vous"
                                value="{{$demande->date_rendez_vous}}"
                            />
                        </div>
                        <label for="resultat">Résultat de la demande : </label>
                        <input
                            id="resultat"
                            class="form-control"
                            type="text"
                            name="resultat"
                            value="{{$demande->resultat}}"
                        />
                    </div>
                    <div class="form-group">
                        <label>Entreprise contactée : </label>
                        <input type="text" disabled="disabled" value="{{ $entreprise->nom }}"/>
                        <input id="entreprise_id" type="hidden" name="entreprise" value="{{ $entreprise->id }}">
                    </div>
                    <input type="submit" />
                </div>
            </div>
        </div>
    </form>
</body>
</html>
@endsection