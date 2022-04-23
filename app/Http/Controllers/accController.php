<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Setting;
use App\Models\Annonces;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;

class accController extends Controller
{
  

    public function index() {
        $annonce = Annonces::all();
        $setting=Setting::find(1);

        return view('home.index',compact('annonce','setting') );
    }
}


