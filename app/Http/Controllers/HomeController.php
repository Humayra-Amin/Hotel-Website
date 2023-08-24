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

       $request->validate([
        'room_id' => 'required',
        'book' => 'required',
    ]);

        $roombook = RoomBook::find($id);
        $roombook->room_id = $id;
        $roombook->book = 1;
        $roombook->save();

        $room->availablerooms = $$room->availablerooms - 1;
        $room->update();
        
        // if (Room::table('singleroom')->where('room_id', $request->room_id)->exists()) {
        //     return to_route('room')->with('error', 'Sorry! The room is already booked!');
        // }
       return view("room.singleroom")->with('room',  $room);

    }
}
