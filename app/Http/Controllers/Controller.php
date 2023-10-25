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

    //     $categories = Room::get()->groupBy("category_id");

        // return $categories;

        $categories = Room::get()->groupBy("category_id");


        $roomCounts = [];
        foreach ($categories as $category_id => $rooms) 
        {

            $available = $rooms->where('status', NULL)->count();
            $booked = $rooms->where('status', 'Booked')->count();


            $bookRoomNo =[];
            $ablRoomNo =[];
            foreach($rooms as $room){
                if($room->status == "Booked"){
                    $bookRoomNo[] = $room->roomno;
                } else{
                    $ablRoomNo[] = $room->roomno;
                }
            }
            
            $roomCounts[$category_id] = 
            [
                'Available' => $available,
                'Booked' => $booked,
                'bookRoomNo' => implode(",",$bookRoomNo),
                'ablRoomNo' => implode(",",$ablRoomNo)
            ];
        }

    

        return view("admin.room.dashboard")->with("roomCounts", $roomCounts);

      
    }


    
    public function utility()
    {
        return view("admin.utility");
    }
     
    
    
}
