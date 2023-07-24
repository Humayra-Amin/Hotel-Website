<?php

namespace App\Http\Controllers;

use App\Models\Room;
use Illuminate\Http\Request;

class RoomController extends Controller
{
    //
    public function index()
    {
        return view("room.index");
    }
    public function add()
    {
        return view("room.add");
    }
    public function edit()
    {
        return view("room.edit");
    }
    public function single()
    {
        return view("room.single");

    }
    public function store(Request $request)
    {
        $request->validate([
            'roomtitle' => 'required',
            'buildingno' => 'required',

        ]);


        $room = new Room();
        $room->roomtitle = $request->roomtitle;
        $room->save();

        return redirect("room");
    }
    public function update(Request $request)
    {
        return $request;
    }
}
