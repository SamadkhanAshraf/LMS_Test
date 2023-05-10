
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
    <link href='https://cdn.jsdelivr.net/npm/sweetalert2@10.10.1/dist/sweetalert2.min.css'>
    <link rel="icon" href="{{ asset('dashboard_assets/assets/images/favicon.ico') }}" type="image/x-icon">

    <!-- vendor css -->
    <link rel="stylesheet" href="{{ asset('dashboard_assets/assets/css/plugins/style.css') }}">
    <link rel="stylesheet" href="{{ asset('dashboard_assets/assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('dashboard_assets/assets/css/plugins/datepicker-bs5.min.css') }}">
    <link rel="stylesheet" href="{{ asset('dashboard_assets/assets/images/favicon.ico') }}" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset(' dashboard_assets/assets/images/user/avatar-4.jpg') }}" type="image/x-icon">








</head>
<body class="">
	<!-- [ Pre-loader ] start -->
    <x-home.navigation/>
	<!-- [ navigation menu ] end -->
	<!-- [ Header ] start -->
    <x-home.header/>
	<!-- [ chat message ] end -->

<!-- [ Main Content ] start -->
            <div class="pcoded-main-container">
                <div class="pcoded-wrapper">
                        @section('contents')
                        @show
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
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.16.6/dist/sweetalert2.all.min.js"></script>
    <script src="{{asset('dashboard_assets/assets/js/plugins/popper.min.js') }}"></script>
    <script src="{{asset('dashboard_assets/assets/js/plugins/perfect-scrollbar.min.js') }}"></script>
    <script src="{{asset('dashboard_assets/assets/js/plugins/bootstrap.min.js') }}"></script>
    <script src="{{asset('dashboard_assets/assets/js/pcoded.js') }}"></script>
    {{-- <script src="{{asset('dashboard_assets/assets/js/plugins/simple-datatables.js') }}"></script> --}}


<!-- Apex Chart -->
    <script src="{{ asset('dashboard_assets/assets/js/plugins/apexcharts.min.js') }}"></script>
    <script src="{{ asset('dashboard_assets/assets/js/menu-setting.js') }}"></script>

<!-- custom-chart js -->
    <script src="{{ asset('dashboard_assets/assets/js/pages/dashboard-main.js') }}"></script>
    <script src="{{ asset('dashboard_assets/assets/js/plugins/datepicker-full.min.js') }}">
    <script src="{{ asset('dashboard_assets/assets/js/menu-setting.js') }}"></script>
    <script src="{{ asset('dashboard_assets/assets/js/plugins/popper.min.js')}}"></script>
    <script src="{{ asset('dashboard_assets/assets/js/plugins/perfect-scrollbar.min.js')}}"></script>
    <script src="{{ asset('dashboard_assets/assets/js/plugins/bootstrap.min.js')}}"></script>
    <script src="{{ asset('dashboard_assets/assets/js/pcoded.js')}}"></script>

</body>

<script>
    var datatable = new simpleDatatables.DataTable('#pc-dt-satetime-sorting', {
        columns: [{
                select: 2,
                type: "date",
                format: "RFC_2822"
            },
            {
                select: 3,
                type: "date",
                format: "MMM DD, YYYY"
            }
        ]
    });
</script>

@section('script')
@show

</html>
