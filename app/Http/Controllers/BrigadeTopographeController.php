<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BrigadeTopographe;
use App\Models\Material;
use App\Models\Project;
use App\Models\User;
use Auth;

class BrigadeTopographeController extends Controller
{
    public function BriForm(){
        $projects = Project::all();
    	$materials = Material::all();
        $users = User::all();
    	return view('brigade.add',compact('materials','projects','users'));
    }

    public function AddBri(Request $request){
    	
    
        $validated = $request->validate([
        'ref_brigade' => 'unique:brigade_topographes',
    ]); 
    
    $brigade = new BrigadeTopographe;
    $brigade->ref_brigade = $request->ref_brigade ;
    $brigade->user_id = $request->user_id ;
    $brigade->material_id = $request->material_id ;
    $brigade->project_id = $request->project_id ;
    $brigade->site_hebergement = $request->site_hebergement ;
    $brigade->date_sorti = $request->date_sorti ;
    $brigade->date_retour = $request->date_retour ;
    $brigade->date_inspection = $request->date_inspection ;
    $brigade->save();


    
    return Redirect()->route('brigadelist')->with('success','Brigade inséré avec succès');

    }

    public function ShowBri(){
        $projects = Project::all();
        $materials = Material::all();
        $brigades = BrigadeTopographe::all();
        $users = User::all();
        return view('brigade.list',compact('brigades','projects','materials','users'));
    }


    public function Delete(Request $request,$id){
        $delete = BrigadeTopographe::find($id)->forceDelete();
         return Redirect()->back()->with('success','Brigade supprimé avec succès');

    }

    public function Update(Request $request){
        

        

        $update = BrigadeTopographe::find($request->brigade_id)->update([
            'ref_brigade' => $request->ref_brigade,
            'user_id' => $request->user_id,
            'material_id' => $request->material_id,
            'project_id' => $request->project_id,
            'site_hebergement' => $request->site_hebergement,
            'date_sorti' => $request->date_sorti,
            'date_retour' => $request->date_retour,
            'date_inspection' => $request->date_inspection,

        ]);
         return Redirect()->route('brigadelist')->with('success','Brigade  mis à jour avec succès');

    }
}
