<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bassin;
use Auth;

class BassinController extends Controller
{
    public function BasForm(){
    	
    	return view('bassin.add');
    }


    public function AddBas(Request $request){
    	
    
    $validated = $request->validate([
        'name' => 'unique:bassins',
    ]);    
    
    $bassin = new Bassin;
    $bassin->name = $request->name ;
    $bassin->code = $request->code ;
    $bassin->save();


    
    return Redirect()->route('bassinlist')->with('success','Bassin inséré avec succès');

    }

    public function ShowBas(){
        $bassins = Bassin::all();
        return view('bassin.list',compact('bassins'));
    }

    public function Delete(Request $request,$id){
        $delete = Bassin::find($id)->forceDelete();
         return Redirect()->back()->with('success','Bassin supprimé avec succès');

    }

    public function Update(Request $request){
        

        

        $update = Bassin::find($request->bassin_id)->update([
            'name' => $request->name,
            'code' => $request->code,

        ]);
         return Redirect()->route('bassinlist')->with('success','Bassin mis à jour avec succès');

    }
}
