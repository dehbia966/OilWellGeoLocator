<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bloc;
use App\Models\Bassin;
use Auth;

class BlocController extends Controller
{
    public function BloForm(){
    	$bassins = Bassin::all();
    	return view('bloc.add',compact('bassins'));
    }

    public function AddBlo(Request $request){
    $validated = $request->validate([
        'name' => 'unique:blocs',
    ]); 
 
    $bloc = new Bloc;
    $bloc->name = $request->name ;
    $bloc->code = $request->code ;
    $bloc->bassin_id = $request->bassin_id ;
    $bloc->save();


    
    return Redirect()->route('bloclist')->with('success','bloc inséré avec succès');

    }


    public function ShowBlo(){
        $bassins = Bassin::all();
        $blocs = Bloc::all();
        return view('bloc.list',compact('blocs','bassins'));
    }

    public function Delete(Request $request,$id){
        $delete = Bloc::find($id)->forceDelete();
         return Redirect()->back()->with('success','bloc supprimé avec succès');

    }

    public function Update(Request $request){
        

        

        $update = Bloc::find($request->bloc_id)->update([
            'name' => $request->name,
            'code' => $request->code,
            'bassin_id' => $request->bassin_id,

        ]);
         return Redirect()->route('bloclist')->with('success','Bloc mis à jour avec succès');

    }

}
