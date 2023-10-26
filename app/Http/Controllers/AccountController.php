<?php

namespace App\Http\Controllers;
use App\Models\Income;
use Illuminate\Http\Request;

class AccountController extends Controller
{
    //
    public function expense()
    {

        return view("admin.Account.expense");

    }
    public function expenselist()
    {

        return view("admin.Account.expenselist");

    }


    public function income()
    {
        $incomes = Income::all();
        return view("admin.account.income")->with('incomes',  $incomes);
    }



}
