<?php

namespace App\Http\Controllers;

use App\Models\Ventes;
use App\Models\Clients;
use App\Models\Vehicules;
use App\Models\Garanties;
use Illuminate\Http\Request;

class VentesController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('auth'); // ou autre middleware si nécessaire
    // }

    public function index()
    {
        $ventes = Ventes::orderBy('created_at', 'DESC')->paginate(10);
        return view('ventes.index', compact('ventes'));
    }

    public function create()
    {
        $clients = Clients::all();
        $vehicules = Vehicules::all();
        $categories = Garanties::with('category')->get()->groupBy('category_id');

        return view('ventes.create', compact('clients', 'vehicules', 'categories'));
    }

    public function store(Request $request)
    {
        // Validation
        $validated = $request->validate([
            'client_id' => 'required|exists:clients,id',
            'vehicule_id' => 'required|array|min:1',
            'vehicule_id.*' => 'exists:vehicules,id',
            'garantie_id' => 'required|array|min:1', // <- garanties obligatoires
            'garantie_id.*' => 'exists:garanties,id',
            'quantite' => 'required|numeric|min:0',
            'prix_total' => 'required|numeric|min:0',
            'total_recu' => 'required|numeric|min:0',
            'change' => 'required|numeric|min:0',
            'paiement_type' => 'required|in:cash,card',
            'paiement_status' => 'required|in:paid,unpaid',
        ]);

        // Création de la vente
        $vente = Vente::create([
            'client_id' => $request->client_id,
            'vehicule_id' => implode(',', $request->vehicule_id), // si vous stockez en string, sinon gérer relation
            'quantite' => $request->quantite,
            'prix_total' => $request->prix_total,
            'total_recu' => $request->total_recu,
            'change' => $request->change,
            'paiement_type' => $request->paiement_type,
            'paiement_status' => $request->paiement_status,
        ]);

        // Attacher les garanties sélectionnées
        $vente->garanties()->attach($request->garantie_id);

        return redirect()->route('ventes.index')->with('success', 'Vente ajoutée avec succès !');
    }

    public function show(Ventes $ventes)
    {
        return view('ventes.show', compact('ventes'));
    }

    public function edit($id)
    {
        $vente = Ventes::findOrFail($id);
        $clients = Clients::all();
        $vehicules = Vehicules::all();
        $categories = Garanties::with('category')->get()->groupBy('category_id');

        return view('ventes.edit', compact('vente', 'clients', 'vehicules', 'categories'));
    }

    public function update(Request $request, $id)
    {
        $vente = Ventes::findOrFail($id);

        $request->validate([
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

        $vente->update($request->only([
            'client_id',
            'quantite',
            'prix_total',
            'total_recu',
            'change',
            'paiement_type',
            'paiement_status'
        ]));

        $vente->garanties()->sync($request->garantie_id);
        $vente->vehicules()->sync($request->vehicule_id);

        return redirect()->route('ventes.index')->with('success', 'Vente mise à jour avec succès !');
    }

    public function destroy($id)
    {
        $vente = Ventes::findOrFail($id);
        $vente->garanties()->detach();
        $vente->vehicules()->detach();
        $vente->delete();

        return redirect()->back()->with('success', 'Paiement supprimé avec succès !');
    }
}
