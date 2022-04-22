<?php

namespace App\Http\Controllers;
use App\Models\Clients;
use App\Models\Garantie;
use App\Models\Ventes;
use App\Models\Categories;
use App\Models\Vehicules;
use App\Models\tableau_bordre;
use Illuminate\Http\Request;

class TableauBordreController extends Controller
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
        
        $clientsc = Clients::count();
        $garantiesc = Garantie::count();
        $ventesc= Ventes::count();
        $categoriesc = Categories::count();
        $vehiculesc = Vehicules::count();
       
        return view('admin.tableaubord.index',compact('clientsc','garantiesc','ventesc',"categoriesc",'vehiculesc'));
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\tableau_bordre  $tableau_bordre
     * @return \Illuminate\Http\Response
     */
    public function show(tableau_bordre $tableau_bordre)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\tableau_bordre  $tableau_bordre
     * @return \Illuminate\Http\Response
     */
    public function edit(tableau_bordre $tableau_bordre)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\tableau_bordre  $tableau_bordre
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, tableau_bordre $tableau_bordre)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\tableau_bordre  $tableau_bordre
     * @return \Illuminate\Http\Response
     */
    public function destroy(tableau_bordre $tableau_bordre)
    {
        //
    }
}
