<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RoomController extends Controller
{
    //
    public function index()
    {
        return view("room.index");
    }
    public function add()
    {
        return view("room.add");
    }
    public function edit()
    {
        return view("room.edit");
    }
    public function single()
    {
        return view("room.single");

    }
    public function store(Request $request)
    {
        return $request;
    }
}
