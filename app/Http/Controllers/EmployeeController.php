<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    //
    public function index()
    {
        return view("employee.index");
    }
    public function add()
    {
        return view("employee.add");
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
