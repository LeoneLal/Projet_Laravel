@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	  <link href="{{asset ('css/style.css') }}" rel="stylesheet" type="text/css">
    <title>Création d'une demande</title>
</head>
<body>
<div class="container">
      <div class="row justify-content-center">
        <div class="col-md-6">
          <h1>Création d'une demande</h1>
          <div class="form">
          <!--Request creation form-->
            <form method="POST" action="{{ route('demandes.store') }}">
              @csrf
              <div class="form-group">
                <label>Type d'emploi (ex : CDD)</label>
                <input
                  type="text"
                  class="form-control"
                  name="type"
                  placeholder="Ex : Alternance"
                />
              </div>
              <div class="form-group">
                <label>Emploi : </label>
                <input
                  type="text"
                  class="form-control"
                  name="emploi"
                  placeholder="Ex : Développeur full-stack"
                />
              </div>
              <div class="form-check">
                <input
                  type="checkbox"
                  class="form-check-input"
                  name="envoi_mail"
                  value="1"
                />
                <label>Envoi d'un mail</label>
              </div>
              <div class="form-check">
                <input
                  type="checkbox"
                  class="form-check-input"
                  name="reception_mail"
                />
                <label>Réception d'un mail</label>
              </div>
              <div class="form-check">
                <input
                  type="checkbox"
                  class="form-check-input"
                  name="envoie_appel"
                />
                <label>Appel sortant</label>
              </div>
              <div class="form-check">
                <input
                  type="checkbox"
                  class="form-check-input"
                  name="reception_appel"
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
                  />
                </div>
                <label for="resultat">Résultat de la demande : </label>
                <input
                  id="resultat"
                  class="form-control"
                  type="text"
                  name="resultat"
                />
              </div>
              <div class="form-group">
                <label>Entreprise contactée</label>
                <select class="form-control" name="entreprise">
                  @foreach($entreprises as $entreprise)
                  <option value="{{ $entreprise->id }}">{{ $entreprise->nom }}</option>
                  @endforeach
                </select>
              </div>
              <input type="submit" />
            </form>
          </div>
        </div>
      </div>
    </div>
</body>
</html>
@endsection