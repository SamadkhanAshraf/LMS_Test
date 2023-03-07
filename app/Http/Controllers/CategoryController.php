<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $category = Category::all();
        return view('category.index', compact('category'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('category.create');
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
        $category = new Category();
        $request->validate([
            'name'=>'required|max:46',
            'description'=>'required|max:64',
        ]);

        $category->name= $request->name;
        $category->description = $request->description;
        if($category->save())
        {
                  return redirect()->route('category.create')->with('success','Record added successfully');
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
        //reload view
        $category = Category::find($id);
        return view('category.edit',compact('category'));
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
        //edit category
        $category = Category::find($id);
        $request->validate([
            'name'=>'required',
            'description'=>'required',
        ]);
        if($id>0)
        {

            $category->fill($request->post())->save();
            // $book->fill($request->post())->save();
            return redirect()->route('category.index')->withSuccess('Record Updated Successfuly.');
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
        //delete a record.
        $category = Category::find($id);
        if($id>0)
        {
            $category->delete();
            return redirect()->route('category.index')->withSuccess('Recored Deleted Successfuly.');
        }
    }
}
