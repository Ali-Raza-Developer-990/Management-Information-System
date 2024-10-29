<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;


class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = User::whereNot('roles','Admin')->paginate(10);

        return view('index',compact('user'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $req)
    {
        
         $req->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email|unique:users,email', 
        'password' => 'required', 
        'age' => 'required|integer',
        'city' => 'required|string|max:255',
        'contact' => 'required|string|max:255',
        'designation' => 'required|string|max:255',
        ]);

        $user = new User;

        $user->name = $req->name;
        $user->email = $req->email;
        $user->password =  Hash::make($req->password);;
        $user->age = $req->age;
        $user->contact = $req->contact;
        $user->designation = $req->designation;
        $user->city = $req->city;
        $user->roles = 'Employee';

        $user->save();

        return redirect()->route('home');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $user = User::find($id);
        // return $users;  
        return view('view',compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $user = User::find($id);
        return view('edit',compact('user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
            $user = User::find($id);

            $user->name = $request->name;
            $user->email = $request->email;
            $user->age = $request->age;
            $user->contact = $request->contact;
            $user->designation = $request->designation;
            $user->city = $request->city;

            $user->save();

            return redirect()->route('home')->with('status','User Data Update Successfully');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $user = User::find($id);
        
        $user->delete();

        return redirect()->route('home')->with('status','User Data Deleted Successfully');
    }
}
