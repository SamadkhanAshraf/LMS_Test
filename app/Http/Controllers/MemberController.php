<?php

namespace App\Http\Controllers;
use \App\Models\Precidency;
use \App\Models\Department;
use \App\Models\Member;
use Illuminate\Http\Request;

class MemberController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $members = Member::all();
        return view('member.index',compact('members'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $precidencies = Precidency::all();
        $departments = Department::all();

        return view('member.create',compact('departments', 'precidencies'));
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
        $members = new Member();
        $request->validate([
            'name'=>'required',
            'fname'=>'required',
            'address'=>'required',
            'phone'=>'required',
            'email'=>'required'
        ]);
        $members->name = $request->name;
        $members->fname = $request->fname;
        $members->address = $request->address;
        $members->precidency_id = $request->precidency;
        $members->department_id = $request->department;
        $members->phone = $request->phone;
        $members->email = $request->email;
        
        if($members->save())
        {
            return redirect()->back()->withSuccess('Recored Added Successfuly.');;
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
        $precidencies = Precidency::all();
        $departments = Department::all();
        $members = Member::find($id);
        return view('member.edit',['precidencies'=>$precidencies,'departments'=>$departments,'members'=>$members]);
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
        $members = Member::find($id);
        //     $request -> validate([
    //         'title'=>'required|max:46',
    //         'author'=>'required|max:64',
    //         'description'=>'required',
    //         'category'=>'required',
    //         'quantity'=>'required',
    //         'section' => 'required'
    //         ]
    // );

        $members->fill($request->post())->save();

    return redirect()->route('member.index')->withSuccess(__('Record Updated successfully.'));
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
        $members = Member::find($id);
        if($id>0)
        {
            $members->delete();
            return redirect()->route('member.index')->withSuccess('Recored Deleted Successfuly.');
        }
    }
}
