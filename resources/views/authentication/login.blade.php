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
        <div class="col-md-4">
            <form action="{{route('user.login')}}" method="post">
                @csrf
                @method('post')
                <div class="card">
                    <div class="card-header">
                        <h4 style="text-align:center;">Login Form</h4>
                    </div>
                    <div class="card-body">
                        @if (Session::has('success'))
                        <div class="alert alert-primary">{{Session::get('success')}}</div>
                        @endif
                        @if (Session::has('fail'))
                        <div class="alert alert-danger">{{Session::get('fail')}}</div>
                        @endif
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" name="email" placeholder="Enter Email" value="">
                            @error('email')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" class="form-control" name="password" placeholder="Enter Password" value="">
                            @error('password')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btn btn-primary" value="Login">
                        </div>
                        <a href="{{route('register')}}" style="text-align: center;">Don`t have an account | Registeration</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
