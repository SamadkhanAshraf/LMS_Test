<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Issue;
use App\Models\Member;
use App\Models\Precidency;
use App\Models\Book;
use App\Models\Department;

class IssueController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        // return view('issue.index');
        // $books = Book::all();
        // $departments = Department::all();
        // $members = Member::all();
        // $precidencies = Precidency::all();
        $issues = Issue::all();
        return view('issue.index')
            // ->with('books',$books)
            // ->with('departments',$departments)
            // ->with('members',$members)
            // ->with('precidencies',$precidencies)
            ->with('issues',$issues);
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
        $departments = Department::all();
        $members = Member::all();
        $precidencies = Precidency::all();
        $issues = new Issue();
        return view('issue.create')
            ->with('books',$books)
            ->with('departments',$departments)
            ->with('members',$members)
            ->with('precidencies',$precidencies)
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
        //$issues->book_id= $request->bname;
        // {
        //     "data" -> {
        //        "name" : "My Project",
        //        "description" : "This is a fancy description for the project"
        //     }
        //  }
        $request -> validate([
            // 'book_id'=>'required',
            // 'member_id'=>'required',
            // 'precidency_id'=>'required',
            // 'department_id'=>'required',
            // 'issue_date'=>'required',
            // 'return_date' => 'required',
            // 'expire_date' => 'required'
        ]);
        
        $issues = Issue::create(['book_id'=>$request->bname, 'member_id'=>$request->mname, 'precidency_id'=>$request->pname, 'department_id'=>$request->dname,
        'issue_date'=>$request->idate, 'return_date'=>$request->rdate, 'expire_date'=>$request->edate]);
        return redirect()->route('issue.create')->with('created successfuly');

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
        
        $books = Book::all();
        $departments = Department::all();
        $members = Member::all();
        $precidencies = Precidency::all();
        $issues = Issue::find($id);
        return view('issue.edit')
            ->with('books',$books)
            ->with('departments',$departments)
            ->with('members',$members)
            ->with('precidencies',$precidencies)
            ->with('issues',$issues);;
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
        $issue = Issue::find($id);
        if($id>0)
        {
        $issue->delete();
        return redirect()->route('issue.index')
        ->withSuccess(__('Record deleted successfully.'));
        }
        else{
            return redirect()->route('issue.index')
            ->withSuccess(__('Unsuccessful Operation.'));
        }
    }
}
