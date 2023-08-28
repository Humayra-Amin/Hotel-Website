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
        return view("customer.auth.login");
    }  
      
    public function register()
    {
        return view("customer.auth.register");
    }

    public function customerlist()
    {
        return view("customer.auth.customerlist");
    }
    
    public function store(Request $request)
    {
        $request->validate([
            'id' => 'required|max:50',
            'name' => 'required|max:50',
            'email' => 'required|email',
            'roomno' => 'required|integer',
            'status' => 'required',
            'checkin' => 'required|integer',
            'checkout' => 'required|integer',
        ]);
    
    
    
        $customer = new Customer();
        $customer->name = $request->name;
        $customer->email = $request->email;
        $customer->roomno = $request->phone;
        $customer->status = $request->dob;
        $customer->checkin = $request->nid;
        $customer->checkout = $request->position;
    
        $customer->save();
    
    
        return redirect("customer")->with("success", "Customer added.");
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

        return redirect("customer/login")->withErrors('Oppes! You have entered invalid credentials');
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
        Auth::guard("emp")->logout();
  
        return Redirect('customer/login');
    }
 }

