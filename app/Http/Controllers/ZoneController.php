<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Zone;
use Auth;

class ZoneController extends Controller
{
    //
    public function ZonForm(){
    	
    	return view('zone.add');
    }


    public function AddZon(Request $request){
    	
    $validated = $request->validate([
        'name' => 'unique:zones',
    ]); 

    
    $zone = new Zone;
    $zone->name = $request->name ;
    $zone->code = $request->code ;
    $zone->save();


    
    return Redirect()->route('zonelist')->with('success','Zone inséré avec succès');

    }


    public function ShowZon(){
        $zones = Zone::all();
        return view('zone.list',compact('zones'));
    }


    public function Delete(Request $request,$id){
        $delete = Zone::find($id)->forceDelete();
         return Redirect()->back()->with('success','Zone supprimé avec succès');

    }

    public function Update(Request $request){
        

        

        $update = Zone::find($request->zone_id)->update([
            'name' => $request->name,
            'code' => $request->code,

        ]);
         return Redirect()->route('zonelist')->with('success','Zone mis à jour avec succès');

    }
}
