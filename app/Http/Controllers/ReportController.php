<?php

namespace App\Http\Controllers;

use App\Exports\ExportVentes;
use App\Models\ventes;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class ReportController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware("auth");
    }

    public function index()
    {
        return view("managments.rapport.index");
    }

    public function genere(Request $request)
    {
         
        $this->validate($request, 
        [
            "from" => "required",
            "to" => "required"
        ]);
        
        $Datefin = date("Y-m-d H:i:s", strtotime($request->to . "23:59:59"));
        $DateDebut = date("Y-m-d H:i:s", strtotime($request->from . "00:00:00"));

        $ventes = Ventes::whereBetween("created_at", [$DateDebut, $Datefin])
            ->where("paiement_status", "paid")->get();
        
        return view("managments.rapport.index")->with([

            "DateDebut" => $DateDebut,
            "Datefin" => $Datefin,
            "total" => $ventes->sum('total_recu'),
            "ventes" => $ventes
        ]);
    }

    
}
