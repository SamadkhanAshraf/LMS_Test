@extends('layouts.app')


@section('contents')
<div class="pcoded-inner-content">
    <div class="pcoded-content">
        <!-- [ breadcrumb ] start -->
        <!-- <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <div class="page-header-title">
                            <h5>User card</h5>
                        </div> -->
                        <!-- <ul class="breadcrumb"> -->
                            <!-- <li class="breadcrumb-item"><a href="index.html"><i class="feather icon-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="#">Advance Components</a></li>
                            <li class="breadcrumb-item"><a href="#">User card</a></li>
                        </ul> -->
                    <!-- </div>
                </div>
            </div>
        </div> -->
        <!-- [ breadcrumb ] end -->
        <!-- [ Main Content ] start -->
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Issue Book</h5>
                    </div>
                    <div class="card-body">
                            {{-- <x-home.messages.msg-error/> --}}

                        <div class="row">
                            <div class="col-md-12">

                                    <form action="{{ route('issue.store') }}" method="post">
                                        @method('post')
                                        @csrf
                                        <div class="row">
                                                <div class="form-group col-md-6">
                                                <label class="form-label" for="mname">Member name</label>
                                                <select class="form-select {{ $errors->has('mname')?'is-invalid':'' }}" id="member-name" name="mname">
                                                    <option value="" selected>Select Member</option>
                                                    @forelse ($issues as $issue)
                                                        <option value="{{$issue->member_id}}">{{$issue->member->name}}</option>
                                                    @empty
                                                    @endforelse
                                                <small>{{ $errors->first('mname') }}</small>
                                                </select>
                                            </div>
                                            {{-- Book --}}
                                                <div class="form-group col-md-6">

                                                    <label class="form-label" for="bname">Book name</label>
                                                    <select class="form-select {{ $errors->has('bname')?'is-invalid':'' }}" id="return-books" name="bname">
                                                        <option value="" selected>Select Book</option>
                                                    <small>{{ $errors->first('bname') }}</small>
                                                    </select>

                                            </div>
                                        </div>
                                        <div class="row">
                                            <!-- Catergory -->
                                            <div class="form-group col-md-6">

                                                    <label class="form-label" for="cname">Category name</label>
                                                    <select class="form-select {{ $errors->has('cname')?'is-invalid':'' }}" id="cname" name="cname">

                                                        <option value="" selected>Select Category</option>
                                                            @forelse ($issues as $issue)
                                                                <option value="{{$issue->book_id}}">{{$issue->book->title}}</option>
                                                            @empty
                                                            @endforelse
                                                    <small>{{ $errors->first('cname') }}</small>
                                                    </select>
                                            </div>
                                            <!-- end select -->

                                                <!-- start picker -->
                                                <div class="form-group col-md-6">
                                                <label class="form-label" for="rdate">Return Date</label>
                                                <input type="date" class="form-control {{ $errors->has('rdate')?'is-invalid':'' }}" placeholder="" name="rdate">
                                                <small class="text-danger">{{ $errors->first('rdate'); }}</small>
                                            </div>
                                            <!-- end picker -->
                                        </div>
                                        <div class="row">
                                            <!-- start select -->
                                            <div class="form-group col-md-6">

                                                    <label class="form-label" for="pname">Precidency name</label>
                                                    <select class="form-select {{ $errors->has('pname')?'is-invalid':'' }}" id="return-precidency" name="pname">
                                                        <option value="" selected>Select Precidency</option>
                                                    <small>{{ $errors->first('pname') }}</small>
                                                    </select>
                                            </div>
                                            <!-- end select -->
                                        </div>


                                <button type="submit" class="btn  btn-primary">{{__('nav.save')}}</button>
                                <a href="{{route('issue.index')}}" class="btn  btn-primary">{{__('nav.back')}}</a>

                                    </form>
                            </div>
                            <div class="col-md-6">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- [ Main Content ] end -->
    </div>
</div>
@endsection
@section('script')

{{-- <script>
   document.getElementById('member-name').addEventListener('change',(e)=>{
        let memberId= e.target.value;
        let option = '';
        if(memberId!==''){
            fetch(`/member-related-books/${memberId}`).then((res)=>res.json()).then((data)=>{
               data.books.map((book)=>{
                option +=`<option value='${book.id}'>${book.title}</option>`
               })
              // document.getElementById('return-books').append(option)
               document.getElementById('return-books').innerHTML=option;
               console.log(option)
            })
        }
   })
</script> --}}
<script>
    document.getElementById('member-name').addEventListener('change',(e)=>{
         let memberId= e.target.value;
         let option = '';
         if(memberId!==''){
             fetch(`/member-related-books/${memberId}`).then((res)=>res.json()).then((data)=>{
                data.books.map((book)=>{
                 option +=`<option value='${book.id}'>${book.title}</option>`
                })
               // document.getElementById('return-books').append(option)
                document.getElementById('return-books').innerHTML=option;
                console.log(option)
             });
         }
         //second if condition
        //  if(precidencyId!==''){
        //      fetch(`/member-related-precidency/${precidencyId}`).then((res1)=>res1.json()).then((data1)=>{
        //         data1.precidency.map((precidency)=>{
        //          optionSecond +=`<option value='${precidency.id}'>${precidency.name}+ 'hi'</option>`
        //         })
        //        // document.getElementById('return-books').append(option)
        //         document.getElementById('return-precidency').innerHTML=option;
        //         console.log(option)
        //      })
        //  }
    });
 </script>
 <script>
    document.getElementById('member-name').addEventListener('change',(e)=>{
         let precidencyId= e.target.value;
         let optionSecond = '';
         //second if condition
         if(precidencyId!==''){
             fetch(`/member-related-precidency/${precidencyId}`).then((res1)=>res1.json()).then((data1)=>{
                data1.precidency.map((precidency)=>{
                 optionSecond +=`<option value='${precidency.id}'>${precidency.name}</option>`
                })
               // document.getElementById('return-books').append(option)
                document.getElementById('return-precidency').innerHTML=optionSecond;
                console.log(optionSecond)
             });
            // second fetch
         }
    })66
 </script>
@endsection
