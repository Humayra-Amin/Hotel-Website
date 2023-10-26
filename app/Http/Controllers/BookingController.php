<?php

namespace App\Http\Controllers;
use App\Models\Booking;
use App\Models\Income;
use App\Models\Customer;
use App\Models\Room;
use Illuminate\Http\Request;
use Carbon\Carbon;

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
            'paid' => 'nullable|numeric',
            'due' => 'nullable|numeric',
    ]);



    $room = Room::where("id", $request->room_id)->first();
    if(!$room){
        return redirect("admin/booking/booklists")->with("error", "Room not found.");
    }

    // if($room->status == "Booked"){
    //     return redirect("admin/booking/booklists")->with("error", "Room not found.");
    // }




    $booking = new Booking();
    $booking->cname = $request->cname;
    $booking->email = $request->email;
    $booking->tel = $request->tel;
    $booking->nid = $request->nid;
    $booking->room_id = $request->room_id;
    $booking->guestnumber = $request->guestnumber;
    $booking->checkInDate = $request->checkInDate;
    $booking->checkOutDate = $request->checkOutDate;
    $booking->specialrequest = $request->specialrequest;

    $booking->price = $request->price;
    $booking->discount = $request->discount;
    $booking->paid = $request->paid;
    $booking->due =  (float)$booking->price - (float)$booking->discount - (float)$booking->paid;


    // $checkInDate = Carbon::parse($request->checkInDate);
    // $checkOutDate = Carbon::parse($request->checkOutDate);


    $booking->save();


    $income= new Income();
    $income->paid = $request->paid;
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
            'paid' => 'nullable|numeric',
            'due' => 'nullable|numeric',
    ]);


    $room = Room::where("id", $request->room_id)->first();
    if(!$room){
        return redirect("admin/booking/booklists")->with("error", "Room not found.");
    }



        $booking = Booking::find ($id);
        $booking->cname = $request->cname;
        $booking->email = $request->email;
        $booking->tel = $request->tel;
        $booking->nid = $request->nid;
        $booking->room_id = $request->room_id;
        $booking->guestnumber = $request->guestnumber;
        $booking->checkInDate = $request->checkInDate;
        $booking->checkOutDate = $request->checkOutDate;;
        $booking->specialrequest = $request->specialrequest;

        $booking->price = $request->price;
        $booking->discount = $request->discount;
        $booking->paid = $request->paid;
        $booking->due =  (float)$booking->price - (float)$booking->discount - (float)$booking->paid;

        $booking->update();
        

        $room = Room::where('id', $request->room_id)->first();
        $room->status = 'Booked';
        $room->update();
    
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


    public function checkout()
    {

        return view("admin.booking.checkout");

    }



    public function search(Request $request)
   {

    $request->validate([
        'emailorcontact' => 'required',
    ]);

    $emailOrContact = $request->emailorcontact;

    $booking = Booking::with("room", "income")->where('email', $emailOrContact)
        ->orWhere('tel', $emailOrContact)
        ->first();

        if($booking){
            if($booking->room->status != "Booked"){
                return redirect()->back()->with('error', 'Booking not found.');
            }
        } else{
            return redirect()->back()->with('error', 'Booking not found.');
        }

    
        return view('admin.booking.singleview')->with('booking',  $booking);
        

   } 



    public function checkedout(Request $request,$id)
    {

        $booking = Booking::with("room")->find($id);
        if($booking){
            if($booking->room->status != "Booked"){
                return redirect()->back()->with('error', 'Booking not found.');
            }
        } else{
            return redirect()->back()->with('error', 'Booking not found.');
        }


        $income= new Income();
        $income->reservation_id = $booking->id;
        $income->paid = $request->paid;
        $income->save();



        $room = $booking->room;
        $room->status = null;
        $room->save();


        return redirect()->back()->with('success', 'Checked Out successfully!!!!');

    }






    

    
}
