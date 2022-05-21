<!DOCTYPE html>
<html class="loading dark-layout" lang="en" data-layout="dark-layout" data-textdirection="ltr">
<!-- BEGIN: Head-->

<head>

    <meta name="author" content="Hotel360">
    <title>Login Page - Hotel-360</title>
    <link rel="apple-touch-icon" href="{{asset('backend/app-assets/images/ico/apple-icon-120.png')}}">
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('backend/app-assets/images/ico/favicon.ico')}}">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;1,400;1,500;1,600"
        rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('backend/app-assets/vendors/css/vendors.min.css')}}">
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('backend/app-assets/css/bootstrap.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('backend/app-assets/css/bootstrap-extended.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('backend/app-assets/css/colors.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('backend/app-assets/css/components.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('backend/app-assets/css/themes/dark-layout.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('backend/app-assets/css/themes/bordered-layout.css')}}">
    <link rel="stylesheet" type="text/css" href="backend/app-assets/css/themes/semi-dark-layout.css">

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css"
        href="{{asset('backend/app-assets/css/core/menu/menu-types/vertical-menu.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('backend/app-assets/css/plugins/forms/form-validation.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('backend/app-assets/css/pages/page-auth.css')}}">
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('backend/assets/css/style.css')}}">
    <!-- END: Custom CSS-->

    @toastr_css

    <style>
        #toast-container>.toast-error {
            background-color: red !important;
            font-size: 15px;
            color: #fff;
        }
    </style>

</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body class="vertical-layout vertical-menu-modern blank-page navbar-floating footer-static  " data-open="click"
    data-menu="vertical-menu-modern" data-col="blank-page">

    <!-- BEGIN: Content-->
    <div class="app-content content ">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-header row">
            </div>
            <div class="content-body">
                <div class="auth-wrapper auth-v2">
                    <div class="auth-inner row m-0">
                        <a class="brand-logo" href="javascript:void(0);">
                            <div>
                                <img src="{{ asset('images/logo/hotel360.png') }}" class="img-fluid"
                                    style=" min-width: 20px; max-width: 200px; max-height: 150px;">
                            </div>

                        </a>
                        <div class="d-none d-lg-flex col-lg-7 align-items-center p-5">
                            <div class="w-100 d-lg-flex align-items-center justify-content-center px-5">
                                <img class="img-fluid"
                                    src="{{asset('backend/app-assets/images/pages/login-v2-dark.svg')}}"
                                    alt="Login V2" />
                            </div>
                        </div>

                        <div class="d-flex col-lg-5 align-items-center auth-bg px-2 p-lg-5">
                            <div class="col-12 col-sm-8 col-md-6 col-lg-12 px-xl-2 mx-auto">
                                <h2 class="card-title font-weight-bold mb-1 text-center"
                                    style="color: salmon; font-size:30px">
                                    Welcome Hotel - 360
                                </h2>
                                <form class="auth-login-form mt-2" action="{{ url('login') }}" method="post">
                                    @csrf
                                    <div class="form-group">
                                        <label class="form-label" for="login-email">Username</label>
                                        <input class="form-control" id="login-email" type="text" name="username"
                                            placeholder="Enter Username" required />
                                    </div>
                                    <div class="form-group">
                                        <div class="d-flex justify-content-between">
                                            <label for="login-password">Password</label>
                                            <a href="{{route('password-request')}}"><small>Forgot Password?</small></a>
                                        </div>
                                        <div class="input-group input-group-merge form-password-toggle">
                                            <input class="form-control form-control-merge" id="login-password"
                                                type="password" name="password" placeholder="············"
                                                aria-describedby="login-password" required />
                                            <div class="input-group-append"><span
                                                    class="input-group-text cursor-pointer"><i
                                                        data-feather="eye"></i></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="custom-control custom-checkbox">
                                            <input class="custom-control-input" id="remember-me" type="checkbox" tabindex="3" name="remember" value="1">
                                            <label class="custom-control-label" for="remember-me"> Remember Me</label>
                                        </div>
                                    </div>
                                    <button class="btn btn-primary btn-block" type="submit">Sign in</button>
                                </form>
                                <h3 class="text-center mt-2">
                                    <span style="font-size: 15px">New on our platform?</span> <br>
                                    <a href="register" style="font-size: 25px"><span>&nbsp;Create an account</span>
                                    </a>
                                </h3>

                            </div>
                        </div>
                        <!-- /Login-->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END: Content-->




    <!-- BEGIN: Vendor JS-->
    <script src="{{asset('backend/app-assets/vendors/js/vendors.min.js')}}"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <script src="{{asset('backend/app-assets/vendors/js/forms/validation/jquery.validate.min.js')}}"></script>
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="{{asset('backend/app-assets/js/core/app-menu.js')}}"></script>
    <script src="{{asset('backend/app-assets/js/core/app.js')}}"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <script src="{{asset('backend/app-assets/js/scripts/pages/page-auth-login.js')}}"></script>
    <!-- END: Page JS-->

    @toastr_js
    @toastr_render

    <script>
        @foreach($errors->all() as $error)
    toastr.error("{{$error}}");
    @endforeach
    </script>

    <script>
        $(window).on('load', function() {
        if (feather) {
            feather.replace({
                width: 14,
                height: 14
            });
        }
    })
    </script>
</body>
<!-- END: Body-->

</html>
