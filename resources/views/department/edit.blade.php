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
                                    <h5>Add Department</h5>
                                </div>
                                <div class="card-body">
                                        {{-- <x-home.messages.msg-error/> --}}

                                    <div class="row">
                                        <div class="col-md-12">

                                                <form action="{{ route('department.update',$department->id) }}" method="post">
                                                    @method('put')
                                                    @csrf
                                                    <div class="row">
                                                        <div class="form-group col-md-6">
                                                            <label class="form-label">Department name</label>
                                                            <input type="text" class="form-control {{ $errors->has('name')?'is-invalid':'' }}" placeholder="Department Name" name="name" value="{{$department->name}}">
                                                            <small class="text-danger">{{ $errors->first('name') }}</small>
                                                        </div>

                                                        <div class="form-group col-md-6">
                                                            <label class="form-label">Department description</label>
                                                            <textarea class="form-control {{ $errors->has('description')?'is-invalid':'' }}" placeholder="Department Description " name="description">{{$department->description}}</textarea>
                                                            <small class="text-danger">{{ $errors->first('description'); }}</small>
                                                        </div>
                                                        <div class="form-group col-md-6">
                                                            <label class="form-label" for="precidency">Precidency</label>
                                                            <select class="form-select {{ $errors->has('precidency')?'is-invalid':'' }}" id="b_category" name="precidency">

                                                                @forelse ($precidencies as $precidency)
                                                                    <option value="{{$precidency->id===$department->precidency_id?'selected':''}}">{{$precidency->name}}</option>
                                                                @empty
                                                                @endforelse
                                                            <small>{{ $errors->first('precidency') }}</small>
                                                            </select>
                                                    </div>
                                                    </div>
                                                <button type="submit" class="btn  btn-primary">{{__('nav.edit')}}</button>
                                                </form>
                                        </div>
                                        <div class="col-md-6">

                                        </div>
                                    </div>

                                    <script>
                                        // Example starter JavaScript for disabling form submissions if there are invalid fields
                                        (function () {
                                            'use strict';
                                            window.addEventListener('load', function () {
                                                // Fetch all the forms we want to apply custom Bootstrap validation styles to
                                                var forms = document.getElementsByClassName(
                                                    'needs-validation');
                                                // Loop over them and prevent submission
                                                var validation = Array.prototype.filter.call(forms,
                                                    function (form) {
                                                        form.addEventListener('submit', function (
                                                            event) {
                                                            if (form.checkValidity() ===
                                                                false) {
                                                                event.preventDefault();
                                                                event.stopPropagation();
                                                            }
                                                            form.classList.add(
                                                                'was-validated');
                                                        }, false);
                                                    });
                                            }, false);
                                        })();
                                    </script>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- [ Main Content ] end -->
                </div>
            </div>

    <!-- [ Main Content ] end -->

        <!-- Warning Section start -->
        <!-- Older IE warning message -->
        <!--[if lt IE 11]>
            <div class="ie-warning">
                <h1>Warning!!</h1>
                <p>You are using an outdated version of Internet Explorer, please upgrade
                   <br/>to any of the following web browsers to access this website.
                </p>
                <div class="iew-container">
                    <ul class="iew-download">
                        <li>
                            <a href="http://www.google.com/chrome/">
                                <img src="../assets/images/browser/chrome.png" alt="Chrome">
                                <div>Chrome</div>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.mozilla.org/en-US/firefox/new/">
                                <img src="../assets/images/browser/firefox.png" alt="Firefox">
                                <div>Firefox</div>
                            </a>
                        </li>
                        <li>
                            <a href="http://www.opera.com">
                                <img src="../assets/images/browser/opera.png" alt="Opera">
                                <div>Opera</div>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.apple.com/safari/">
                                <img src="../assets/images/browser/safari.png" alt="Safari">
                                <div>Safari</div>
                            </a>
                        </li>
                        <li>
                            <a href="http://windows.microsoft.com/en-us/internet-explorer/download-ie">
                                <img src="../assets/images/browser/ie.png" alt="">
                                <div>IE (11 & above)</div>
                            </a>
                        </li>
                    </ul>
                </div>
                <p>Sorry for the inconvenience!</p>
            </div>
        <![endif]-->
        <!-- Warning Section Ends -->

        <!-- Required Js -->
        <script src="{{ asset('dashboard_assets/assets/js/plugins/popper.min.js') }}"></script>
        <script src="{{ asset('dashboard_assets/assets/js/plugins/perfect-scrollbar.min.js') }}"></script>
        <script src="{{ asset('dashboard_assets/assets/js/plugins/bootstrap.min.js') }}"></script>
        <script src="{{ asset('dashboard_assets/assets/js/pcoded.js') }}"></script>

        <script src="{{ asset('dashboard_assets/assets/js/menu-setting.js') }}"></script>
</body>


@endsection
