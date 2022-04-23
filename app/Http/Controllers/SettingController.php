<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Setting;

use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;

class SettingController extends Controller
{
  public function index(){
      $setting=Setting::find(1);
      return view('admin.setting.index',compact('setting'));
  }
  public function savedata(Request $request)
  {

    $validator=Validator::make($request->all(), [
        'name' =>'required|max:255'
        ,'logo' =>'required'
        ,'favicon' =>'required'

        ,'description' =>'required',
        'localisation'=>'required'
        ,'email'=>'required',
        'telephon'=>'required'
    ]);
    if($validator->fails()){
        return redirect()->back()->withErrors($validator);
    }
   
    $setting=Setting::where('id',1)->first();
    if($setting){
        if ($request->hasFile("logo")) {
            $file = $request->logo;
            $nomimage = time() . "_" . $file->getClientOriginalName();
            $file->move(public_path('public/images/'), $nomimage);
            $setting->logo=$nomimage;
            if( File::exists($file)){
                File::delete($file);
                        }

    }
     if ($request->hasFile("favicon") ) {
        $file = $request->favicon;
        $nomfav = time() . "_" . $file->getClientOriginalName();
        $file->move(public_path('public/images/'), $nomfav);
        $setting->favicon=$nomfav;
        if( File::exists($file)){
            File::delete($file);
                    }

}
    
    
       
            $setting -> name =  $request->name;
            $setting ->  description  =  $request->description;
            $setting ->  localisation  =  $request->localisation;

            $setting ->  email  =  $request->email;
            $setting ->  telephon  =  $request->telephon;


            $setting -> favicon =  $nomfav;
           
            $setting -> logo  = $nomimage;
            $setting->update();
        //redirect user
        return redirect("admin/settings")->with([
            "success" => "Modification effectuer"
        ]);
 
    }
    else{
        $setting = new Setting;
        if ($request->hasFile("logo")) {
            $file = $request->logo;
            $nomimage = time() . "_" . $file->getClientOriginalName();
            $file->move(public_path('public/images/'), $nomimage);
            $setting->logo=$nomimage;
            if( File::exists($file)){
                File::delete($file);
                        }

    }
     if ($request->hasFile("favicon") ) {
        $file = $request->favicon;
        $nomfav = time() . "_" . $file->getClientOriginalName();
        $file->move(public_path('public/images/'), $nomfav);
        $setting->favicon=$nomfav;
        if( File::exists($file)){
            File::delete($file);
                    }

} 
    
    
       
            $setting -> name =  $request->name;
            $setting ->  description  =  $request->description;
            
            $setting ->  localisation  =  $request->localisation;

            $setting ->  email  =  $request->email;
            $setting ->  telephon  =  $request->telephon;

            $setting -> favicon =  $nomfav;
            $setting -> logo  = $nomimage;
            $setting->save();
        //redirect user
        return redirect("admin/settings")->with([
            "success" => "Modification effectuer"
        ]);
    }
}
}


