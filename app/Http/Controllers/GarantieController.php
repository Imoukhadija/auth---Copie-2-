<?php

namespace App\Http\Controllers;



use App\Models\Garantie;
use App\Models\Categories;
 
use Illuminate\Http\Request;
 
use Illuminate\Support\Str;
class GarantieController extends Controller
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
        return view("managments.garantie.index")->with([
            "garanties" => Garantie::paginate(20)
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
            return view("managments.garantie.create")->with([
                "categories" => Categories::all()
            ]);
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
            "titre" => "required|min:3|unique:garanties,titre",
            "description" => "required|min:5",
            "image" => "required|image|mimes:png,jpg,jpeg|max:2048",
            "prix" => "required|numeric",
            "categories_id" => "required|numeric",
        ]);
        //store data
        if ($request->hasFile("image")) {
            $file = $request->image;
            $nomimage = time() . "_" . $file->getClientOriginalName();
            $file->move(public_path('images/garantie'), $nomimage);
            $titre = $request->titre;
            Garantie::create([
                "titre" => $titre,
                "titre2" => Str::slug($titre),
                "description" =>  $request->description,
                "prix" =>  $request->prix,
                "categories_id" =>  $request->categories_id,
                "image" =>  $nomimage,
            ]);
            //redirect user
            return redirect()->route("garanties.index")->with([
                "success" => "garantie ajouté avec succés"
            ]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Garantie  $garanty
     * @return \Illuminate\Http\Response
     */
    public function show(Garantie $garanty)
    {
        return view("managments.garantie.show",compact('garanty'))->with([
            "categories" => Categories::all(),
            "garanty" => $garanty    
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Garantie  $garanty
     * @return \Illuminate\Http\Response
     */
    public function edit(Garantie $garanty)
    {
        //
        return view("managments.garantie.edit",compact('garanty'))->with([
            "categories" => Categories::all(),
            "garanty" => $garanty    
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Garantie  $garanty
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Garantie $garanty)
    {
        //
        //validation
        $this->validate($request, [
            "titre" => "required|min:3|unique:garanties,titre," . $garanty->id,
            "description" => "required|min:5",
            "image" => "image|mimes:png,jpg,jpeg|max:2048",
            "prix" => "required|numeric",
            "categories_id" => "required|numeric",
        ]);
        //store data
        if ($request->hasFile("image")) {
            unlink(public_path('images/garantie/' . $garanty->image));
            $file = $request->image;
            $nomimage = time() . "_" . $file->getClientOriginalName();
            $file->move(public_path('images/garantie'), $nomimage);
            $titre = $request->titre;
            Garantie::create([
                "titre" => $titre,
                "titre2" => Str::slug($titre),
                "description" =>  $request->description,
                "prix" =>  $request->prix,
                "categories_id" =>  $request->categories_id,
                "image" =>  $nomimage,
            ]);
            //redirect user
            return redirect()->route("garanties.index")->with([
                "success" => "garantie modifié avec succés"
            ]);
        } else {
            $titre = $request->titre;
            $garanty->update([
                "titre" => $titre,
                "titre2" => Str::slug($titre),
                "description" =>  $request->description,
                "prix" =>  $request->prix,
                "categories_id" =>  $request->categories_id
            ]);
            //redirect user
            return redirect()->route("garanties.index")->with([
                "success" => "garantie modifié avec succés"
            ]);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Garantie  $garanty
     * @return \Illuminate\Http\Response
     */
    public function destroy(Garantie $garanty)
    {
        //remove image
        unlink(public_path('images/garantie/' . $garanty->image));
        $garanty->delete();
        //redirect user
        return redirect()->route("garanties.index")->with([
            "success" => "garantie supprimé avec succés"
        ]);
    }
}
