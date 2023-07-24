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
        return view("employee.pages.edit");
    }
    public function single()
    {
        return view("employee.pages.single");
    }
    
    public function store(Request $request)
{
    return $request;
}
public function update(Request $request)
{
    return $request;
}
}
