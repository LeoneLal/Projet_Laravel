<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    public $timestamps = false;
    
    protected $table="contact";

    protected $fillable=[
        'id', 
        'nom', 
        'prenom', 
        'poste', 
        'mail',
        'numero',
        'entreprise_id',
        'created_at'
    ];
    

    public function entreprise()
    {
       //Link between twoo models (Child)
        return $this->belongsTo(Entreprise::class, "entreprise_id");
    }

    public function contact_user()
    {
      //Link between twoo models (Child)
        return $this->belongsTo(users::class, "id");
    }
}
