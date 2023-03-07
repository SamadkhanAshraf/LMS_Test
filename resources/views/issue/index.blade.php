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
                                    <h5 class="m-b-10">Add Rows</h5>
                                </div>
                                <ul class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html"><i class="feather icon-home"></i></a></li>
                                    <li class="breadcrumb-item"><a href="#!">Table</a></li>
                                    <li class="breadcrumb-item"><a href="#!">Add Rows</a></li>
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
                                    <div class="card-header">
                                        <h5>Add Rows</h5>
                                    </div>
                                    <div class="card-block table-border-style">
                                        <button class="btn btn-primary" id="add">Add 1000 Rows</button>                                        
                                        <div class="table-responsive">
                                            <div class="dataTable-wrapper dataTable-loading no-footer sortable searchable fixed-columns"><div class="dataTable-top"><div class="dataTable-dropdown"><label><select class="dataTable-selector"><option value="10" selected="">10</option><option value="20">20</option><option value="30">30</option><option value="40">40</option><option value="50">50</option><option value="100">100</option><option value="200">200</option><option value="300">300</option><option value="400">400</option><option value="500">500</option><option value="1000">1000</option></select> entries per page</label></div><div class="dataTable-search"><input class="dataTable-input" placeholder="Search..." type="text"></div></div><div class="dataTable-container"><table class="table dataTable-table" id="pc-dt-addrow">
                                                
                                                
                                            <thead><tr><th data-sortable="" style="width: 27.6134%;" class="asc"><a href="#" class="dataTable-sorter">Name</a></th><th data-sortable="" style="width: 8.77712%;" class=""><a href="#" class="dataTable-sorter">Ext.</a></th><th data-sortable="" style="width: 24.7535%;" class=""><a href="#" class="dataTable-sorter">City</a></th><th data-sortable="" data-type="date" data-format="YYYY/DD/MM" class="" style="width: 18.2446%;"><a href="#" class="dataTable-sorter">Start Date</a></th><th data-sortable="" style="width: 20.6114%;"><a href="#" class="dataTable-sorter">Completion</a></th></tr></thead><tbody><tr><td>Adrienne Winters</td><td></td><td>Laguna Blanca</td><td>2014/15/09</td><td>24%</td></tr><tr><td>Adrienne Winters</td><td></td><td>Laguna Blanca</td><td>2014/15/09</td><td>24%</td></tr><tr><td>Adrienne Winters</td><td></td><td>Laguna Blanca</td><td>2014/15/09</td><td>24%</td></tr><tr><td>Adrienne Winters</td><td></td><td>Laguna Blanca</td><td>2014/15/09</td><td>24%</td></tr><tr><td>Adrienne Winters</td><td></td><td>Laguna Blanca</td><td>2014/15/09</td><td>24%</td></tr><tr><td>Adrienne Winters</td><td></td><td>Laguna Blanca</td><td>2014/15/09</td><td>24%</td></tr><tr><td>Adrienne Winters</td><td></td><td>Laguna Blanca</td><td>2014/15/09</td><td>24%</td></tr><tr><td>Adrienne Winters</td><td></td><td>Laguna Blanca</td><td>2014/15/09</td><td>24%</td></tr><tr><td>Adrienne Winters</td><td></td><td>Laguna Blanca</td><td>2014/15/09</td><td>24%</td></tr><tr><td>Adrienne Winters</td><td></td><td>Laguna Blanca</td><td>2014/15/09</td><td>24%</td></tr></tbody></table></div><div class="dataTable-bottom"><div class="dataTable-info">Showing 1 to 10 of 2000 entries</div><nav class="dataTable-pagination"><ul class="dataTable-pagination-list"><li class="active"><a href="#" data-page="1">1</a></li><li class=""><a href="#" data-page="2">2</a></li><li class=""><a href="#" data-page="3">3</a></li><li class=""><a href="#" data-page="4">4</a></li><li class=""><a href="#" data-page="5">5</a></li><li class=""><a href="#" data-page="6">6</a></li><li class=""><a href="#" data-page="7">7</a></li><li class="ellipsis"><a href="#">…</a></li><li class=""><a href="#" data-page="200">200</a></li><li class="pager"><a href="#" data-page="2">›</a></li></ul></nav></div></div>
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
