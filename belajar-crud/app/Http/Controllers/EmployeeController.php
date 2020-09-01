<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class EmployeeController extends Controller
{
    //
    public function index()
    {
        $employees = DB::table('employees')->get();

        return view('index', compact('employees')); //1
        // return view('index', ['employees' => $employees]); //2
        // return view('index')->with([
        //     'employees' => $employees
        // ]); //3
    }

    public function store(Request $request)
    {
        $jeneng = $request->name; //ilma
        $jabatan = $request->jabatan;
        $telephone = $request->telephone;
        $address = $request->address;

        $isTrue = DB::table('employees')->insert([
            'name' => $jeneng,
            'jabatan' => $jabatan,
            'telephone' => $telephone,
            'address' => $address,
        ]);

        if($isTrue){
            return redirect('index');
        }

        return redirect('create');
    }

    public function delete($id)
    {
       DB::table('employees')
            ->where('id', $id)
            ->delete();

        return redirect('index');
    }

    public function hellos($nama)
    {
        return "Hello ".$nama;
    }

    public function create()
    {
        return view('create');
    }

}
