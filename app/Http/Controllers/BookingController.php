<?php

namespace App\Http\Controllers;
use App\Models\Booking;
use App\Models\Income;
use App\Models\Customer;
use App\Models\Room;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    //


    public function reservation(Request $request)
    {
        $rooms = Room::where("status",NULL)->get();
        return view("admin.booking.reservation")->with('rooms',  $rooms);
       
    }



    public function store(Request $request)
    {


    $request->validate([
            'cname' => 'required|max:50',
            'email' => 'required|email',
            'tel' => 'required',
            'nid' => 'required',
            'room_id' => 'required',
            'guestnumber' => 'nullable',
            'checkInDate' => 'required|date',
            'checkOutDate' => 'required|date',
            'price' => 'required',
            'discount' => 'nullable|numeric',
    ]);



    $booking = new Booking();
    $booking->cname = $request->cname;
    $booking->email = $request->email;
    $booking->tel = $request->tel;
    $booking->nid = $request->nid;
    $booking->room_id = $request->room_id;
    $booking->guestnumber = $request->guestnumber;
    $booking->checkInDate = $request->checkInDate;
    $booking->checkOutDate = $request->checkOutDate;
    $booking->price = $request->price;
    $booking->discount = $request->discount;
    $booking->specialrequest = $request->specialrequest;
    $booking->save();


    $income= new Income();
    $income->reservation_id = $request->reservation_id;
    $income->price = $request->price;
    $income->discount = $request->discount;
    $income->paid = $request->paid;
    $income->due = (float)$income->price - (float)$income->discount - (float)$income->paid;

    $income->save();

    


    $room = Room::where('id', $request->room_id)->first();
    $room->status = 'Booked';
    $room->update();



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
            'cname' => 'required|max:50',
            'email' => 'required|email',
            'tel' => 'required',
            'nid' => 'required',
            'room_id' => 'required',
            'guestnumber' => 'nullable',
            'checkInDate' => 'required|date',
            'checkOutDate' => 'required|date',
            'price' => 'required',
            'discount' => 'nullable|numeric',
    ]);


        $booking = Booking::find ($id);
        $booking->cname = $request->cname;
        $booking->email = $request->email;
        $booking->tel = $request->tel;
        $booking->nid = $request->nid;
        $booking->room_id = $request->room_id;
        $booking->guestnumber = $request->guestnumber;
        $booking->checkInDate = $request->checkInDate;
        $booking->checkOutDate = $request->checkOutDate;
        $booking->price = $request->price;
        $booking->discount = $request->discount;
        $booking->specialrequest = $request->specialrequest;
        $booking->update();
        

        return redirect("admin/booking/booklists")->with("success", "BookingList Updated....");

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

        $bookings = Booking::all();
        return view("admin.booking.booklists")->with('bookings',  $bookings);
    }






    // public function accept(Request $request, $id)
    // {

    //     $booking = Booking::find($id);


    //     if (!$booking) {

    //         return redirect()->back()->with('error', 'Booking not found.');
    //     }


    //     $booking->status = 'Accepted';
    //     $booking->save();


    //     return redirect()->back()->with('success', 'Booking accepted successfully!!!!');

    // }




    // public function deny(Request $request, $id)
    // {

    //     $booking = Booking::find($id);


    //     if (!$booking) {

    //         return redirect()->back()->with('error', 'Booking not found.');
    //     }


    //     $booking->status = 'Denied';
    //     $booking->save();

    //     return redirect()->back()->with('error', 'Booking denied!!!!');

    // }

    
}
