<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
class AuthController extends Controller
{

    // function register(){
    //     // if(Auth::check()){
    //     // return redirect()->route('home');
    //     // }
    //     return view('login');
    // }

    // function registerstore(REQUEST $req){
    //     $req->validate([
    //         'name' => 'required',
    //         'email' => 'required|unique:user,email',
    //         'password' => 'required',
    //         'conpassword' => 'required|same:password'
    //     ]);

    //     $password = Hash::make($req->password);

    //     User::create([
    //         'name' => $req->name,
    //         'email' => $req->email,
    //         'password' => $req->password,
    //         'roles'

    //     ]);
    // }



    function login(){
        if(Auth::check()){
            return redirect()->route('home');
        }
        return view('login');     

    }

    function loginstore(REQUEST $req){
        $req->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        $data =  $req->only('email','password');

       
        if (Auth::attempt($data)) {

            $user = Auth::user(); 

            if ($user->roles === 'Admin') {

                return redirect()->route('home');
            } 
            elseif ($user->roles === 'Employee') {
                return redirect()->route('welcome'); 
                
            }
        }
        return back()->witherrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }


    function logout(REQUEST $req){

        Auth::logout();

        return redirect()->route('login');

    }



}
