<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class CustomerController extends Controller
{
    public function login()
    {
        return view("customer.login");
    }  
      
    public function register()
    {
        return view("customer.register");
    }

    public function customerlist()
    {
        return view("customer.customerlist");
    }
    public function personalInfo()
    {
        return view("customer.personalInfo");
    }
    public function customernav()
    {
        return view("customer.customernav");
    }
    public function bookinglist()
    {
        return view("customer.bookinglist");
    }
    public function changepass()
    {
        return view("customer.changepass");
    }

    public function postLogin(Request $request)
    {

        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
   
        $credentials = $request->only('email', 'password');


        if (Auth::guard("emp")->attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('/')->withSuccess('You have Successfully loggedin');
        }

        return redirect("/login")->withErrors('Oppes! You have entered invalid credentials');
    }
      

    public function postRegister(Request $request)
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
      return Customer::create([
        'name' => $data['name'],
        'email' => $data['email'],
        'password' => Hash::make($data['password'])
      ]);
    }
    
  
    public function logout() {

        Session::flush();
        Auth::logout();
  
        return Redirect('/');
    }

    public function password()
    {
        return view("customer.changepass");
    } 
 }

