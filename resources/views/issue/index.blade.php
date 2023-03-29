@extends('layouts.app')
@section('contents')

<div class="pcoded-wrapper">
        <div class="pcoded-content">
            <div class="pcoded-inner-content">
                <!-- [ breadcrumb ] start -->
                <div class="page-header">
                    <div class="page-block">
                        <div class="row align-items-center">
                            <div class="col-md-12">
                                <div class="page-header-title">
                                    <h5 class="m-b-10">Basic Tables</h5>
                                </div>
                                <ul class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html"><i class="feather icon-home"></i></a></li>
                                    <li class="breadcrumb-item"><a href="#!">Table</a></li>
                                    <li class="breadcrumb-item"><a href="#!">Basic Tables</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- [ breadcrumb ] end -->
                <div class="main-body">
                    <div class="page-wrapper">
                        <!-- [ Main Content ] start -->
                        <div class="row">
                            <!-- [ basic-table ] start -->
                            <div class="col-xl-12">
                                <div class="card">
                                    
                                    <div class="card-block table-border-style">
                                        <div class="table-responsive">
                                            <div class="dataTable-wrapper dataTable-loading no-footer sortable searchable fixed-columns">
                                                <div class="dataTable-top">
                                                    <div class="dataTable-dropdown">
                                                        <label><select class="dataTable-selector">
                                                            <option value="5">5</option><option value="10" selected="">10</option>
                                                            <option value="15">15</option><option value="20">20</option>
                                                            <option value="25">25</option></select> entries per page</label>
                                                        </div>
                                                        <div class="dataTable-search">
                                                            <input class="dataTable-input" placeholder="Search..." type="text">
                                                        </div>
                                                    </div>
                                                    <div class="dataTable-container">
                                                        <table class="table dataTable-table" id="pc-dt-simple">
                                                <thead>
                                                    <tr>
                                                    <th data-sortable="" style="width: 14.1%;">
                                                    <a href="#" class="dataTable">Book Name</a>
                                                    </th>
                                                    <th data-sortable="" style="width: 14.1%;">
                                                    <a href="#" class="dataTable">Member Name</a>
                                                </th>
                                                <th data-sortable="" style="width:14.1%;">
                                                <a href="#" class="dataTable">Precidency name</a>
                                            </th>
                                                </th>
                                                <th data-sortable="" style="width: 15.1%;">
                                                <a href="#" class="dataTable">Department name</a>
                                            </th>
                                            <th data-type="date" data-format="YYYY/DD/MM" data-sortable="" style="width: 14.1%;">
                                            <a href="#" class="dataTable">Issue Date</a>
                                        </th>
                                            </th>
                                            <th data-type="date" data-format="YYYY/DD/MM" data-sortable="" style="width: 14.1%;">
                                            <a href="#" class="dataTable">Return Date</a>
                                        </th>
                                            </th>
                                            <th data-type="date" data-format="YYYY/DD/MM" data-sortable="" style="width: 14.1%;">
                                            <a href="#" class="dataTable">Expire Date</a>
                                        </th>
                                        <th data-sortable="" style="width: 14.1%;">
                                        <a href="#" class="dataTable">Actions</a>
                                        </th>
                                </tr>
                                </thead>
                                <tbody>
                                                      @forelse ($issues as $issue)
                                                    <tr>
                                                        <td>{{$issue->book->title??'not set'}}</td>
                                                        <td>{{$issue->member->name??'not set'}}</td>
                                                        <td>{{$issue->precidency->name??'not set'}}</td>
                                                        <td>{{$issue->department->name??'not set'}}</td>
                                                        <td>{{$issue->issue_date}}</td>
                                                        <td>{{$issue->return_date}}</td>
                                                        <td>{{$issue->expire_date}}</td>
                                                        <td class="d-flex"><a href="{{route('issue.edit',$issue->id)}}" class="fa fa-edit"></a>
                                                         <form method="post" action="{{route('issue.destroy',$issue->id)}}">
                                                        @method('delete')
                                                        @csrf
                                                        <input name="_method" type="hidden" value="DELETE">
                                                        <button type="submit" class="btn btn-sm btn-danger fa fa-trash" data-toggle="tooltip" onclick="<script>document.window('do you want to delete.');</script>" title='Delete'></button>
                                                        </td>
                                                    </tr>   
                                                        @empty
                                                    @endforelse
                                                    </tbody>
                                            </table>
                                        </div>
                                        <div class="dataTable-bottom">
                                            <div class="dataTable-info">Showing 1 to 10 of 100 entries</div><nav class="dataTable-pagination"><ul class="dataTable-pagination-list"><li class="active"><a href="#" data-page="1">1</a></li><li class=""><a href="#" data-page="2">2</a></li><li class=""><a href="#" data-page="3">3</a></li><li class=""><a href="#" data-page="4">4</a></li><li class=""><a href="#" data-page="5">5</a></li><li class=""><a href="#" data-page="6">6</a></li><li class=""><a href="#" data-page="7">7</a></li><li class="ellipsis"><a href="#">…</a></li><li class=""><a href="#" data-page="10">10</a></li><li class="pager"><a href="#" data-page="2">›</a></li></ul></nav></div></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- [ basic-table ] end -->
                        </div>
                        <!-- [ Main Content ] end -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection
