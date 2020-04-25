<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Department;
use App\Position;

class DepartmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }


     public function index()
    {
        $data = Department::all();
        // $data = Department::withTrashed()->get();
        // dd($data);
        return view("department/home", [
            "data" => $data
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("department/create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request->validate([
            'name' => 'required|max:255|unique:departments,name',
            'code' => 'required|max:3|min:2',
        ]);


        // dd($request);
        // ORM Biasa
        // $department = new Department;
        // $department->name = $request->name;
        // $department->code = $request->code;
        // $department->save();


        // eloquent mass assignment
        Department::create([
            'name' => $request->name,
            'code' => $request->code
        ]);

        return redirect('/department');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // dd($id);
        $data = Department::where('id','=',$id)->first();
        return view('department/edit',[
            'data' => $data
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        // dd($request);
        // ORM Biasa
        // $department = Department::find($request->id);
        // $department->name = $request->name;
        // $department->code = $request->code;
        // $department->save();

        // ORM Mass assignment
        Department::where('id','=',$request->id)->update([
            'name' => $request->name,
            'code' => $request->code
        ]);

        return redirect('/department');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // ORM
        // $department = Department::find($id);
        // $department->delete();

        // mass asignment
        // Department::where('id', '=', $id)->delete();

        // Department::destroy($id);

        // Force Softdelete
        $department = Department::find($id);
        $department->forceDelete();

        return redirect("/department");
    }
}
