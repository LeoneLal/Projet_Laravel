<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<title>Affichage d'une catégorie</title>
</head>
<body>
    <h1>Affichage d'une catégorie</h1>

    <a href="{{ route('demandes.index') }}">Retour a l'accueil</a>
    @if(!is_null($demande))
        <div class="statut">
            <h4>Statut mails </h4>
            @if($demande->envoi_mail == 1 && $demande->reception_mail == 1)
                <p>Communication par mail établie des deux côtés</p>
            @elseif($demande->envoi_mail == 1)
                <p>Mail envoyé, en attente de réponse...</p>
            @endif
        </div>
        
        <div class="statut">
            <h4>Statut appel </h4>
            @if($demande->envoie_appel == 1 && $demande->reception_appel == 1)
                <p>Mise en contact téléphonique avec l'entreprise</p>
            @elseif($demande->envoie_appel == 1)
                <p>Entreprise appelée, en attente de réponse...</p>
            @endif
        </div>



        {{$demande->date_rendez_vous}}
        <br>
        {{$demande->resultat}}
        <br>
        {{$demande->entreprise}}
        <br>
        {{$demande->created_at}}
    @else
        <p>la demande n'existe pas</p>
    @endif  
    <a href="{{ route('demandes.edit', $demande->id) }}" title="Modification"><button type="button" class="btn btn-info">Modifier la demande</button></a>
    <a href="{{ route('demandes.delete', $demande->id) }}" title="Supprimer la demande"><button type="button" class="btn btn-danger">Supprimer la demande</button></a>
    
</body>
</html>
