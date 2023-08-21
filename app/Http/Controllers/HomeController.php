<?php

namespace App\Http\Controllers;
use App\Models\Room;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class HomeController extends Controller
{
    //
    public function home()
    {   
        $rooms=Room::all();
        return view("room.home")->with('rooms',  $rooms);
    }
    


}
