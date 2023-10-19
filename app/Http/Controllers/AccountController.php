<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AccountController extends Controller
{
    //
    public function expense()
    {

        return view("admin.Account.expense");

    }


    public function income()
    {

        return view("admin.Account.income");

    }


}
