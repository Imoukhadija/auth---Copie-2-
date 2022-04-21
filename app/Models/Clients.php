<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Clients extends Model
{
    use HasFactory;
    protected $fillable = ['nom','Nature','CIN_RC_IF',
    'civilite',
    
     'date_naissance',
     'genre',

     'Situation_familiale',
    
     'Ville',
     'code_postale',
     'telephone_fixe_mobile',
    
     'telephone_mobile',
     'email',
    
     'categoriepermi',
    
     'lien_avec_le_souscripteur',
     'CSP',

     'datepermis',
     'numeropermi',
    
     'address'];


    public function  ventes()
    {
        return $this->hasMany(Ventes::class);
    }
}
