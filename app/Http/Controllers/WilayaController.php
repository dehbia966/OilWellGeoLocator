<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Wilaya;
use Auth;

class WilayaController extends Controller
{
    public function WilForm(){
    	
    	return view('wilaya.add');
    }

    public function AddWil(Request $request){
    	
    
        $validated = $request->validate([
        'name' => 'unique:wilayas',
    ]); 
    
    $wilaya = new Wilaya;
    $wilaya->name = $request->name ;
    $wilaya->code = $request->code ;
    $wilaya->save();


    
    return Redirect()->route('wilayalist')->with('success','Wilaya inséré avec succès');

    }


    public function ShowWil(){
        $wilayas = Wilaya::all();
        return view('wilaya.list',compact('wilayas'));
    }


    public function Delete(Request $request,$id){
        $delete = Wilaya::find($id)->forceDelete();
         return Redirect()->back()->with('success','wilaya supprimé avec succès');

    }


    public function Update(Request $request){
        

        

        $update = Wilaya::find($request->wilaya_id)->update([
            'name' => $request->name,
            'code' => $request->code,

        ]);
         return Redirect()->route('wilayalist')->with('success','Wilaya mis à jour avec succès');

    }
}
