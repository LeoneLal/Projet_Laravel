<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    public $timestamps = false;

    protected $table="entreprises";

    protected $fillable=[
        'id', 
        'nom', 
        'adresse', 
        'telephone', 
        'mail',
        'created_at'
    ];

    

    public function Contact()
    {
        //Link between twoo models (parent)
        return $this->hasMany(contact::class);
    }

    public function entreprise_user()
    {
        //Link between twoo models (child)
        return $this->belongsTo(users::class, "id" );
    }
}
