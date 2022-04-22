<?php

namespace App\Http\Controllers;

use App\Models\Vehicules;
 
use Illuminate\Http\Request;
 
use Illuminate\Support\Str;

class VehiculesController extends Controller
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
        return view("managments.vehicules.index")->with([
            "vehicules" => Vehicules::paginate(2)
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
        return view("managments.vehicules.create");
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
            "nom" => "required|unique:vehicules,nom",
            "status" => "required|boolean"
        ]);
        //store data
        $nom = $request->nom;
        Vehicules::create([
            "nom" => $nom,
            "titre2" => Str::slug($nom),
            "status" => $request->status,
            'usage'=> $request-> usage,
             'marque'=> $request-> marque,
             'catégorie'=> $request-> catégorie,
             'version'=> $request-> version,
             'typemine'=> $request-> typemine,
             'immatriculation'=> $request-> immatriculation,
             'registration_date'=> $request->registration_date,
             'expiration_date'=> $request-> expiration_date,
        ]);
        //redirect user
        return redirect()->route("vehicules.index")->with([
            "success" => "Vehicules ajoutée avec succés"
        ]);
        //redirect user
        return redirect()->route("vehicules.index")->with([
            "success" => "Vehicules ajoutée avec succés"
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Vehicules  $vehicule
     * @return \Illuminate\Http\Response
     */
    public function show(Vehicules $vehicule)
    {
        return view('managments.vehicules.show', compact('vehicule'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Vehicules  $vehicule
     * @return \Illuminate\Http\Response
     */
    public function edit(Vehicules $vehicule)
    {
        //
        return view("managments.vehicules.edit",compact('vehicule'))->with([
            "vehicules" => $vehicule
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\vehicules  $vehicule
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Vehicules $vehicule)
    {
        //
        //validation
        $this->validate($request, [
            "nom" => "required|unique:vehicules,nom," . $vehicule->id,//pour chercher si un vehicules ne se duplique pas
            "status" => "required|boolean"
        ]);
        //store data
        $nom = $request->nom;
        $vehicule->update([
            "nom" => $request->  nom,
            'usage'=> $request->   usage,
            'marque'=> $request-> marque,
            'catégorie'=> $request-> catégorie,
            'version'=> $request-> version,
            'typemine'=> $request-> typemine,
            'immatriculation'=> $request-> immatriculation,
            'registration_date'=> $request-> registration_date,
            'expiration_date'=> $request-> expiration_date,
            "titre2" => Str::slug($nom),
            "status" => $request->status,
        ]);
        //redirect user
        return redirect()->route("vehicules.index")->with([
            "success" => "vehicules modifiée avec succés"
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Vehicules  $vehicule
     * @return \Illuminate\Http\Response
     */
    public function destroy(Vehicules $vehicule)
    {
        //
        $vehicule->delete();
        //redirect user
        return redirect()->route("vehicules.index")->with([
            "success" => "Vehicules supprimée avec succés"
        ]);
    }
}
