<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Demande extends Model
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
    
    public function Entreprise()
    {
        //Link between twoo models (Parent)
        return $this->hasMany(Entreprise::class);
    }

   
}
