<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Auth;

class EmployeController extends Controller
{
    public function EmpForm(){
    	
    	return view('employe.add');
    }

    public function AddEmp(Request $request){
    	
    $validated = $request->validate([
        'name' => 'unique:users',
        'email' => 'unique:users',
        
    ]); 

    
    $user = new User;
    $user->name = $request->name ;
    $user->email = $request->email ;
    $user->password = Hash::make($request->password);
    $user->num = $request->num ;
    $user->post_id = $request->post_id ;
    $user->address = $request->address ;
    $user->save();


    
    return Redirect()->route('employelist')->with('success','Employé inséré avec succès');

    }

    public function ShowEmp(){
        $users = User::all();
        return view('employe.list',compact('users'));
    }

    public function Delete(Request $request,$id){
        $delete = User::find($id)->forceDelete();
         return Redirect()->back()->with('success','Employé supprimé avec succès');

    }

    public function Update(Request $request){
        

        

        $update = User::find($request->user_id)->update([
            'name' => $request->name,
            'email' => $request->email,
            'num' => $request->num,
            'post_id' => $request->post_id,
            'address' => $request->address,
            

        ]);
         return Redirect()->route('employelist')->with('success','Employé mis à jour avec succès');

    }
}
