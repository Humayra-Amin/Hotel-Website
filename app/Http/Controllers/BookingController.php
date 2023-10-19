<?php

namespace App\Http\Controllers;
use App\Models\Booking;
use App\Models\Customer;
use App\Models\Room;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    //


    public function reservation(Request $request)
    {
        $rooms = Room::all();
        return view("admin.booking.reservation")->with('rooms',  $rooms);
        // return view("admin.booking.reservation");
        
    }



    public function store(Request $request)
    {


    // $request->validate([
    //     'name' => 'required|max:50',
    //     'email' => 'required|email',
    //     'tel' => 'required',
    //     'nid' => 'required|integer',
    //     'roomcategory' => 'required|max:20',
    //     'roomno' => 'required|integer',
    //     'maxoccupancy' => 'required',
    //     'checkInDate' => 'required',
    //     'checkOutDate' => 'required',


    $request->validate([
            'cname' => 'required|max:50',
            'email' => 'required|email',
            'tel' => 'required',
            'nid' => 'required',
            'roomcategory' => 'required',
            'roomno' => 'required',
            'guestnumber' => 'required',
            'checkInDate' => 'required|date',
            'checkOutDate' => 'required|date',
            'price' => 'required',
            'discount' => 'nullable|numeric',
    ]);




    // check customer 
    // $customer = Customer::where("email", $request->email)->first();
    // if(!$customer){
    //     $customer->name = $request->name;
    //     $customer->email = $request->email;
    //     $customer->password = ;
    // }




    $booking = new Booking();
    $booking->cname = $request->cname;
    $booking->email = $request->email;
    $booking->tel = $request->tel;
    $booking->nid = $request->nid;
    $booking->roomcategory = $request->roomcategory;
    $booking->roomno = $request->roomno;
    $booking->guestnumber = $request->guestnumber;
    $booking->checkInDate = $request->checkInDate;
    $booking->checkOutDate = $request->checkOutDate;
    $booking->price = $request->price;
    $booking->discount = $request->discount;
    $booking->specialrequest = $request->specialrequest;
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


        // $request->validate([
        //     'name' => 'required|max:50',
        //     'email' => 'required|email',
        //     'tel' => 'required',
        //     'nid' => 'required|integer',
        //     'roomcategory' => 'required|max:20',
        //     'roomno' => 'required|integer',
        //     'maxoccupancy' => 'required',
        //     'checkInDate' => 'required',
        //     'checkOutDate' => 'required',

        // ]);

        $request->validate([
            'cname' => 'required|max:50',
            'email' => 'required|email',
            'tel' => 'required',
            'nid' => 'required',
            'roomcategory' => 'required',
            'roomno' => 'required',
            'guestnumber' => 'required',
            'checkInDate' => 'required|date',
            'checkOutDate' => 'required|date',
            'price' => 'required',
            'discount' => 'nullable|numeric',
    ]);



        // $booking = Booking::find ($id);
        // $booking->name = $request->name;
        // $booking->email = $request->email;
        // $booking->tel = $request->tel;
        // $booking->nid = $request->nid;
        // $booking->roomcategory = $request->roomcategory;
        // $booking->roomno = $request->roomno;
        // $booking->maxoccupancy = $request->maxoccupancy;
        // $booking->checkInDate = $request->checkInDate;
        // $booking->checkOutDate = $request->checkOutDate;
        // $booking->update();

        $booking = Booking::find ($id);
        $booking->cname = $request->cname;
        $booking->email = $request->email;
        $booking->tel = $request->tel;
        $booking->nid = $request->nid;
        $booking->roomcategory = $request->roomcategory;
        $booking->roomno = $request->roomno;
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
        // return view("admin.booking.booklists");

        $bookings = Booking::all();
        return view("admin.booking.booklists")->with('bookings',  $bookings);
    }




    public function accept(Request $request, $id)
    {

        $booking = Booking::find($id);


        if (!$booking) {

            return redirect()->back()->with('error', 'Booking not found.');
        }


        $booking->status = 'Accepted';
        $booking->save();


        return redirect()->back()->with('success', 'Booking accepted successfully!!!!');

    }




    public function deny(Request $request, $id)
    {

        $booking = Booking::find($id);


        if (!$booking) {

            return redirect()->back()->with('error', 'Booking not found.');
        }


        $booking->status = 'Denied';
        $booking->save();

        return redirect()->back()->with('error', 'Booking denied!!!!');

    }

    
}
