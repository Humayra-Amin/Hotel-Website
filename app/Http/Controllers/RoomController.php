<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Room;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class RoomController extends Controller
{
    //
    public function index()
    {
        $categories = Category::all();
        return view("admin.category.viewcategory")->with('categories',  $categories);
    }


    public function roomcategory(Request $request)
    {
        $categories = Room::where('category_id',$request->id)->get();
        return view("admin.room.index")->with('categories',  $categories);
    }


    public function add()
    {   
        $categories = Category::all();
        return view("admin.room.add")->with('categories',  $categories);
    }



    public function single()
    {
        return view("admin.room.single");

    }
    public function store(Request $request)
    {

        $request->validate([
            'roomtitle' => 'required|max:20',
            'roomno' => 'required|integer',
            'floorno' => 'required',
            'price' => 'required',
            'availablerooms' => 'required',
            'maxoccupancy' => 'required',
            'category_id' => 'required',
            'roomtype' => 'required',
            'roomsize' => 'required',
            'roomview' => 'required',
            'guestservice' => 'required',
            'facilities' => 'required',


        ]);


        $room = new Room();
        $room->roomtitle = $request->roomtitle;
        $room->roomno = $request->roomno;
        $room->floorno = $request->floorno;
        $room->price = $request->price;
        $room->availablerooms = $request->availablerooms;
        $room->maxoccupancy = $request->maxoccupancy;
        $room->category_id = $request->category_id ;
        $room->roomtype = $request->roomtype;
        $room->roomsize = $request->roomsize;
        $room->roomview = $request->roomview;
        $room->guestservice = $request->guestservice;
        $room->facilities = $request->facilities;
        $room->description = $request->description;
        $room->save();


        foreach($request->file('image') as $img){
            Storage::disk("public")->put("$room->id", $img);
        }
        $room->image= Storage::disk("public")->files($room->id);
        $room->update();



        return redirect("admin/room")->with("success", "Room created.");
    }
    public function update(Request $request,$id)
    {   
        $request->validate([
            'roomtitle' => 'required|max:20',
            'roomno' => 'required|integer',
            'floorno' => 'required',
            'price' => 'required',
            'availablerooms' => 'required',
            'maxoccupancy' => 'required',
            'category_id' => 'required',
            'roomtype' => 'required',
            'roomsize' => 'required',
            'roomview' => 'required',
            'guestservice' => 'required',
            'facilities' => 'required',
        ]);


        $room = Room::find($id);
        $room->roomtitle = $request->roomtitle;
        $room->roomno = $request->roomno;
        $room->floorno = $request->floorno;
        $room->price = $request->price;
        $room->availablerooms = $request->availablerooms;
        $room->maxoccupancy = $request->maxoccupancy;
        $room->category_id = $request->category_id;
        $room->roomtype = $request->roomtype;
        $room->roomsize = $request->roomsize;
        $room->roomview = $request->roomview;
        $room->guestservice = $request->guestservice;
        $room->facilities = $request->facilities;
        $room->description = $request->description;
        $room->update();

       

       if($request->file('image')){
        foreach($request->file('image') as $img){
            Storage::disk("public")->put("$room->id", $img);
        }
    }
        $room->image= Storage::disk("public")->files($room->id);
        $room->update();

        return redirect("admin/room")->with("success", "Room updated.");

    }

    public function show($id)
    { 
       $room=Room::where("id",$id)->firstOrfail();
       return view("admin.room.single")->with('room',  $room);

    }

    public function edit($id)
    { 

       $room=Room::where("id",$id)->firstOrfail();
       return view("admin.room.edit")->with('room',  $room);

    }

}
