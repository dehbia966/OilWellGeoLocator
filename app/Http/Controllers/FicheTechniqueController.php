<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FicheTechnique;
use App\Models\Project;

use Auth;

class FicheTechniqueController extends Controller
{
    public function FicForm(){
    	$projects = Project::all();
    	return view('fichet.add',compact('projects'));
    }

     public function AddFic(Request $request){
    	
    $validated = $request->validate([
        'ref_dos_tech' => 'unique:fiche_techniques',
    ]); 

    
    $fiche = new FicheTechnique;
    $fiche->ref_dos_tech = $request->ref_dos_tech ;
    $fiche->project_id = $request->project_id ;
    $fiche->date_recept_ord = $request->date_recept_ord ;
    $fiche->date_envoi_odt = $request->date_envoi_odt ;
    $fiche->date_envoi_ods = $request->date_envoi_ods ;
    $fiche->date_fin_ods = $request->date_fin_ods ;
    $fiche->ref_ods = $request->ref_ods ;
    $fiche->ref_odt = $request->ref_odt ;
    $fiche->laltitude = $request->laltitude ;
    $fiche->longitude = $request->longitude ;
    $fiche->ref_sis = $request->ref_sis ;
    $fiche->pos_sis = $request->pos_sis ;
    $fiche->orgi_si = $request->orgi_si ;
    $fiche->paramatre_trans = $request->paramatre_trans ;
    $fiche->altemetric = $request->altemetric ;
    $fiche->save();


    
    return Redirect()->route('fichetlist')->with('success','Fiche Technique inséré avec succès');

    }

    public function ShowFic(){
        $projects = Project::all();
        $fiches = FicheTechnique::all();
        return view('fichet.list',compact('fiches','projects'));
    }


    public function Delete(Request $request,$id){
        $delete = FicheTechnique::find($id)->forceDelete();
         return Redirect()->back()->with('success','Fiche Technique supprimé avec succès');

    }

    public function Update(Request $request){
        

        

        $update = FicheTechnique::find($request->fiche_id)->update([
            'ref_dos_tech' => $request->ref_dos_tech,
            'project_id' => $request->project_id,
            'date_recept_ord' => $request->date_recept_ord,
            'date_envoi_odt' => $request->date_envoi_odt,
            'date_envoi_ods' => $request->date_envoi_ods,
            'date_fin_ods' => $request->date_fin_ods,
            'ref_ods' => $request->ref_ods,
            'ref_odt' => $request->ref_odt,
            'laltitude' => $request->laltitude,
            'longitude' => $request->longitude,
            'ref_sis' => $request->ref_sis,
            'pos_sis' => $request->pos_sis,
            'orgi_si' => $request->orgi_si,
            'paramatre_trans' => $request->paramatre_trans,
            'altemetric' => $request->altemetric,
            

        ]);
         return Redirect()->route('fichetlist')->with('success','Fiche Technique mis à jour avec succès');

    }

}
