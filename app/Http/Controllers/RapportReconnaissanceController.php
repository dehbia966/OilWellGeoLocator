<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RapportReconnaissance;
use App\Models\Project;
use Auth;

class RapportReconnaissanceController extends Controller
{
    public function RapForm(){
    	$projects = Project::all();
    	return view('rapportr.add',compact('projects'));
    }

    

    public function AddRap(Request $request){
    	
    
      $validated = $request->validate([
        'ref_rapport' => 'unique:rapport_reconnaissances',
        
    ]);
    
    $rapport = new RapportReconnaissance;
    $rapport->ref_rapport = $request->ref_rapport ;
    $rapport->project_id = $request->project_id ;
    $rapport->date_recp_imp = $request->date_recp_imp ;
    $rapport->coordonne_x = $request->coordonne_x ;
    $rapport->coordonne_y = $request->coordonne_y ;
    $rapport->coordonne_z = $request->coordonne_z ;

    $degx = $request->degx ;
    $minx = $request->minx ;
    $secx = $request->secx ;
    $dirx = $request->dirx ;

    $rapport->utm_x = $this->DMS2Decimal($degx,$minx,$secx,$dirx); ;
    
    $degy = $request->degy ;
    $miny = $request->miny ;
    $secy = $request->secy ;
    $diry = $request->diry ;

    $rapport->utm_y = $this->DMS2Decimal($degy,$miny,$secy,$diry);

    $rapport->description = $request->description ;
    $rapport->save();


    
    return Redirect()->route('rapportlist')->with('success','Rapport inséré avec succès');

    }

    public function ShowRap(){
        $projects = Project::all();
        $rapports = RapportReconnaissance::all();
        return view('rapportr.list',compact('rapports','projects'));
    }


    public function Delete(Request $request,$id){
        $delete = RapportReconnaissance::find($id)->forceDelete();
         return Redirect()->back()->with('success','Rapport supprimé avec succès');

    }

    public function Update(Request $request){
        

        

        $update = RapportReconnaissance::find($request->rapport_id)->update([
            'ref_rapport' => $request->ref_rapport,
            'project_id' => $request->project_id,
            'date_recp_imp' => $request->date_recp_imp,
            'coordonne_x' => $request->coordonne_x,
            'coordonne_y' => $request->coordonne_y,
            'coordonne_z' => $request->coordonne_z,
            'utm_x' => $request->utm_x,
            'utm_y' => $request->utm_y,
            'description' => $request->description,

        ]);
         return Redirect()->route('rapportlist')->with('success','Rapport mis à jour avec succès');

    }

    public function DMS2Decimal($degrees = 0, $minutes = 0, $seconds = 0, $direction = 'n') {
   //converts DMS coordinates to decimal
   //returns false on bad inputs, decimal on success
    
   //direction must be n, s, e or w, case-insensitive
   $d = strtolower($direction);
   $ok = array('n', 's', 'e', 'w');
    
   //degrees must be integer between 0 and 180
   if(!is_numeric($degrees) || $degrees < 0 || $degrees > 180) {
      $decimal = false;
   }
   //minutes must be integer or float between 0 and 59
   elseif(!is_numeric($minutes) || $minutes < 0 || $minutes > 59) {
      $decimal = false;
   }
   //seconds must be integer or float between 0 and 59
   elseif(!is_numeric($seconds) || $seconds < 0 || $seconds > 59) {
      $decimal = false;
   }
   elseif(!in_array($d, $ok)) {
      $decimal = false;
   }
   else {
      //inputs clean, calculate
      $decimal = $degrees + ($minutes / 60) + ($seconds / 3600);
       
      //reverse for south or west coordinates; north is assumed
      if($d == 's' || $d == 'w') {
         $decimal *= -1;
      }
   }
    
   return $decimal;
}

    


}
