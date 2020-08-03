<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\userModel;
class UserController extends Controller
{
	
    public function index(){

    	$user = userModel::all();
    	return view('home',['users'=>$user]);
    }
    public function create(Request $request){

    	$request->validate([
    		'id'=>'required',
    		'email'=>'required|email',
    		'name'=>'required|string',
    		'city'=>'required|string'    		
    	]);  	
    	

		 $user = new userModel();
		 $user->id = $request->id;
		 $user->name = $request->name;
		 $user->email = $request->email;
		 $user->city = $request->city;
		 $user->save();
		 $request->session()->flash('success','New Record Created Successfully..');
		 return back();
	}
	public function delete(Request $request){
		
		userModel::find($request->id)->delete();
		$request->session()->flash('success','Record Deleted Successfully..');
		return back();
	}
	public function edit(Request $request){
		$id = $request->id;
		$user = userModel::find($id);
		return view('edit',['user'=>$user]);

	}
	public function update(Request $request){

		$user = userModel::find($request->id)->update(['name'=>$request->name,'email'=>$request->email,'city'=>$request->city]);
		
		return redirect('/');
		$request->session()->flash('success','Record Updated Successfully..');
	}
}

