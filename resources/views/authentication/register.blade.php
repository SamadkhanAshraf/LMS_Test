<link href='https://cdn.jsdelivr.net/npm/sweetalert2@10.10.1/dist/sweetalert2.min.css'>
<link rel="icon" href="{{ asset('dashboard_assets/assets/images/favicon.ico') }}" type="image/x-icon">

<!-- vendor css -->
<link rel="stylesheet" href="{{ asset('dashboard_assets/assets/css/plugins/style.css') }}">
<link rel="stylesheet" href="{{ asset('dashboard_assets/assets/css/style.css') }}">
<link rel="stylesheet" href="{{ asset('dashboard_assets/assets/css/plugins/datepicker-bs5.min.css') }}">
<link rel="stylesheet" href="{{ asset('dashboard_assets/assets/images/favicon.ico') }}" type="image/x-icon">
<link rel="stylesheet" href="{{ asset(' dashboard_assets/assets/images/user/avatar-4.jpg') }}" type="image/x-icon">




<div class="container d-flex" style="height: 100vh;">
    <div class="row justify-content-center w-100 my-auto">
        <div class="col-md-5">
            <form action="{{route('user.register')}}" method="post">
                @csrf
                @method('put')
                <div class="card">
                    <div class="card-header">
                        <h5 text-align="center">Register Form</h5>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            @if (Session::has('success'))
                                <div class="alert alert-primary">{{Session::get('success')}}</div>
                            @endif
                            <label for="name">Full Name</label>
                            <input type="text" class="form-control" name="name" placeholder="Enter Full Name" value="{{old('name')}}">
                            <small class="text-danger">
                                @error('name')
                                    {{$message}}
                                @enderror
                            </small>
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" name="email" placeholder="Enter Email" value="{{old('email')}}">
                            <small class="text-danger">
                                @error('email')
                                    {{$message}}
                                @enderror
                            </small>
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" class="form-control" name="password" placeholder="Enter Password" value="{{old('password')}}">
                            <small class="text-danger">
                                @error('password')
                                    {{$message}}
                                @enderror
                            </small>
                        </div>
                        <div class="form-group">
                            <label for="confirm">Confirm Password</label>
                            <input type="password" class="form-control" name="confirm" placeholder="Enter Confirm Password" value="{{old('confirm')}}">
                            <small class="text-danger">
                                @error('confirm')
                                    {{$message}}
                                @enderror
                            </small>
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btn btn-primary" value="Register">
                        </div>
                        <a href="{{route('login')}}" style="text-align: center;">Already, have an account | Login</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
