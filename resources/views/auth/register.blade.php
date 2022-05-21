<!DOCTYPE html>
<!--
Template Name: Vuexy - Vuejs, HTML & Laravel Admin Dashboard Template
Author: PixInvent
Website: http://www.pixinvent.com/
Contact: hello@pixinvent.com
Follow: www.twitter.com/pixinvents
Like: www.facebook.com/pixinvents
Purchase: https://1.envato.market/vuexy_admin
Renew Support: https://1.envato.market/vuexy_admin
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.

-->
<html class="loading dark-layout" lang="en" data-layout="dark-layout" data-textdirection="ltr">
<!-- BEGIN: Head-->

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=0,minimal-ui">
  <meta name="description"
    content="Vuexy admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
  <meta name="keywords"
    content="admin template, Vuexy admin template, dashboard template, flat admin template, responsive admin template, web app">
  <meta name="author" content="PIXINVENT">
  <title>Register Page - Hotel-360</title>
  <link rel="apple-touch-icon" href="{{asset('backend/app-assets/images/ico/apple-icon-120.png')}}">
  <link rel="shortcut icon" type="image/x-icon" href="{{asset('backend/app-assets/images/ico/favicon.ico')}}">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;1,400;1,500;1,600"
    rel="stylesheet">

  <!-- BEGIN: Vendor CSS-->
  <link rel="stylesheet" type="text/css" href="{{asset('backend/app-assets/vendors/css/vendors.min.css')}}">
  <link rel="stylesheet" type="text/css"
    href="{{asset('backend/app-assets/vendors/css/forms/wizard/bs-stepper.min.css')}}">
  <link rel="stylesheet" type="text/css"
    href="{{asset('backend/app-assets/vendors/css/forms/select/select2.min.css')}}">
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
  <link rel="stylesheet" type="text/css"
    href="{{asset('backend/app-assets/css/core/menu/menu-types/vertical-menu.min.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('backend/app-assets/css/plugins/forms/form-wizard.min.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('backend/app-assets/css/plugins/forms/form-validation.css')}}">
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
        <div class="auth-wrapper auth-cover">
          <div class="auth-inner row m-0">
            <!-- Brand logo-->

            <!-- /Brand logo-->

            <!-- Left Text-->
            <div class="col-lg-3 d-none d-lg-flex align-items-center p-0">
              <div class="w-100 d-lg-flex align-items-center justify-content-center">
                <img class="img-fluid w-100"
                  src="{{asset('backend/app-assets/images/illustration/create-account.svg')}}" alt="multi-steps" />
              </div>
            </div>
            <!-- /Left Text-->

            <!-- Register-->
            <div class="col-lg-9 d-flex align-items-center auth-bg px-2 px-sm-3 px-lg-5">
              <div class="mx-auto">
                <div class="bs-stepper register-multi-steps-wizard shadow-none">
                  <div class="content-header mb-2">
                    <h2 class="fw-bolder mb-75">Account Information</h2>
                    <span>Enter your username password details</span>
                  </div>
                  <form method="POST" action="{{ route('register') }}">
                    @csrf
                    <div class="row">
                      <div class="col-md-6 mb-1">
                        <label class="form-label">Full Name</label>
                        <input type="text" value="{{old('name')}}" name="name" class="form-control" required />
                      </div>

                      <div class="col-md-6 mb-1">
                        <label class="form-label" for="username">Username</label>
                        <input type="text" value="{{old('username')}}" name="username" id="username"
                          class="form-control" placeholder="johndoe" />
                      </div>
                      <div class="col-md-6 mb-1">
                        <label class="form-label" for="email">Email</label>
                        <input type="email" value="{{old('email')}}" name="email" id="email" class="form-control"
                          placeholder="john.doe@email.com" aria-label="john.doe" />
                      </div>
                      <div class="col-md-6 mb-1">
                        <label class="form-label">Phone</label>
                        <input type="text" value="{{old('phone')}}" name="phone" class="form-control" />
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6 mb-1">
                        <label class="form-label" for="password">Password</label>
                        <div class="input-group input-group-merge form-password-toggle">
                          <input type="password" name="password" id="password" class="form-control"
                            placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;" />
                          <span class="input-group-text cursor-pointer"><i data-feather="eye"></i></span>
                        </div>
                      </div>
                      <div class="col-md-6 mb-1">
                        <label class="form-label" for="confirm-password">Confirm Password</label>
                        <div class="input-group input-group-merge form-password-toggle">
                          <input type="password" name="password_confirmation" id="confirm-password" class="form-control"
                            placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;" />
                          <span class="input-group-text cursor-pointer"><i data-feather="eye"></i></span>
                        </div>
                      </div>
                    </div>
                    <hr>
                    <button type="submit" class="btn btn-success btn-block" style="float: right">Submit</button>
                  </form>

                </div>
              </div>
            </div>
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
  <script src="{{asset('backend/app-assets/vendors/js/forms/wizard/bs-stepper.min.js')}}"></script>
  <script src="{{asset('backend/app-assets/vendors/js/forms/select/select2.full.min.js')}}"></script>
  <script src="{{asset('backend/app-assets/vendors/js/forms/validation/jquery.validate.min.js')}}"></script>
  <script src="{{asset('backend/app-assets/vendors/js/forms/cleave/cleave.min.js')}}"></script>
  <script src="{{asset('backend/app-assets/vendors/js/forms/cleave/addons/cleave-phone.us.js')}}"></script>
  <!-- END: Page Vendor JS-->

  <!-- BEGIN: Theme JS-->
  <script src="{{asset('backend/app-assets/js/core/app-menu.min.js')}}"></script>
  <script src="{{asset('backend/app-assets/js/core/app.min.js')}}"></script>
  <!-- END: Theme JS-->

  <!-- BEGIN: Page JS-->
  <script src="{{asset('backend/app-assets/js/scripts/pages/auth-register.min.js')}}"></script>
  <!-- END: Page JS-->

  @toastr_js
  @toastr_render

  <script>
    @foreach($errors->all() as $error)
    toastr.error("{{$error}}");
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
