<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class entreprises extends Model
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
}
