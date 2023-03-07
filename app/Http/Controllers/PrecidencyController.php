<?php

namespace App\Http\Controllers;

use App\Models\Precidency;
use Illuminate\Http\Request;

class PrecidencyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $precidency = Precidency::all();
        return view('precidency.index',compact('precidency'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('precidency.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //add record.
        $precidency = new Precidency();
        $request->validate([
            'name'=>'required|min:2|max:32',
            'description'=>'required|min:5|max:64'
        ]);
        $precidency->name = $request->name;
        $precidency->description = $request->description;
        if($precidency->save())
        {
            return redirect()->route('precidency.create')->withSuccess('Recored Added Successfuly.');
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Precidency  $precidency
     * @return \Illuminate\Http\Response
     */
    public function show(Precidency $precidency)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Precidency  $precidency
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $precidency = Precidency::find($id);
        return view('precidency.edit',compact('precidency'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Precidency  $precidency
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //edit precidency
        $precidency = Precidency::find($id);
        $request->validate([
            'name'=>'required',
            'description'=>'required',
        ]);
        if($id>0)
        {

            $precidency->fill($request->post())->save();
            // $book->fill($request->post())->save();
            return redirect()->route('precidency.index')->withSuccess('Record Updated Successfuly.');
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Precidency  $precidency
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //delete
        $precidency = Precidency::find($id);
        if($id>0)
        {
            $precidency->delete();
            return redirect()->route('precidency.index')->withSuccess('success','Record Deleted Successfuly.');
        }
    }
}
