<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<title>Création d'une demande</title>
</head>
<body>
    <h1>Création d'une demande</h1>

    <form method="POST" action="{{ route('demandes.store') }}">

        @csrf

        <p>Envoi d'un mail</p>
        <input type="radio" id="yes" name="envoi_mail" value="yes">
        <label for="yes">Oui</label><br>
        <input type="radio" id="no" name="envoi_mail" value="no">
        <label for="no">Non</label><br>

        <p>Réception d'un mail</p>
        <input type="radio" id="yes" name="reception_mail" value="yes">
        <label for="yes">Oui</label><br>
        <input type="radio" id="no" name="reception_mail" value="no">
        <label for="no">Non</label><br>

        <p>Appel sortant</p>
        <input type="radio" id="yes" name="envoie_appel" value="yes">
        <label for="yes">Oui</label><br>
        <input type="radio" id="no" name="envoie_appel" value="no">
        <label for="no">Non</label><br>

        <p>Appel entrant</p>
        <input type="radio" id="yes" name="reception_appel" value="yes">
        <label for="yes">Oui</label><br>
        <input type="radio" id="no" name="reception_appel" value="no">
        <label for="no">Non</label><br>

        <!--

        <label for="envoi_mail">Envoi d'un mail</label><br>
        <input id="envoi_mail" type="text" name="envoi_mail">
        <br><br>
        <label for="reception_mail">Date de réception d'un mail</label><br>
        <input id="reception_mail" type="text" name="reception_mail">
        <br><br>
        <label for="envoie_appel">Date d'appel sortant</label><br>
        <input id="envoie_appel" type="text" name="envoie_appel">
        <br><br>
        <label for="reception_appel">Date d'appel entrant</label><br>
        <input id="reception_appel" type="text" name="reception_appel">
        <br><br>

        -->

        <label for="date_rendez_vous">Date d'un rendez-vous</label><br>
        <input id="date_rendez_vous" type="date" name="date_rendez_vous">
        <br><br>
        <label for="resultat">Résultat de la demande</label><br>
        <input id="resultat" type="text" name="resultat">
        <br><br>

        <p>Entreprise contactée</p>
        <input list="entreprise" type="text" name="entreprise">
        <datalist id="entreprise">
            <option value="Internet Explorer">
            <option value="Firefox">
            <option value="Chrome">
            <option value="Opera">
            <option value="Safari">
        </datalist>
        <br><br>

        <!--

        <label for="entreprise">Entreprise contactée</label><br>
        <input id="entreprise" type="text" name="entreprise">
        <br><br>

        -->

        <label for="created_at">Date de la demande à créer</label><br>
        <input id="created_at" type="date" name="created_at">
        <br><br>

        <input type="submit">
    </form>

</body>
</html>