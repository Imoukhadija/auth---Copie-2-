<?php

namespace App\Http\Controllers;

use App\Models\Clients;
use Illuminate\Http\Request;
 
use Illuminate\Support\Str;

//use Illuminate\Support\Facades\DB;


class ClientsController extends Controller
{
    public function __construct()
    {
        return view('auth.costumer.login');    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        return view("managments.clients.index")->with([
            "clients" =>    Clients::paginate(2)
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
        return view("managments.clients.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        //validation
        $this->validate($request, [
            "nom" => "required|min:3"
        ]);
        //store data
        Clients::create([
            "nom" => $request->nom,
            "Nature"=>$request->Nature,
            'CIN_RC_IF'=>$request->CIN_RC_IF,
            'civilite'=>$request->civilite,
           
            'date_naissance'=>$request->date_naissance,
            'genre'=>$request->genre,
            'Situation_familiale'=>$request->Situation_familiale,
           
            'Ville'=>$request->Ville,
           
            'code_postale'=>$request->code_postale,
            'telephone_fixe_mobile'=>$request->telephone_fixe_mobile,
            'telephone_mobile'=>$request->telephone_mobile,
            'email'=>$request->email,
            'categoriepermi'=>$request->categoriepermi,
            'lien_avec_le_souscripteur'=>$request->lien_avec_le_souscripteur,
            'CSP'=>$request->CSP,
            'datepermis'=>$request->datepermis,
            'numeropermi'=>$request->numeropermi,
        
     
            "address" => $request->address
        ]);
        //redirect user
        return redirect()->route("clients.index")->with([
            "success" => "client ajouté avec succés"
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Clients  $Clients
     * @return \Illuminate\Http\Response
     */
    public function show(Clients $client)
    {
        
        return view('managments.clients.show', compact('client'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Clients  $Clients
     * @return \Illuminate\Http\Response
     */
    public function edit(Clients $client)
    {
        //
        return view("managments.clients.edit",compact('client') )->with([
           // "clients" => Clients::findOrFail($client)
            "clients" => $client
            
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Clientss  $Clientss
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        //validation
        $this->validate($request, [
            "nom" => "required|min:3"
        ]);
        //update data
        $Client = Clients::findOrFail($id);
        $Client->update([
            "nom" => $request->nom,
            "Nature"=>$request->Nature,
            'CIN_RC_IF'=>$request->CIN_RC_IF,
            'civilite'=>$request->civilite,
           
            'date_naissance'=>$request->date_naissance,
            'genre'=>$request->genre,
            'Situation_familiale'=>$request->Situation_familiale,
           
            'Ville'=>$request->Ville,
           
            'code_postale'=>$request->code_postale,
            'telephone_fixe_mobile'=>$request->telephone_fixe_mobile,
            'telephone_mobile'=>$request->telephone_mobile,
            'email'=>$request->email,
            'categoriepermi'=>$request->categoriepermi,
            'lien_avec_le_souscripteur'=>$request->lien_avec_le_souscripteur,
            'CSP'=>$request->CSP,
            'datepermis'=>$request->datepermis,
            'numeropermi'=>$request->numeropermi,
            "address" => $request->address
        ]);
        //redirect user
        return redirect()->route("clients.index")->with([
            "success" => "client modifié avec succés"
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Clients  $Clients
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $Client = Clients::findOrFail($id);
        $Client->delete();
        //redirect user
        return redirect()->route("clients.index")->with([
            "success" => "client supprimé avec succés"
        ]);
    }
}
