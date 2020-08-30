<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    //
    public function index()
    {
        return view('index');
    }

    public function hellos($nama)
    {
        return $nama;
    }

    public function create()
    {
        return view('create');
    }

}
