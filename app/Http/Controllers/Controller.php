<?php

namespace App\Http\Controllers;

use App\Models\Room;
use App\Models\Booking;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;
    
   
    public function index()
    {
        return view("admin.room.dashboard");

      
    }


    // public function store() {
    //     $checkInDate = Booking::whereDate('created_at', now())->get();
    //     $checkOutDate = Booking::whereDate('created_at', now())->get();
    //     $availableRoom = Room::where('status', 'available')->get();
    //     $bookedRoom = Room::where('status', 'booked')->get();
    
    //     return view('dashboard', [
    //         'checkInDate' => $checkInDate,
    //         'checkOutDate' => $checkOutDate,
    //         'availableRoom' => $availableRoom,
    //         'bookedRoom' => $bookedRoom,
    //     ]);
    // }
    
    

    
    // public function store(Request $request)
    // {


    // $request->validate([
    //         'roomtitle' => 'required',
    //         'roomno' => 'required|integer|unique:rooms',
    //         'bookedroom' => 'required',
    //         'checkInDate' => 'required|date',
    //         'checkOutDate' => 'required|date',
            
    // ]);



    // $dashboard = new Dashboard();
    // $dashboard->roomtitle = $request->roomtitle;
    // $dashboard->roomno = $request->roomno;
    // $dashboard->bookedroom = $request->bookedroom;
    // $dashboard->checkInDate = $request->checkInDate;
    // $dashboard->checkOutDate = $request->checkOutDate;
   
    // $dashboard->save();

    // $bookedroom=Room::where('roomtitle','roomno')->where('status','booked')->get();
    // count($bookedroom);


    // return redirect("admin/room/index");

    // }

    
    public function utility()
    {
        return view("admin.utility");
    }
     

    
}
