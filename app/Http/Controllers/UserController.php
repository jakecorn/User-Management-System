<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    public function createForm(){
        return view('user_registration');
    }

    public function create(Request $request){

        $this->validaInput($request);

        $user = new User;
        $user->name             = $request->name;
        $user->username         = $request->username;
        $user->email            = $request->email;
        $user->contact_number   = $request->contact_number;
        $user->address          = $request->address;
        $user->save();

        return back()->with("success","User has been registered successfully.");
    }

    public function saveUpdate(Request $request, $user_id){

        $this->validaInput($request, $user_id);

        $user = User::find($user_id);
        $user->name             = $request->name;
        $user->username         = $request->username;
        $user->email            = $request->email;
        $user->contact_number   = $request->contact_number;
        $user->address          = $request->address;
        $user->update();

        return back()->with("success","User has been updated successfully.");
    }

    public function updateForm($user_id){
        $user = User::find($user_id);
        return view('user_update',['user'=>$user]);
    }

    public function list(){
        $users = User::all();
        $user_array = array();
        foreach ($users as $key => $user) {
            $user->setAttribute("updateUser",route("updateUser",['user_id'=>$user->id]));
            $user->setAttribute("delete",route("delete",['user_id'=>$user->id]));
            $user_array[] = $user;
        }     
        return view("list",["users"=>$user_array]);   
    }

    public function delete($user_id){
        User::find($user_id)->delete();     
        return back()->with("success","User has been deleted successfully.");
    }

    public function validaInput(Request $request,$user_id = null){
        $request->validate([
            "name"          => "required|min:5",
            "username"      => "required|min:5|unique:users,id,".$user_id,
            "email"         => "required|email|unique:users,id,".$user_id,
            "contact_number"=> "required|size:11",
            "address"       => "required|min:5",
        ]);
    }

}
