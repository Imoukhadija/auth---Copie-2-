<?php

namespace App\Http\Controllers;

use App\Models\Annonces;
 
use Illuminate\Http\Request;
 
use Illuminate\Support\Str;

class AnnoncesController extends Controller
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
        return view("managments.annonces.index")->with([
            "annonces" => Annonces::paginate(2)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("managments.annonces.create");
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
            "actor" => "required|min:4"
        ]);
        //store data annonces
        $actor = $request->actor;
        $anonce = $request->anonce;
        $dates = $request->dates;
        Annonces::create([
            "actor" => $actor,
            "actor2" => Str::slug($actor),
            "anonce" => $anonce,
            "dates" => $dates,

        ]);
        //redirect  vers user
        return redirect()->route("annonces.index")->with([
            "success" => "annonce ajoutée avec succés"
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\annonces  $annonces
     * @return \Illuminate\Http\Response
     */
    public function show(Annonces $annonce)
    {
         
        
        return view("managments.annonces.show",compact('annonce'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\annonces  $annonces
     * @return \Illuminate\Http\Response
     */
    public function edit(Annonces $annonce)
    {
        return view("managments.annonces.edit")->with([
            "annonce" => $annonce
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\Request  $request
     * @param  \App\Models\annonces  $annonces
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Annonces $annonce)
    {
        //validation
        $this->validate($request, [
            "actor" => "required|min:4"
        ]);
        //store data
        $actor = $request->actor;
        $actor = $request->actor;
        $anonce = $request->anonce;
        $dates = $request->dates;
        $annonce->update([
            "actor" => $actor,
            "actor2" => Str::slug($actor),
            "anonce" => $anonce,
            "dates" => $dates,
        ]);
        //redirect user
        return redirect()->route("annonces.index")->with([
            "success" => "annonce modifiéavec succés"
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\annonces  $annonces
     * @return \Illuminate\Http\Response
     */
    public function destroy(Annonces $annonce)
    {
        $annonce->delete();
        //redirect user
        return redirect()->route("annonces.index")->with([
            "success" => "annonce supprimée avec succés"
        ]);
    }
}
