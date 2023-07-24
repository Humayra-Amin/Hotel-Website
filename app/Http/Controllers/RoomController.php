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
            'roomtitle' => 'required|max:20',
            'buildingno' => 'required|integer|size:5',
            'roomno' => 'required|integer|size:5',
            'floorno' => 'required|integer|size:5',
            'category' => 'required',
            'roomtype' => 'required',
            'roomtsize' => 'required|integer|size:5',
            'roomview' => 'required',
            'guestservice' => 'required',
            'facilities' => 'required',


        ]);


        $room = new Room();
        $room->roomtitle = $request->roomtitle;
        $room->buildingno = $request->buildingno;
        $room->roomno = $request->roomno;
        $room->floorno = $request->floorno;
        $room->category = $request->category ;
        $room->roomtype = $request->roomtype;
        $room->roomsize = $request->roomsize;
        $room->roomview = $request->roomview;
        $room->guestservice = $request->guestservice;
        $room->facilities = $request->facilities;
        $room->save();

        return redirect("room");
    }
    public function update(Request $request)
    {
        return $request;
    }
}
