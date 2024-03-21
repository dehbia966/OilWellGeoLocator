<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Material;
use App\Models\BrigadeTopographe;
use Auth;

class MaterailController extends Controller
{
    public function MatForm(){
    	$brigades = BrigadeTopographe::all();
    	return view('materail.add',compact('brigades'));
    }

    public function AddMat(Request $request){
    	
    $validated = $request->validate([
        'type' => 'unique:materials',
    ]); 

    
    $materail = new Material;
    $materail->type = $request->type ;
    $materail->brigade_id = $request->brigade_id ;
    $materail->code = $request->code ;

    $materail->description = $request->description ;
    $materail->save();


    
    return Redirect()->route('materaillist')->with('success','Matériel inséré avec succès');

    }

    public function ShowMat(){
        $brigades = BrigadeTopographe::all();
        $materails = Material::all();
        return view('materail.list',compact('materails','brigades'));
    }

    public function Delete(Request $request,$id){
        $delete = Material::find($id)->forceDelete();
         return Redirect()->back()->with('success','Matériel supprimé avec succès');

    }

    public function Update(Request $request){
        

        

        $update = Material::find($request->materail_id)->update([
            'type' => $request->type,
            'brigade_id' => $request->brigade_id,
            'code' => $request->code,
            'description' => $request->description 

        ]);
         return Redirect()->route('materaillist')->with('success','Materail mis à jour avec succès');

    }
}
