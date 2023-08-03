<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    //
    public function login()
    {
        return view("employee.login");
    }
    public function register()
    {
        return view("employee.register");
    }
}
