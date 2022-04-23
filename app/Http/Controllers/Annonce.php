<?php

namespace App\Http\Controllers;

use App\Models\Annonce;
 
use Illuminate\Http\Request;
 
use Illuminate\Support\Str;

class AnnonceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    //impossible de voir categorie si tu n est pas connecter auth
    public function __construct()
    {
        return view('auth.admin.login');    }
    public function index()
    {
        return view("managments.Annonce.index")->with([
            "Annonce" => Annonce::paginate(2)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("managments.Annonce.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         //validation request
         $this->validate($request, [
            "titre" => "required|min:4"
        ]);
        //store data Annonce
        $titre = $request->titre;
        Annonce::create([
            "titre" => $titre,
            "titre2" => Str::slug($titre)
        ]);
        //redirect  vers user
        return redirect()->route("Annonce.index")->with([
            "success" => "catégorie ajoutée avec succés"
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Annonce  $Annonce
     * @return \Illuminate\Http\Response
     */
    public function show(Annonce $category)
    {
         
        
        return view("managments.Annonce.show",compact('category'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Annonce  $Annonce
     * @return \Illuminate\Http\Response
     */
    public function edit(Annonce $category)
    {
        return view("managments.Annonce.edit")->with([
            "category" => $category
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\Request  $request
     * @param  \App\Models\Annonce  $Annonce
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Annonce $category)
    {
        //validation
        $this->validate($request, [
            "titre" => "required|min:4"
        ]);
        //store data
        $titre = $request->titre;
        $category->update([
            "titre" => $titre,
            "titre2" => Str::slug($titre)
        ]);
        //redirect user
        return redirect()->route("Annonce.index")->with([
            "success" => "catégorie modifiéavec succés"
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Annonce  $Annonce
     * @return \Illuminate\Http\Response
     */
    public function destroy(Annonce $category)
    {
        $category->delete();
        //redirect user
        return redirect()->route("Annonce.index")->with([
            "success" => "catégorie supprimée avec succés"
        ]);
    }
}
