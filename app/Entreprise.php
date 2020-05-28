<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Entreprise extends Model
{
    protected $table="entreprises";

    protected $fillable=[
        'id', 
        'nom', 
        'adresse', 
        'telephone', 
        'mail',
        'created_at'
    ];

    public $timestamps = false;

    public function contact()
    {
        # la relation inverse se déclare grace a la méthode "hasMany", qui ne prend cette fois en paramètre, que le nom du model "A"
        return $this->hasMany(contact::class);
    }

    public function entreprise_user()
    {
        # la relation inverse se déclare grace a la méthode "hasMany", qui ne prend cette fois en paramètre, que le nom du model "A"
        return $this->belongsTo(users::class, "id" );
    }
}
