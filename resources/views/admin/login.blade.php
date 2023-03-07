
<!DOCTYPE html>
<html lang="en">

<head>

	<title>Gradient Able bootstrap admin template by codedthemes</title>
	<!-- HTML5 Shim and Respond.js IE11 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 11]>
		<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
	<!-- Meta -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="description" content="" />
	<meta name="keywords" content="">
	<meta name="author" content="Codedthemes" />
	<!-- Favicon icon -->
	<link rel="icon" href="{{ asset('admin_assets/assets/images/favicon.ico') }}" type="image/x-icon">

	<!-- vendor css -->
	<link rel="stylesheet" href="{{ asset('admin_assets/assets/css/style.css') }}">




</head>
<body>
    {{-- @auth
        @include('admin.layouts.partials.header')
    @endauth --}}

<!-- [ auth-signin ] start -->
<div class="auth-wrapper">
	<div class="auth-content">
		<div class="card">
			<div class="row align-items-center text-center">
				<div class="col-md-12">
					<div class="card-body">
                        <form method="POST" action="{{ route('login') }}" >
                            @csrf
						<img src="{{ asset('admin_assets/assets/images/logo-dark.png') }}" alt="" class="img-fluid mb-4">
						<h4 class="mb-3 f-w-400">Signin</h4>
						<div class="input-group mb-3">
							<span class="input-group-text"><i class="feather icon-mail"></i></span>
							<input type="email" class="form-control {{ $errors->has('email') ? 'Email is invalid':''}}" placeholder="Email address " name="email">
                            @if($errors->has('email'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
						</div>
						<div class="input-group mb-4">
							<span class="input-group-text"><i class="feather icon-lock"></i></span>
							<input type="password" class="form-control {{ $errors->has('password') ? 'Password is invalid': '' }}" placeholder="Password">
                            @if($errors->has('password'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                            @endif
						</div>
						<div class="form-group text-left mt-2">
							<div class="checkbox checkbox-primary d-inline">
								<input type="checkbox" name="checkbox-fill-1" id="checkbox-fill-a1" checked="">
								<label for="checkbox-fill-a1" class="cr"> Save credentials</label>
							</div>
						</div>
						<button type="submit" class="btn btn-block btn-primary mt-2 mb-4">Signin</button>
						<p class="mb-2 text-muted">Forgot password? <a href="auth-reset-password.html" class="f-w-400">Reset</a></p>
						<p class="mb-0 text-muted">Don’t have an account? <a href="auth-signup.html" class="f-w-400">Signup</a></p>
					</div>
                </form>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- [ auth-signin ] end -->

<!-- Required Js -->

<script src="{{ asset('admin_assets/assets/js/plugins/bootstrap.min.js') }}"></script>

<script src="{{ asset('admin_assets/assets/js/menu-setting.js') }}"></script>

</body>

</html>
