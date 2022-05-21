<!DOCTYPE html>
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
    <title>Register Page</title>
    <link rel="apple-touch-icon" href="{{asset('backend/app-assets/images/ico/apple-icon-120.png')}}">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('backend/app-assets/images/ico/favicon.ico') }}">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;1,400;1,500;1,600"
        rel="stylesheet">
    <script src="{{asset('backend/app-assets/vendors/js/jquery/jquery.min.js')}}"></script>
    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('backend/app-assets/vendors/css/vendors.min.css') }}">
    <link rel="stylesheet" type="text/css"
        href="{{ asset('backend/app-assets/vendors/css/forms/wizard/bs-stepper.min.css') }}">
    <link rel="stylesheet" type="text/css"
        href="{{ asset('backend/app-assets/vendors/css/forms/select/select2.min.css') }}">
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('backend/app-assets/css/bootstrap.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('backend/app-assets/css/bootstrap-extended.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('backend/app-assets/css/colors.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('backend/app-assets/css/components.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('backend/app-assets/css/themes/dark-layout.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('backend/app-assets/css/themes/bordered-layout.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('backend/app-assets/css/themes/semi-dark-layout.css') }}">

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css"
        href="{{ asset('backend/app-assets/css/core/menu/menu-types/vertical-menu.css') }}">
    <link rel="stylesheet" type="text/css"
        href="{{ asset('backend/app-assets/css/plugins/forms/form-validation.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('backend/app-assets/css/plugins/forms/form-wizard.css') }}">
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('backend/assets/css/style.css')}}">
    <!-- END: Custom CSS-->

