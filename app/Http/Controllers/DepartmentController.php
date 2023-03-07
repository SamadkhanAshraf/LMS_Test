<?php

namespace App\Http\Controllers;
use App\Models\Department;
use App\Models\Precidency;

use Illuminate\Http\Request;

class DepartmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //pass value to view
        $department = Department::all();
        $precidency = Precidency::all();
        return view('department.index',compact('department','precidency'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //reload create view.
        $precidency = Precidency::all();
        return view('department.create',compact('precidency'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $department = new Department();
        //dd($department);
        // $request->validate([
        //     'name'=>'required|max:46',
        //     'description'=>'required|max:64',
        //     'precidency_id'=>'required'
        // ]);

        $department->name= $request->name;
        $department->description = $request->description;
        $department->precidency_id = $request->precidency;

        if($department->save())
        {
                  return redirect()->route('department.create')->with('success','Record added successfully');
        }
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
        //
         //reload view
         $precidencies = Precidency::all();

         $department = Department::find($id);
         return view('department.edit',compact('department','precidencies'));
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
        //edit category
        $department = Department::find($id);
        $request->validate([
            'name'=>'required',
            'description'=>'required',
            'precidency_id'=>'required'
        ]);
        if($id>0)
        {

            $department->fill($request->post())->save();
            // $book->fill($request->post())->save();
            return redirect()->route('department.index')->withSuccess('Record Updated Successfuly.');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $department = Department::find($id);
        if($id>0)
        {
            $department->delete();
            return redirect()->route('department.index')->withSuccess('Recored Deleted Successfuly.');
        }
    }
}
