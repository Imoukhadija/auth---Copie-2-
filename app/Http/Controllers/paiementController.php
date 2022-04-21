<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categories;
use App\Models\Clients;
use App\Models\Vehicules;

class paiementController extends Controller
{
    public function index()
    {
        return view("paiements.index")->with([
            "vehicules" => Vehicules::all(),
            "categories" => Categories::all(),
            
            "clients" => Clients::all()
        ]);
    }
}
