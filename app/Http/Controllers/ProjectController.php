<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;
use App\Models\Zone;
use App\Models\Bloc;
use App\Models\Commune;
use App\Models\RapportReconnaissance;
use Auth;

class ProjectController extends Controller
{
    public function ProForm(){
        $rapports = RapportReconnaissance::all();
    	$zones = Zone::all();
        $blocs = Bloc::all();
        $communes = Commune::all();
    	return view('project.add',compact('zones','blocs','communes','rapports'));
    }


    public function AddPro(Request $request){
    	
    
        $validated = $request->validate([
        'sigle' => 'unique:projects',
        'name' => 'unique:projects',
    ]);
    
    $project = new Project;
    $project->sigle = $request->sigle ;
    $project->name = $request->name ;
    $project->rapport_id = $request->rapport_id ;
    $project->zone_id = $request->zone_id ;
    $project->bloc_id = $request->bloc_id ;
    $project->commune_id = $request->commune_id ;
    $project->status = $request->status ;
    $project->date_c = $request->date_c ;
    $project->type = $request->type ;
    $project->save();


    
    return Redirect()->route('projectlist')->with('success','Projet inséré avec succès');

    }


    public function ShowPro(){
        $rapports = RapportReconnaissance::all();
        $zones = Zone::all();
        $blocs = Bloc::all();
        $communes = Commune::all();
        $projets = Project::all();
        return view('project.list',compact('projets','zones','blocs','communes','rapports'));
    }


    public function Delete(Request $request,$id){
        $delete = Project::find($id)->forceDelete();
         return Redirect()->back()->with('success','Projet supprimé avec succès');

    }

    public function Update(Request $request){
        

        

        $update = Project::find($request->projet_id)->update([
            'sigle' => $request->sigle,
            'name' => $request->name,
            'rapport_id' => $request->rapport_id,
            'zone_id' => $request->zone_id,
            'bloc_id' => $request->bloc_id,
            'commune_id' => $request->commune_id,
            'status' => $request->status,
            'date_c' => $request->date_c,
            'type' => $request->type,

        ]);
         return Redirect()->route('projectlist')->with('success','Projt Final mis à jour avec succès');

    }

}
