<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FicheContrat;
use Auth;

class FicheContratController extends Controller
{
    public function FicForm(){
    	
    	return view('fichec.add');
    }

    public function AddFic(Request $request){
    	
    $validated = $request->validate([
        'ref' => 'unique:fiche_contrats',
    ]); 

    
    $fiche = new FicheContrat;
    $fiche->ref = $request->ref ;
    $fiche->date_debut = $request->date_debut ;
    $fiche->date_fin = $request->date_fin ;
    $fiche->montant_global_implantation = $request->montant_global_implantation ;
    $fiche->save();


    
    return Redirect()->route('fichelist')->with('success','Fiche Contart inséré avec succès');

    }


    public function ShowRap(){
        $fiches = FicheContrat::all();
        return view('fichec.list',compact('fiches'));
    }


    public function Delete(Request $request,$id){
        $delete = FicheContrat::find($id)->forceDelete();
         return Redirect()->back()->with('success','Fiche Contart supprimé avec succès');

    }

    public function Update(Request $request){
        

        

        $update = FicheContrat::find($request->fiche_id)->update([
            'ref' => $request->ref,
            'date_debut' => $request->date_debut,
            'date_fin' => $request->date_fin,
            'montant_global_implantation' => $request->montant_global_implantation,
            

        ]);
         return Redirect()->route('fichelist')->with('success','Fiche Contart mis à jour avec succès');

    }
}
