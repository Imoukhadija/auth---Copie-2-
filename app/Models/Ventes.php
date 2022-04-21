<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ventes extends Model
{
    use HasFactory;
    
    protected $primaryKey = 'id';

    protected $fillable = [
        "id", "quantité", "prix_total",
        "total_recu","change", "paiement_type", "paiement_status"
       
    ];

    public function garanties()
    {
        return $this->belongsToMany(Garantie::class);
    }

    public function Vehicules()
    {
        return $this->belongsToMany(Vehicules::class);
    }

    public function client()
    {
        return $this->belongsTo(clients::class);
    }
}
