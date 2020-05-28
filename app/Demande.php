<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Demande extends Model
{
    protected $table="demandes";

    protected $fillable=[
        'id', 
        'user_id',
        'envoi_mail', 
        'reception_mail', 
        'envoie_appel', 
        'reception_appel',
        'date_rendez_vous',
        'resultat',
        'entreprise',
        'created_at'
    ];
  
    public $timestamps = false;
}
