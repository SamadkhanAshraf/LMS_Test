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
                            <h5>Members</h5>
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
                                           
                                            <th>Name</th>
                                            <th>F/Name</th>
                                            <th>Address</th>
                                            <th>Precidency</th>
                                            <th>Department</th>
                                            <th>Email</th>
                                            <th>Phone</th>
                                            <th>
                                                Action
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($members as $member)
                                        <tr>
                                            
                                            <td>{{$member->name }}</td>
                                            <td>{{$member->fname}}</td>
                                            <td>{{$member->address}}</td>
                                            <td>{{$member->precidency->name}}</td>
                                            <td>{{$member->department->name}}</td>
                                            <td style="width:5%">{{$member->email}}</td>
                                            <td>{{$member->phone}}</td>
                                            
                                           <td class="d-flex">
                                           <a href="{{route('member.edit',$member->id)}}" class="btn btn-primary btn-sm fa fa-edit"></a> | 
                                            <form method="post" action="{{route('member.destroy',$member->id)}}">
                                                @method('delete')
                                                @csrf
                                                
                                                <button type="submit" class="btn btn-xs btn-danger btn-sm fa fa-trash" onclick="return confirm('Are you sure')"></button>
                                            </form>
                                            </td>
                                           </tr>
                                        @endforeach
                                        <a href="{{route('member.create')}}" class="btn btn-primary">Back</a>
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
