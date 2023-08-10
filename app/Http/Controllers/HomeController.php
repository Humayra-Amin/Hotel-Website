<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function home()
    {
        return view("room.home");
    }

    public function show()
    { 
       $room=Room ::where()->get();
       return view("room.home")->with('room',  $room);
    }
}
