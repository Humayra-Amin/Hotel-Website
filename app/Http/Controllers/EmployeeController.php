<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    //
    public function index()
    {
        $employees = Employee::all();
        return view("employee.pages.index")->with('employees',  $employees);
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
        'eid' => 'required',
        'Locality' => 'required|max:150',
        'email' => 'required|email',
        'phone' => 'required',
        'dob' => 'required',
        'nid' => 'required|integer',
        'position' => 'required',
        'sex' => 'required',
        'salary' => 'required|integer',
        'joiningdate' => 'required',

    ]);


    $employee = new Employee();
    $employee->fname = $request->fname;
    $employee->lname = $request->lname;
    $employee->eid = $request->eid;
    $employee->Locality = $request->Locality;
    $employee->email = $request->email;
    $employee->phone = $request->phone;
    $employee->dob = $request->dob;
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
