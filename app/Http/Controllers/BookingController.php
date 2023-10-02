<?php

namespace App\Http\Controllers;
use App\Models\Booking;

use Illuminate\Http\Request;

class BookingController extends Controller
{
    //
    public function reservation()
{

    return view("admin.booking.reservation");
}

public function store(Request $request)
{
    $request->validate([
        'roomcategory' => 'required|max:20',
        'name' => 'required|max:50',
        'email' => 'required|email',
        'tel' => 'required',
        'nid' => 'required|integer',
        'roomType' => 'required',
        'maxoccupancy' => 'required',
        'checkInDate' => 'required',
        'checkOutDate' => 'required',
    ]);

    $booking = new Booking();
    $booking->roomcategory = $request->roomcategory;
    $booking->name = $request->name;
    $booking->email = $request->email;
    $booking->tel = $request->tel;
    $booking->nid = $request->nid;
    $booking->roomType = $request->roomType;
    $booking->maxoccupancy = $request->maxoccupancy;
    $booking->checkInDate = $request->checkInDate;
    $booking->checkOutDate = $request->checkOutDate;

    $booking->save();

    return redirect("admin/booking/booklists")->with("success", "Booking Done....");

}


public function editReservation($id)
{
    $booking=Booking::where("id",$id)->firstOrfail();
    return view("admin.booking.editReservation")->with('booking',  $booking);
    // return view("admin.booking.editReservation");
}

public function update(Request $request,$id)
{
    $request->validate([
        'roomcategory' => 'required|max:20',
        'name' => 'required|max:50',
        'email' => 'required|email',
        'tel' => 'required',
        'nid' => 'required|integer',
        'roomType' => 'required',
        'maxoccupancy' => 'required',
        'checkInDate' => 'required',
        'checkOutDate' => 'required',


    ]);


    $booking = Booking::find ($id);
    $booking->roomcategory = $request->roomcategory;
    $booking->name = $request->name;
    $booking->email = $request->email;
    $booking->tel = $request->tel;
    $booking->nid = $request->nid;
    $booking->roomType = $request->roomType;
    $booking->maxoccupancy = $request->maxoccupancy;
    $booking->checkInDate = $request->checkInDate;
    $booking->checkOutDate = $request->checkOutDate;
    $booking->update();

    return redirect("admin/booking/")->with("success", "BookingList Updated....");
}



public function singleview()
{
    return view("admin.booking.singleview");
}

public function show($id)
{ 
   $booking=Booking::where("id",$id)->firstOrfail();
   return view("admin.booking.singleview")->with('booking',  $booking);

}


public function booklists()
{
    // return view("admin.booking.booklists");

    $bookings = Booking::all();
    return view("admin.booking.booklists")->with('bookings',  $bookings);
}

}
