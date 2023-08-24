<?php

namespace App\Http\Controllers;
use App\Models\Room;
use App\Models\RoomBook;
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
    // public function singleroom()
    // {
    //     return view("room.singleroom");

    // }
    public function singleroom($id)
    { 
       $room=Room::where("id",$id)->firstOrfail();
       return view("room.singleroom")->with('room',  $room);
    }

    public function roombook(Request $request, $id)
    { 

       $room=Room::where("id",$id)->firstOrfail();

        $roombook = new RoomBook();
        $roombook->room_id = $id;
        $roombook->book = 1;
        $roombook->save();
        
        $room->availablerooms = $room->availablerooms - 1;
        $room->update();
        
        
        return redirect("singleroom/$room->id")->with("success", "Room booked.");

    }
}
