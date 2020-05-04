<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Demande extends Model
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
    public function demandes_user()
    {
        # la relation inverse se déclare grace a la méthode "hasMany", qui ne prend cette fois en paramètre, que le nom du model "A"
        return $this->hasMany(users::class);
    }
    


    public $timestamps = false;
}
