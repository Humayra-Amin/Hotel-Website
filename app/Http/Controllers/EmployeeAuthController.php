<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Contracts\Session\Session;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

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
        return redirect()->intended('dashboard')
                    ->withSuccess('You have Successfully loggedin');
    }
   
    return redirect("login")->withSuccess('Oppes! You have entered invalid credentials');
}

public function postRegistration(Request $request)
{  
    $request->validate([
        'name' => 'required',
        'email' => 'required|email',
        'password' => 'required',
    ]);
       
    $data = $request->all();
    $check = $this->create($data);
     
    return redirect("dashboard")->withSuccess('Great! You have Successfully loggedin');
}

public function create(array $data)
{
  return User::create([
    'name' => $data['name'],
    'email' => $data['email'],
    'password' => Hash::make($data['password'])
  ]);
}


// public function logout() {
//     Session::flush();
//     Auth::logout();

//     return Redirect('login');
// }

}

