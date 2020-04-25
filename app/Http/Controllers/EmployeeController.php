<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use Illuminate\Support\Facades\DB;
// use DB;
use App\Position;
use App\Employee;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    public function index()
    {
        $title = "Employee";
        $data = Employee::all();
        // dd($data);
        return view('employee/home', [
            'judul' => $title,
            'data' => $data
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = "Employee";
        $position = Position::all();
        return view('employee/create', [
            'judul' => $title,
            'position' => $position
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Employee::create([
            'position_id' => $request->position_id,
            'name' => $request->name,
            'alamat' => $request->alamat,
            'email' => $request->email,
            'phone' => $request->phone,
            ]);

        return redirect('/employee');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $title = "Employee";
        $data = Employee::where('id','=',$id)->first();
        return view('employee/show', [
            'judul' => $title,
            'data' => $data
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $title = "Employee";
        $position = Position::all();
        $data = Employee::where('id','=',$id)->first();
        return view('employee/edit', [
            'judul' => $title,
            'data' => $data,
            'position' => $position
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // ORM Mass Assignment
        Employee::where('id','=',$id)->delete();

        return redirect('/employee');
    }
}
