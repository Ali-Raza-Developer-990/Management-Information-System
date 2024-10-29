<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Checkinout;
use App\Models\User;


class AttendanceController extends Controller
{
    function attendance($id){

        $attendance = Checkinout::join('users', 'checkin_checkout.user_id', '=', 'users.id')->select('checkin_checkout.*', 'users.*') ->where('checkin_checkout.user_id', $id)->get();


        return view('attendance', ['attendance'=>$attendance ]);

    }
}
