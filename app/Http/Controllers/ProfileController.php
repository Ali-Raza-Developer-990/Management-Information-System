<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ProfileController extends Controller
{
    function editprofile(){

        return view('editprofile', ['user' => Auth::user()]);

    }

    function profileupdate(REQUEST $req, string $id){

        $user = User::find($id);

        $user->name = $req->name;
        $user->email = $req->email;
        $user->age = $req->age;
        $user->contact = $req->contact;
        $user->designation = $req->designation;
        $user->city = $req->city;

        $user->save();

        return redirect()->route('welcome')->with('status','You are Data Update Successfully');
    }


}
