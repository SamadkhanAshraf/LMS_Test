@extends('layouts.app')
@section('contents')

    <div class="pcoded-inner-content">
        <div class="pcoded-content">
            <!-- [ breadcrumb ] start -->
            <div class="page-header">
                <div class="page-block">
                    <div class="row align-items-center">
                        <div class="col-md-12">
                            <div class="page-header-title">
                                <h5>User card</h5>
                            </div>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html"><i class="feather icon-home"></i></a></li>
                                <li class="breadcrumb-item"><a href="#">Advance Components</a></li>
                                <li class="breadcrumb-item"><a href="#">User card</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- [ breadcrumb ] end -->
            <!-- [ Main Content ] start -->
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h5>Books</h5>
                        </div>
                        @if(Session::get('success', false))
                        <?php $data = Session::get('success'); ?>
                        @if (is_array($data))
                            @foreach ($data as $msg)
                                <div class="alert alert-success" role="alert">
                                    <i class="fa fa-check"></i>
                                    {{ $msg }}
                                </div>
                            @endforeach
                        @else
                            <div class="alert alert-success" role="alert">
                                <i class="fa fa-check"></i>
                                {{ $data }}
                            </div>
                        @endif
                        @endif
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-xs">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Title</th>
                                            <th>Author</th>
                                            <th>Description</th>
                                            <th>Category</th>
                                            <th>Section</th>
                                            <th>Quantity</th>
                                            <th>Edit</th>
                                            <th>Delete</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($books as $book)
                                        <tr>
                                            <td>{{$book->id}}</td>
                                            <td>{{ $book->title }}</td>
                                            <td>{{$book->author}}</td>
                                            <td>{{$book->description}}</td>
                                            <td>{{$book->category->name??'not set'}}</td>
                                            <td>{{$book->section}}</td>
                                            <td>{{$book->quantity}}</td>
                                            <td><a href="{{route('book.edit',$book->id)}}" class="fa fa-edit"></a></td>
                                           <td> <form method="post" action="{{route('book.destroy',$book->id)}}">
                                                @method('delete')
                                                @csrf
                                                <input name="_method" type="hidden" value="DELETE">
                                                 <button type="submit" class="btn btn-xs btn-danger btn-flat show_confirm" data-toggle="tooltip" onclick="<script>document.window('do you want to delete.');</script>" title='Delete'>Delete</button>
                                            </td>
                                           </tr>
                                        @endforeach

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- [ Main Content ] end -->
        </div>
    </div>
<!--     
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js"></script>
<script type="text/javascript">
 
     $('.show_confirm').click(function(event) {
          var form =  $(this).closest("form");
          var name = $(this).data("name");
          event.preventDefault();
          swal({
              title: `Are you sure you want to delete this record?`,
              text: "If you delete this, it will be gone forever.",
              icon: "warning",
              buttons: true,
              dangerMode: true,
          })
          .then((willDelete) => {
            if (willDelete) {
              form.submit();
            }
          });
      });
  
</script> -->
@endsection
