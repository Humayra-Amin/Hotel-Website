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
    $request->validate([
        'fname' => 'required|max:50',
        'lname' => 'required|max:50',
        'eid' => 'required|integer|size:10',
        'Locality' => 'required|max:150',
        'email' => 'required|email|unique:user',
        'phone' => 'required|integer|size:11',
        'date' => 'required',
        'nid' => 'required|integer|size:20',
        'position' => 'required',
        'sex' => 'required|max:10',
        'salary' => 'required|integer|size:10',
        'joiningdate' => 'required',

    ]);


    $employee = new Employee();
    $employee->fname = $request->fname;
    $employee->lname = $request->lname;
    $employee->eid = $request->eid;
    $employee->Locality = $request->Locality;
    $employee->email = $request->email;
    $employee->phone = $request->phone;
    $employee->date = $request->date;
    $employee->nid = $request->nid;
    $employee->position = $request->position;
    $employee->sex = $request->sex;
    $employee->salary = $request->salary;
    $employee->joiningdate = $request->joiningdate;

    $employee->save();

    return redirect("employee");
}
public function update(Request $request)
{
    return $request;
}
}
