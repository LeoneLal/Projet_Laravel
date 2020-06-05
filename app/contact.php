<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
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
    public $timestamps = false;

    public function entreprise()
    {
        # BelongsTo doit prendre en premier paramètre le nom du model A, puis en second paramètre, le nom du champs dans le modèle courant lié avec le model A grâce à sa foreign key
        return $this->belongsTo(Entreprise::class, "entreprise_id");
    }

    public function contact_user()
    {
        # la relation inverse se déclare grace a la méthode "hasMany", qui ne prend cette fois en paramètre, que le nom du model "A"
        return $this->belongsTo(users::class, "id");
    }
}
