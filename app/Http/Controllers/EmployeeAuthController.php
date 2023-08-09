<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

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

    public function postLogin(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
    ]);
   
    $credentials = $request->only('email', 'password');


        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('/')->withSuccess('You have Successfully loggedin');
    }
   
    return redirect("employee/login")->withErrors('Oppes! You have entered invalid credentials');
}

public function postRegistration(Request $request)
{  
    $request->validate([
        'name' => 'required',
        'email' => 'required|email|unique:users',
        'password' => 'required|confirmed',
    ]);
       
    $data = $request->all();
    $check = $this->create($data);
     
    return redirect("/")->withSuccess('Great! You have Successfully loggedin');
}

public function create(array $data)
{
  return User::create([
    'name' => $data['name'],
    'email' => $data['email'],
    'password' => Hash::make($data['password'])
  ]);
}


public function logout() {
    Session::flush();
    Auth::logout();

    return Redirect('employee/login');
}

}

