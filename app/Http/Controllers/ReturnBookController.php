<?php

namespace App\Http\Controllers;
use App\Models\Book;
use App\Models\Member;
use App\Models\Issue;
use App\Models\Precidency;
use Illuminate\Http\Request;

class ReturnBookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        $books = Book::all();
        return view('return.index')->with('books',$books);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $books = Book::all();
        $members = Member::all();
        $issues = Issue::all();
        return view('return.create')
                        ->with('books',$books)
                        ->with('members',$members)
                        ->with('issues',$issues);
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
        //
    }




    public function getBooks($id){
        $issues = Issue::where('member_id',$id)->get();
        $books= array();

        if($issues->isNotEmpty()){
            foreach ($issues as $key => $issueBook) {
                array_push($books,Book::where('id',$issueBook->book_id)->get()->first());
            }
            return response()->json(['books'=>$books,'status'=>200]);
        }
        else{
            return response()->json(['msg'=>'record not found','status'=>200]);
        }
    }
    public function getPrecidency($id){
        $issues = Issue::where('member_id',$id)->get();
        $precidency= array();

        if($issues->isNotEmpty()){
            foreach ($issues as $key => $issueBook) {
                array_push($precidency,Precidency::where('id',$issueBook->precidency_id)->get()->first());
            }
            return response()->json(['precidency'=>$precidency,'status'=>200]);
        }
        else{
            return response()->json(['msg'=>'record not found','status'=>200]);
        }
    }
}
