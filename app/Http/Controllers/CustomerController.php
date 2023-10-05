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
        return view("admin.customerlist")->with('customers',  $customers);

    }



    public function Account()
    {

        return view("customer.Account");
        // $user = auth()-

    }
  


    public function changepassword(Request $request)
    {

        // return view("customer.changepassword");

        $request->validate([
            'password' => 'required',
            'newpassword' => 'required|confirmed',

        ]);

           
        $data = $request->all();
        $check = $this->create($data);

         
        return redirect("/")->withSuccess('Great! You have Successfully loggedin');

    }



    public function services()
    {

        return view("customer.services");

    }



    public function contact()
    {

        return view("customer.contact");

    }


    

    public function Allrooms()
    {

        return view("customer.Allrooms");
        
    } 




    public function postLogin(Request $request)
    {

        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
   
        $credentials = $request->only('email', 'password');



        if (Auth::guard("customers")->attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('/')->withSuccess('You have Successfully loggedin');
        }


        return redirect("/login")->withErrors('Oppes! You have entered invalid credentials');

    }
      


    public function postRegister(Request $request)
    {  

        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:customers',
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


 }

