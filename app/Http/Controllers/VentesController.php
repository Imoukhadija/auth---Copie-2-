<?php

namespace App\Http\Controllers;

use App\Models\Ventes;
use App\Models\Clients;
use Illuminate\Http\Request;

class VentesController extends Controller
{
    public function __construct()
    {
        return view('auth.admin.login');    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $ventes = Ventes ::orderBy("created_at", "DESC")->paginate(2);
        return view("ventes.index")->with([
            "ventes" => $ventes 
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //validation
        $this->validate($request, [
            "vehicule_id" => "required",
            "garantie_id" => "required",
            "client_id" => "required",
            "quantite" => "required|numeric",
            "prix_total" => "required|numeric",
            "total_recu" => "required|numeric",
            "change" => "required|numeric",
            "paiement_type" => "required",
            "paiement_status" => "required",
           

        ]);
        //store data
        $vente = new Ventes();
        $vente->client_id = $request->client_id;
        $vente->quantite = $request->quantite;
        $vente->prix_total = $request->prix_total;
        $vente->total_recu = $request->total_recu;
        $vente->change = $request->change;
        $vente->paiement_status = $request->paiement_status;
        $vente->paiement_type = $request->paiement_type;
        $vente->save();
        $vente->garanties()->sync($request->garantie_id);
        $vente->vehicules()->sync($request->vehicule_id);
        //redirect user
        return redirect()->back()->with([
            "success" => "Paiement effectué avec succés"
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ventes $ventes 
     * @return \Illuminate\Http\Response
     */
    public function show(  Ventes $ventes )
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Ventes   $ventes 
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ventes  $ventes 
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Ventes   $Ventes 
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //get vente to update
        $vente = Ventes::findOrFail($id);
        //delete ventes
        $vente->delete();
        //redirect user
        return redirect()->back()->with([
            "success" => "Paiement supprimé avec succés"
        ]);
    }
}