</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body class="vertical-layout vertical-menu-modern  navbar-floating footer-static  " data-open="click"
    data-menu="vertical-menu-modern" data-col="">

    <!-- BEGIN: Header-->
    <div><br></div>
    <div class="content-header row">
        <div class="content-header-left col-md-9 col-12 mb-2">
            <div class="row breadcrumbs-top">
                <div class="col-12">
                    <h2 class="content-header-title float-left mb-0">Register and Get Started</h2>
                    <div class="breadcrumb-wrapper">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="login">Login</a>
                            </li>
                            <li class="breadcrumb-item"><a href="#">Forms</a>
                            </li>
                            <li class="breadcrumb-item active">Form Register
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END: Header-->


    <!-- BEGIN: Main Menu-->
    <!-- END: Main Menu-->

    <!-- BEGIN: Content-->
    <section class="horizontal-wizard">
        <div class="bs-stepper horizontal-wizard-example">
            <div class="bs-stepper-header">
                <div class="step" data-target="#account-details">
                    <button type="button" class="step-trigger">
                        <span class="bs-stepper-box">1</span>
                        <span class="bs-stepper-label">
                            <span class="bs-stepper-title">Business Details</span>
                            <span class="bs-stepper-subtitle">Setup Business Details</span>
                        </span>
                    </button>
                </div>
                <div class="line">
                    <i data-feather="chevron-right" class="font-medium-2"></i>
                </div>
                <div class="step" data-target="#personal-info">
                    <button type="button" class="step-trigger">
                        <span class="bs-stepper-box">2</span>
                        <span class="bs-stepper-label">
                            <span class="bs-stepper-title">Business Settings</span>
                            <span class="bs-stepper-subtitle">Add Business Settings</span>
                        </span>
                    </button>
                </div>
                <div class="line">
                    <i data-feather="chevron-right" class="font-medium-2"></i>
                </div>
                <div class="step" data-target="#address-step">
                    <button type="button" class="step-trigger">
                        <span class="bs-stepper-box">3</span>
                        <span class="bs-stepper-label">
                            <span class="bs-stepper-title">Owner</span>
                            <span class="bs-stepper-subtitle">Add Owner</span>
                        </span>
                    </button>
                </div>
                <div class="line">
                    <i data-feather="chevron-right" class="font-medium-2"></i>
                </div>
                <div class="step" data-target="#social-links">
                    <button type="button" class="step-trigger">
                        <span class="bs-stepper-box">4</span>
                        <span class="bs-stepper-label">
                            <span class="bs-stepper-title">Verification</span>
                            <span class="bs-stepper-subtitle">Add Verify Number</span>
                        </span>
                    </button>
                </div>
            </div>
            <div class="bs-stepper-content">
                <div id="account-details" class="content">
                    <div class="content-header">
                        <h5 class="mb-0">Business Details</h5>
                        <small class="text-muted">Enter Your Business Details.</small>
                    </div>
                    <form>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label class="form-label" for="businessname">Business Name</label>
                                <input type="text" name="username" id="businessname" class="form-control"
                                    placeholder="Software Bazar" />
                            </div>
                            <div class="form-group col-md-6">
                                <label class="form-label" for="date">Start Date</label>
                                <input type="date" name="email" id="date" class="form-control" placeholder=""
                                    aria-label="john.doe" />
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label class="form-label" for="logo">Upload Logo</label>
                                <input type="file" name="username" id="logo" class="form-control" placeholder="" />
                            </div>
                            <div class="form-group col-md-6">
                                <label class="form-label" for="website">Website</label>
                                <input type="url" name="email" id="website" class="form-control"
                                    placeholder="https://softwarebazar/" aria-label="john.doe" />
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label class="form-label" for="contactnamber">Business Contact Number</label>
                                <input type="phone" name="username" id="contactnumber" class="form-control"
                                    placeholder="01689655055" />
                            </div>
                            <div class="form-group col-md-6">
                                <label class="form-label" for="alcontactnumber">Alternative Contact Number</label>
                                <input type="phone" name="email" id="alcontactnumber" class="form-control"
                                    placeholder="01772991577" aria-label="john.doe" />
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 mb-1">
                                <label>Country</label>
                                <select class="select2 form-control form-control-lg" name="desh" id="desh">
                                    <option label=" "></option>
                                    @foreach ($country as $item)
                                    <option value="{{$item->id}}">{{$item->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class=" col-md-6 mb-1">
                                <label>State</label>
                                <select class="select2 form-control form-control-lg" name="state" id="state">
                                    <option label=" "></option>
                                    <!-- <option value="AK">Dhaka</option>
                                    option> -->
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 mb-1">
                                <label>City</label>
                                <select class="select2 form-control form-control-lg" name="city" id="city">
                                    <option label=" "></option>
                                </select>
                            </div>
                            <div class="col-md-6 mb-1">
                                <label>Thana</label>
                                <select class="select2 form-control form-control-lg" name="zipcode" id="zipcode">
                                    <option label=" "></option>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label class="form-label" for="landmark">Landmark</label>
                                <input type="text" name="landmark" id="landmark" class="form-control"
                                    placeholder="house-5,road-9/B,sector-5" aria-describedby="landmark-error"
                                    aria-invalid="false"><span id="landmark-error" class="error"
                                    style="display: none;"></span>
                            </div>
                            <div class="col-md-6 mb-1">
                                <label>Time Zone</label>
                                <select class="select2 form-control form-control-lg">
                                    <option value="AK">Asia/Dhaka</option>
                                    <option value="HI">Asia/Dili</option>
                                    <option value="CA">Asia/Dubai</option>
                                </select>
                            </div>
                        </div>
                        <!-- <div class="row">
                                        <div class="form-group form-password-toggle col-md-6">
                                            <label class="form-label" for="password">Password</label>
                                            <input type="password" name="password" id="password" class="form-control" placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;" />
                                        </div>
                                        <div class="form-group form-password-toggle col-md-6">
                                            <label class="form-label" for="confirm-password">Confirm Password</label>
                                            <input type="password" name="confirm-password" id="confirm-password" class="form-control" placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;" />
                                        </div>
                                    </div> -->
                    </form>
                    <div class="d-flex justify-content-between">
                        <button class="btn btn-outline-secondary btn-prev" disabled>
                            <i data-feather="arrow-left" class="align-middle mr-sm-25 mr-0"></i>
                            <span class="align-middle d-sm-inline-block d-none">Previous</span>
                        </button>
                        <button class="btn btn-primary btn-next">
                            <span class="align-middle d-sm-inline-block d-none">Next</span>
                            <i data-feather="arrow-right" class="align-middle ml-sm-25 ml-0"></i>
                        </button>
                    </div>
                </div>
                <div id="personal-info" class="content">
                    <div class="content-header">
                        <h5 class="mb-0">Business Settings</h5>
                        <small>Enter Your Business Information.</small>
                    </div>
                    <form>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label class="form-label" for="first-name">Tax 1 Name</label>
                                <input type="text" name="first-name" id="first-name" class="form-control"
                                    placeholder="GST/VAT/Other" />
                            </div>
                            <div class="form-group col-md-6">
                                <label class="form-label" for="last-name">Tax 1 No</label>
                                <input type="text" name="last-name" id="last-name" class="form-control"
                                    placeholder="" />
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label class="form-label" for="tax2name">Tax 2 Name</label>
                                <input type="text" name="tax2name" id="tax2name" class="form-control"
                                    placeholder="GST/VAT/Other" />
                            </div>
                            <div class="form-group col-md-6">
                                <label class="form-label" for="tax2no">Tax 2 No</label>
                                <input type="text" name="tax2no" id="tax2no" class="form-control" placeholder="" />
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label class="form-label" for="country">Financial Year Start Month</label>
                                <select class="select2 w-100" name="country" id="country">
                                    <option label=" "></option>
                                    <option>January</option>
                                    <option>February</option>
                                    <option>March</option>
                                    <option>April</option>
                                    <option>May</option>
                                    <option>June</option>
                                    <option>July</option>
                                    <option>August</option>
                                    <option>Septembar</option>
                                    <option>Octobar</option>
                                    <option>November</option>
                                    <option>December</option>
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <label class="form-label" for="language">Stock Accounting Method</label>
                                <select class="select2 w-100" name="language" id="language">
                                    <option label=" "></option>
                                    <option>FIFO(First In First Out)</option>
                                    <option>LIFO(Last In First Out)</option>
                                </select>
                            </div>
                        </div>
                    </form>
                    <div class="d-flex justify-content-between">
                        <button class="btn btn-primary btn-prev">
                            <i data-feather="arrow-left" class="align-middle mr-sm-25 mr-0"></i>
                            <span class="align-middle d-sm-inline-block d-none">Previous</span>
                        </button>
                        <button class="btn btn-primary btn-next">
                            <span class="align-middle d-sm-inline-block d-none">Next</span>
                            <i data-feather="arrow-right" class="align-middle ml-sm-25 ml-0"></i>
                        </button>
                    </div>
                </div>
                <div id="address-step" class="content">
                    <div class="content-header">
                        <h5 class="mb-0">Owner Information</h5>
                        <small>Enter Your Information.</small>
                    </div>
                    <form>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label class="form-label" for="address">First Name</label>
                                <input type="text" id="address" name="address" class="form-control" placeholder="Anik">
                            </div>
                            <div class="form-group col-md-6">
                                <label class="form-label" for="landmark">Last Name</label>
                                <input type="text" name="landmark" id="landmark" class="form-control" placeholder="Dey">
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label class="form-label" for="username">Username</label>
                                <input type="text" id="username" name="username" class="form-control"
                                    placeholder="software@bazar">
                            </div>
                            <div class="form-group col-md-6">
                                <label class="form-label" for="email">Email</label>
                                <input type="email" id="email" name="email" class="form-control"
                                    placeholder="software@gmail.com">
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label class="form-label" for="pincode1">Password</label>
                                <input type="password" id="pincode1" name="pincode1" class="form-control"
                                    placeholder="********">
                            </div>
                            <div class="form-group col-md-6">
                                <label class="form-label" for="pincode2">Confirm Password</label>
                                <input type="password" id="pincode2" name="pincode2" class="form-control"
                                    placeholder="*******">
                            </div>
                        </div>
                    </form>
                    <div class="d-flex justify-content-between">
                        <button class="btn btn-primary btn-prev">
                            <i data-feather="arrow-left" class="align-middle mr-sm-25 mr-0"></i>
                            <span class="align-middle d-sm-inline-block d-none">Previous</span>
                        </button>
                        <button class="btn btn-primary btn-next">
                            <span class="align-middle d-sm-inline-block d-none">Next</span>
                            <i data-feather="arrow-right" class="align-middle ml-sm-25 ml-0"></i>
                        </button>
                    </div>
                </div>
                <div id="social-links" class="content">
                    <div class="content-header">
                        <h5 class="mb-0">Verification</h5>
                        <small>Enter Your Valid Number.</small>
                    </div>
                    <form>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label class="form-label" for="twitter">Valid Phone Number</label>
                                <input type="phone" id="twitter" name="twitter" class="form-control"
                                    placeholder="01772993456" />
                            </div>
                            <!-- <div class="form-group col-md-6">
                                            <label class="form-label" for="facebook">Facebook</label>
                                            <input type="text" id="facebook" name="facebook" class="form-control" placeholder="https://facebook.com/abc" />
                                        </div> -->
                        </div>
                        <!-- <div class="row">
                                        <div class="form-group col-md-6">
                                            <label class="form-label" for="google">Google+</label>
                                            <input type="text" id="google" name="google" class="form-control" placeholder="https://plus.google.com/abc" />
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label class="form-label" for="linkedin">Linkedin</label>
                                            <input type="text" id="linkedin" name="linkedin" class="form-control" placeholder="https://linkedin.com/abc" />
                                        </div>
                                    </div> -->
                    </form>
                    <div class="d-flex justify-content-between">
                        <button class="btn btn-primary btn-prev">
                            <i data-feather="arrow-left" class="align-middle mr-sm-25 mr-0"></i>
                            <span class="align-middle d-sm-inline-block d-none">Previous</span>
                        </button>
                        <button class="btn btn-success btn-submit">Submit</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END: Content-->

    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>

    <!-- BEGIN: Footer-->

    <!-- END: Footer-->


    <script src="{{asset('backend/app-assets/vendors/js/vendors.min.js')}}"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <script src="{{asset('backend/app-assets/vendors/js/forms/wizard/bs-stepper.min.js')}}"></script>
    <script src="{{asset('backend/app-assets/vendors/js/forms/select/select2.full.min.js')}}"></script>
    <script src="{{asset('backend/app-assets/vendors/js/forms/validation/jquery.validate.min.js')}}"></script>
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="{{asset('backend/app-assets/js/core/app-menu.js')}}"></script>
    <script src="{{asset('backend/app-assets/js/core/app.js')}}"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <script src="{{asset('backend/app-assets/js/scripts/forms/form-wizard.js')}}"></script>
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
    <script type="text/javascript">
        $(document).ready(function() {
        $('#desh').on('change', function() {
            var idCountry = this.value;
            $("#state").html('');
            $.ajax({
                url: "{{url('api/fetch-states')}}",
                type: "POST",
                data: {
                    country_id: idCountry,
                    _token: '{{csrf_token()}}'
                },
                dataType: 'json',
                success: function(result) {
                    $('#state').html('<option value="">Select State</option>');
                    $.each(result.states, function(key, value) {
                        $("#state").append('<option value="' + value
                            .id + '">' + value.name + ' ( ' + value.bn_name +
                            ' ) </option>');
                    });
                }
            });
        });
        $('#state').on('change', function() {
            var idState = this.value;
            $("#city").html('');
            $.ajax({
                url: "{{url('api/fetch-cities')}}",
                type: "POST",
                data: {
                    state_id: idState,
                    _token: '{{csrf_token()}}'
                },
                dataType: 'json',
                success: function(res) {
                    $('#city').html('<option value="">Select City</option>');
                    $.each(res.cities, function(key, value) {
                        $("#city").append('<option value="' + value
                            .id + '">' + value.name + ' ( ' + value.bn_name +
                            ' ) </option>');
                    });
                }
            });
        });
        $('#city').on('change', function() {
            var idState = this.value;
            $("#zipcode").html('');
            $.ajax({
                url: "{{url('api/fetch-thanas')}}",
                type: "POST",
                data: {
                    city_id: idState,
                    _token: '{{csrf_token()}}'
                },
                dataType: 'json',
                success: function(res) {
                    $('#zipcode').html('<option value="">Select Thana</option>');
                    $.each(res.thanas, function(key, value) {
                        $("#zipcode").append('<option value="' + value
                            .id + '">' + value.name + ' ( ' + value.bn_name +
                            ' ) </option>');
                    });
                }
            });
        });
    });
    </script>

</body>
<!-- END: Body-->

</html>