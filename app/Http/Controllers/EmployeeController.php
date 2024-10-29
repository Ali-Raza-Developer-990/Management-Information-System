<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Checkinout;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;


class EmployeeController  extends Controller
{
    function employee(){

        $currentDateTime = Carbon::today();
        $result =  checkinout::where('user_id', Auth::user()->id)->whereDate('checkin_time',$currentDateTime->format('Y-m-d'))->first();
        $result2 =  checkinout::where('user_id', Auth::user()->id)->whereDate('checkout_time',$currentDateTime->format('Y-m-d'))->first();

        return view('welcome',['result' => $result,'result2' => $result2]);
    }

    function checkin(){

        $currentDateTime = Carbon::today();
        $result =  checkinout::where('user_id', Auth::user()->id)->whereDate('checkin_time',$currentDateTime->format('Y-m-d'))->first();
     
        if(!$result){

        Checkinout::create([

            'user_id' => Auth::user()->id,
            'checkin_time' => now(),
            'checkout_time' => null

        ]);

        return redirect()->route('welcome')->with('message' ,'Checked in successfully at: ' . now());

    }

    else {
        return redirect()->route('welcome')->with('message', 'You have already checked in.');
    }

    }


    function checkout(REQUEST $req){


        $currentDateTime = Carbon::today();
        $result =  checkinout::where('user_id', Auth::user()->id)->whereDate('checkin_time',$currentDateTime->format('Y-m-d'))->first();
        $result->update([
            'checkout_time' => now()
        ]);
    

        return redirect()->route('home');

    }


    function attendanceemployee($id) {
        $attendance = Checkinout::join('users', 'checkin_checkout.user_id', '=', 'users.id')
            ->select('checkin_checkout.*', 'users.*')
            ->where('checkin_checkout.user_id', $id)
            ->get();
    
        return view('attendaceemp', ['attendance' => $attendance]);
    }
    

    
}
