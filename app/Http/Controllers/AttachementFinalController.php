<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AttachementFinal;
use App\Models\FicheContrat;
use App\Models\Project;
use Auth;

class AttachementFinalController extends Controller
{
    public function AttFinForm(){
        $projects = Project::all();
    	$fiches = FicheContrat::all();
    	return view('attachementfinal.add',compact('fiches','projects'));
    }

    public function AddAttFin(Request $request){
    	
    
    $validated = $request->validate([
        'ref_att' => 'unique:attachement_finals',
    ]); 
    
    $attachementfinal = new AttachementFinal;
    $attachementfinal->ref_att = $request->ref_att ;
    $attachementfinal->fiche_id = $request->fiche_id ;
    $attachementfinal->project_id = $request->project_id ;
    $attachementfinal->date_att = $request->date_att ;
    $attachementfinal->att_signe = $request->att_signe ;
    $attachementfinal->montant_global = $request->montant_global ;
    $attachementfinal->description = $request->description ;
    $attachementfinal->save();


    
    return Redirect()->route('attachementfinallist')->with('success','Attachement Final inséré avec succès');

    }

    public function ShowAttFin(){
        $fiches = FicheContrat::all();
        $projects = Project::all();
        $attachementfinals = AttachementFinal::all();
        return view('attachementfinal.list',compact('attachementfinals','fiches','projects'));
    }


    public function Delete(Request $request,$id){
        $delete = AttachementFinal::find($id)->forceDelete();
         return Redirect()->back()->with('success','Attachement Final supprimé avec succès');

    }


    public function Update(Request $request){
        

        

        $update = AttachementFinal::find($request->attachementfinal_id)->update([
            'ref_att' => $request->ref_att,
            'fiche_id' => $request->fiche_id,
            'project_id' => $request->project_id,
            'date_att' => $request->date_att,
            'att_signe' => $request->att_signe,
            'montant_global' => $request->montant_global,
            'description' => $request->description,

        ]);
         return Redirect()->route('attachementfinallist')->with('success','Attachement Final mis à jour avec succès');

    }
}
