<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmployeeAuthController extends Controller
{
    
    public function login()
    {
        return view("employee.auth.login");
    }
    public function register()
    {
        return view("employee.auth.register");
    }
   
}

