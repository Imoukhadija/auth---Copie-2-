<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Garantie extends Model
{
    use HasFactory;
    protected $fillable = ["titre", "titre2", "description", "image", "prix", "categories_id"];


    public function getRouteKeyName()
    {
        return "titre2";
    }
    
    public function category()
    {
        return $this->belongsTo(Categories::class,'categories_id');
    }

    public function ventes()
    {
        return $this->belongsToMany(Ventes::class);
    }
}
