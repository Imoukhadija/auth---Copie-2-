<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categories;
use App\Models\Clients;
use App\Models\Vehicules;

class paiementController extends Controller
{
    public function __construct()
    {
        // Constructor - add middleware here if needed
    }
    public function index()
    {
        return view("paiements.index")->with([
            "vehicules" => Vehicules::all(),
            "categories" => Categories::with('garanties')->get(),
            "clients" => Clients::all()
        ]);
    }

    public function store(Request $request)
    {
        // Validate the request
        $validated = $request->validate([
            'client_id' => 'required|exists:clients,id',
            'vehicule_id' => 'required|array|min:1',
            'vehicule_id.*' => 'exists:vehicules,id',
            'garantie_id' => 'required|array|min:1',
            'garantie_id.*' => 'exists:garanties,id',
            'quantite' => 'required|numeric|min:0',
            'prix_total' => 'required|numeric|min:0',
            'total_recu' => 'required|numeric|min:0',
            'change' => 'required|numeric|min:0',
            'paiement_type' => 'required|in:cash,card',
            'paiement_status' => 'required|in:paid,unpaid',
        ]);

        // Create a new sale record
        $vente = new \App\Models\Ventes();
        $vente->client_id = $request->client_id;
        $vente->quantite = $request->quantite;
        $vente->prix_total = $request->prix_total;
        $vente->total_recu = $request->total_recu;
        $vente->change = $request->change;
        $vente->paiement_type = $request->paiement_type;
        $vente->paiement_status = $request->paiement_status;
        $vente->save();

        // Attach selected vehicles and guarantees
        $vente->vehicules()->attach($request->vehicule_id);
        $vente->garanties()->attach($request->garantie_id);

        return redirect()->route('paiements.index')
            ->with('success', 'Paiement enregistré avec succès!');
    }
}
