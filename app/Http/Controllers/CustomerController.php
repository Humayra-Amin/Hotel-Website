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
        $customers = Customer::all();
        return view("customer.customerlist")->with('customers',  $customers);
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


    public function store(Request $request)
{
    $request->validate([
        'id' => 'required',
        'name' => 'required|max:50',
        'email' => 'required|email',
        'roomno' => 'required',
        'status' => 'required',
        'password'=> 'required',
        'password'=> 'required',


    ]);

    $customer = new Customer();
    $customer->id = $request->id;
    $customer->name = $request->name;
    $customer->email = $request->email;
    $customer->roomno = $request->roomno;
    $customer->status = $request->status;

    $customer->save();

    return redirect("customer")->with("success", "Customer listed");
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

