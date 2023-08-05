<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    
    // public function login()
    // {
    //     return view("employee.auth.login");
    // }
    // public function register()
    // {
    //     return view("employee.auth.register");
    // }
    public function login()
    {
        return view("room.auth.login");
    }
    public function register()
    {
        return view("room.auth.register");
    }
   
}

