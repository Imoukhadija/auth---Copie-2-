<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehicules extends Model
{
    use HasFactory;
    protected $fillable = ["nom", 'usage','marque','catégorie','version','typemine','immatriculation','registration_date','expiration_date',"status", "titre2"];
//POUR RECHERCHER 
    public function getRouteKeyName()
    {
        return "titre2";
    }
//ON AURA UN OU PLUSIERE VZENTES§
    public function ventes()
    {
        return $this->belongsToMany(Ventes::class);
        
    }
  


     
}
