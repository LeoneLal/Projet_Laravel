<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Demandes extends Model
{
    protected $table="demandes";

    protected $fillable=[
        'id', 
        'envoi_mail', 
        'reception_mail', 
        'envoie_appel', 
        'reception_appel',
        'date_rendez_vous',
        'resultat',
        'entreprise',
        'created_at'
    ];
}
