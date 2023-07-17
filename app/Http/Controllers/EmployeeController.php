<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    //
    public function index()
    {
        return view("employee.pages.index");
    }
    public function add()
    {
        return view("employee.add");
    }
    public function edit()
    {
        return view("employee.pages.edit");
    }
    public function single()
    {
        return view("employee.single");
    }
}
