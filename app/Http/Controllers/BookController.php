<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\Category;
use App\Models\Cetegory;


class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //return a view to add new book.
        $books = Book::all();
        return view('book.index',compact('books'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $category = \DB::table('categories')->get();
        return view('book.create', compact('category'));
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
        $request -> validate([
            'title'=>'required|max:46',
            'author'=>'required|max:64',
            'description'=>'required',
            'category'=>'required',
            'quantity'=>'required',
            'section' => 'required'
            ]
    );
        $book = new Book();
        $book->title = $request->title;
        $book->author = $request->author;
        $book->description = $request->description;
        $book->category_id = $request->category;
        $book->section = $request->section;
        $book->quantity = $request->quantity;
//dd($book);
        if($book->save())
        {
            return redirect()->route('book.create')->with('success','Record Added Successfuly.');
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
        $book = Book::find($id);
        $category = Category::all();
        return view('book.edit',['book'=>$book,'category'=>$category]);
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
        $book = Book::find($id);
    //     $request -> validate([
    //         'title'=>'required|max:46',
    //         'author'=>'required|max:64',
    //         'description'=>'required',
    //         'category'=>'required',
    //         'quantity'=>'required',
    //         'section' => 'required'
    //         ]
    // );

         $book->fill($request->post())->save();

        return redirect()->route('book.index')->withSuccess(__('Record Added successfully.'));
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
        $book = Book::find($id);
        if($id>0)
        {
        $book->delete();
        return redirect()->route('book.index')
        ->withSuccess(__('Record deleted successfully.'));
        }
        else{
            return redirect()->route('book.index')
            ->withSuccess(__('Unsuccessful Operation.'));
        }
    }
}
