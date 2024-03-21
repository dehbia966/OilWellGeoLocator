<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\commune;
use App\Models\Wilaya;
use Auth;

class CommuneController extends Controller
{
    public function ComForm(){
    	$wilayas = Wilaya::all();
    	return view('commune.add',compact('wilayas'));
    }


    public function AddCom(Request $request){
    	
    
        $validated = $request->validate([
        'name' => 'unique:communes',
    ]);  
    
    $commune = new commune;
    $commune->name = $request->name ;
    $commune->wilaya_id = $request->wilaya_id ;
    $commune->code = $request->code ;
    $commune->save();


    
    return Redirect()->route('communelist')->with('success','Commune inséré avec succès');

    }


    public function ShowCom(){
        $wilayas = Wilaya::all();
        $communes = commune::all();
        return view('commune.list',compact('communes','wilayas'));
    }

    public function Delete(Request $request,$id){
        $delete = commune::find($id)->forceDelete();
         return Redirect()->back()->with('success','Commune supprimé avec succès');

    }


    public function Update(Request $request){
        

        

        $update = commune::find($request->commune_id)->update([
            'name' => $request->name,
            'wilaya_id' => $request->wilaya_id,
            'code' => $request->code,

        ]);
         return Redirect()->route('communelist')->with('success','Commune mis à jour avec succès');

    }

}
