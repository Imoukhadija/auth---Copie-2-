<?php

namespace App\Http\Controllers;

use App\Models\Categories;
 
use Illuminate\Http\Request;
 
use Illuminate\Support\Str;

class CategoriesController extends Controller
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
        return view("managments.categories.index")->with([
            "categories" => Categories::paginate(2)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("managments.categories.create");
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
        //store data categories
        $titre = $request->titre;
        Categories::create([
            "titre" => $titre,
            "titre2" => Str::slug($titre)
        ]);
        //redirect  vers user
        return redirect()->route("categories.index")->with([
            "success" => "catégorie ajoutée avec succés"
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Categories  $categories
     * @return \Illuminate\Http\Response
     */
    public function show(Categories $category)
    {
         
        
        return view("managments.categories.show",compact('category'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Categories  $categories
     * @return \Illuminate\Http\Response
     */
    public function edit(Categories $category)
    {
        return view("managments.categories.edit")->with([
            "category" => $category
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\Request  $request
     * @param  \App\Models\Categories  $categories
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Categories $category)
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
        return redirect()->route("categories.index")->with([
            "success" => "catégorie modifiéavec succés"
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Categories  $categories
     * @return \Illuminate\Http\Response
     */
    public function destroy(Categories $category)
    {
        $category->delete();
        //redirect user
        return redirect()->route("categories.index")->with([
            "success" => "catégorie supprimée avec succés"
        ]);
    }
}
