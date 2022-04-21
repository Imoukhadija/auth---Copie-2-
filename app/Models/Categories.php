<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    use HasFactory;
    protected $fillable = ["titre", "titre2"];
    public function garanties()
    {
        return $this->hasMany(Garantie::class);
    }
    public function getRouteKeyName()
    {
        return "titre2";
    }
}
