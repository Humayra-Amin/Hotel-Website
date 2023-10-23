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

        $categories = Room::get()->groupBy("category_id");

     return $categories;
        return view("admin.room.dashboard");

      
    }


    
    public function utility()
    {
        return view("admin.utility");
    }
     
    
    
}
