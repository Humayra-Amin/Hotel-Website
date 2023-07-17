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
        return view("employee.pages.add");
    }
    public function edit()
    {
        return view("employee.edit");
    }
    public function single()
    {
        return view("employee.single");
    }
}
