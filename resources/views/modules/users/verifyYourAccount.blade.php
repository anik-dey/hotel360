
<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
  <!-- BEGIN: Head-->
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=0,minimal-ui">
    <meta name="description" content="Vuexy admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, Vuexy admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="PIXINVENT">
    <title>Verify Account - Hotel-360</title>
    <link rel="apple-touch-icon" href="{{asset('backend/app-assets/images/ico/apple-icon-120.png')}}">
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('backend/app-assets/images/ico/favicon.ico')}}">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;1,400;1,500;1,600" rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('backend/app-assets/vendors/css/vendors.min.css')}}">
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('backend/app-assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('backend/app-assets/css/bootstrap-extended.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('backend/app-assets/css/colors.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('backend/app-assets/css/components.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('backend/app-assets/css/themes/dark-layout.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('backend/app-assets/css/themes/bordered-layout.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('backend/app-assets/css/themes/semi-dark-layout.min.css')}}">

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('backend/app-assets/css/core/menu/menu-types/vertical-menu.mi')}}n.css">
    <link rel="stylesheet" type="text/css" href="{{asset('backend/app-assets/css/pages/authentication.css')}}">
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('backend/assets/css/style.css')}}">
    <!-- END: Custom CSS-->

    @toastr_css

    <style>
        #toast-container>.toast-error {
            background-color: red !important;
            font-size: 15px;
            color: #fff !important;
        }

        #toast-container>.toast-success {
            background-color: #106414 !important;
            font-size: 15px;
            color: #fff !important;
        }
    </style>

  </head>
  <!-- END: Head-->

  <!-- BEGIN: Body-->
  <body class="vertical-layout vertical-menu-modern blank-page navbar-floating footer-static  " data-open="click" data-menu="vertical-menu-modern" data-col="blank-page">
    <!-- BEGIN: Content-->
    <div class="app-content content ">
      <div class="content-overlay"></div>
      <div class="header-navbar-shadow"></div>
      <div class="content-wrapper">
        <div class="content-header row">
        </div>
        <div class="content-body">
          <div class="auth-wrapper auth-cover">
            <div class="auth-inner row m-0">
              <!-- Left Text-->
              <div class="d-none d-lg-flex col-lg-8 align-items-center p-5">
                <div class="w-100 d-lg-flex align-items-center justify-content-center px-5"><img class="img-fluid" src="{{asset('backend/app-assets/images/illustration/two-steps-verification-illustration.svg')}}" alt="two steps verification"/></div>
              </div>
              <!-- /Left Text-->
              <!-- verify email v2-->
              <div class="d-flex col-lg-4 align-items-center auth-bg px-2 p-lg-5">
                <div class="col-12 col-sm-8 col-md-6 col-lg-12 px-xl-2 mx-auto">
                  <h2 class="card-title fw-bolder mb-1">{{ $title }} 💬</h2>
                  <p class="card-text mb-75">We sent a verification code to your mobile. Enter the code from the mobile in the field below.</p>
                  <p class="card-text fw-bolder mb-2">****** {{ substr(auth()->user()->phone, -4) }}</p>
                  <form class="mt-2" action="{{ route('users.verify.my.account') }}" method="POST">
                    @csrf
                    <h6>Type your 6 digit security code</h6>
                    <div class="auth-input-wrapper d-flex align-items-center justify-content-between">
                      <input class="form-control auth-input height-50 text-center numeral-mask mx-25 mb-1" type="text" name="code[]" required maxlength="1" autofocus="">
                      <input class="form-control auth-input height-50 text-center numeral-mask mx-25 mb-1" type="text" name="code[]" required maxlength="1">
                      <input class="form-control auth-input height-50 text-center numeral-mask mx-25 mb-1" type="text" name="code[]" required maxlength="1">
                      <input class="form-control auth-input height-50 text-center numeral-mask mx-25 mb-1" type="text" name="code[]" required maxlength="1">
                      <input class="form-control auth-input height-50 text-center numeral-mask mx-25 mb-1" type="text" name="code[]" required maxlength="1">
                      <input class="form-control auth-input height-50 text-center numeral-mask mx-25 mb-1" type="text" name="code[]" required maxlength="1">
                    </div>
                    <button class="btn btn-primary w-100 waves-effect waves-float waves-light" type="submit" tabindex="4">Verify my account</button>
                  </form>
                  <p class="text-center mt-2"><span>Didn’t get the code?</span><a href="Javascript:void(0)"><span>&nbsp;Resend</span></a><span>or</span><a href="Javascript:void(0)"><span>&nbsp;Call Us</span></a></p>
                </div>
              </div>
              <!-- verify email-->
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
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="{{asset('backend/app-assets/js/core/app-menu.min.js')}}"></script>
    <script src="{{asset('backend/app-assets/js/core/app.min.js')}}"></script>

    <!-- BEGIN: Page JS-->
    <script src="{{asset('backend/app-assets/js/scripts/pages/auth-two-steps.min.js')}}"></script>
    <!-- END: Page JS-->

    @toastr_js
    @toastr_render


    <script>
        @foreach($errors->all() as $error)
            toastr.error("{{$error}}")
        @endforeach
    </script>

    <script>
      $(window).on('load',  function(){
        if (feather) {
          feather.replace({ width: 14, height: 14 });
        }
      })
    </script>
  </body>
  <!-- END: Body-->
</html>
