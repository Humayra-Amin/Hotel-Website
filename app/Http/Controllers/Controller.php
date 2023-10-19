<?php

namespace App\Http\Controllers;

use App\Models\Room;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;
    
   
    public function index()
    {
        return view("admin.room.dashboard");
    }
    
    public function utility()
    {
        return view("admin.utility");
    }
     
    // public function home()
    // {
    //     $rooms = Room::all();
    //     return view("admin.home");
    // }
    
}
