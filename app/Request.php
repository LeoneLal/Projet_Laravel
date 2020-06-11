<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Request extends Model
{

    public $timestamps = false;

    protected $table="demandes";

    protected $fillable=[
        'id', 
        'type', 
        'emploi', 
        'envoi_mail', 
        'reception_mail', 
        'envoie_appel', 
        'reception_appel',
        'date_rendez_vous',
        'resultat',
        'entreprise',
        'user_id',
        'created_at'
    ];
    
    public function Company()
    {
        //Link between two models (parent)
        return $this->belongsTo(Entreprise::class, "entreprise");
    }

   
}
