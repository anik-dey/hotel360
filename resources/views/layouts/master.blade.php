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
    <title>Hotel-360 @yield('title')</title>
    <link rel="apple-touch-icon" href="{{asset('backend/app-assets/images/ico/apple-icon-120.png')}}">
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('backend/app-assets/images/ico/favicon.ico')}}">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;1,400;1,500;1,600"
        rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tinymce/4.5.6/tinymce.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    @include('includes.allCss')


</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body class="vertical-layout h-100 vertical-menu-modern menu-collapsed navbar-sticky footer-static" data-open="click"
    data-menu="vertical-menu-modern" data-col="">

    @include('includes.header')


    <!-- BEGIN: Main Menu-->
    <div class="main-menu menu-fixed menu-accordion menu-shadow menu-light" data-scroll-to-active="true">
        <div class="navbar-header expanded">
            <ul class="nav navbar-nav flex-row">
                <li class="nav-item mr-auto"><a href="{{route('home')}}" class="navbar-brand router-link-active"
                        target="_self"><span class="brand-logo"><img src="{{asset('logo.36f34a9f.svg')}}" alt="logo"
                                class=""></span>
                        <h2 class="brand-text"> Hotel-360 </h2>
                    </a></li>
                <li class="nav-item nav-toggle"><a href="#" target="_self" class="nav-link modern-nav-toggle"><svg
                            xmlns="http://www.w3.org/2000/svg" width="20px" height="20px" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="d-block d-xl-none feather feather-x">
                            <line x1="18" y1="6" x2="6" y2="18"></line>
                            <line x1="6" y1="6" x2="18" y2="18"></line>
                        </svg><svg xmlns="http://www.w3.org/2000/svg" width="20px" height="20px" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="d-none d-xl-block collapse-toggle-icon feather feather-disc">
                            <circle cx="12" cy="12" r="10"></circle>
                            <circle cx="12" cy="12" r="3"></circle>
                        </svg></a></li>
            </ul>
        </div>
        {{-- <div class="navbar-header">
            <ul class="nav navbar-nav flex-row">
                <li class="nav-item mr-auto">
                    <a class="navbar-brand" href="{{route('home')}}"><span class="brand-logo">
            <img src="{{asset('images/logo/hotel360.png')}}" class="img-fluid"
                style=" min-width: 20px; max-width: 200px; max-height: 150px;"></span>
        </a>
        </li>
        <li class="nav-item nav-toggle"><a href="#" target="_self" class="nav-link modern-nav-toggle"><svg
                    xmlns="http://www.w3.org/2000/svg" width="20px" height="20px" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="d-block d-xl-none feather feather-x">
                    <line x1="18" y1="6" x2="6" y2="18"></line>
                    <line x1="6" y1="6" x2="18" y2="18"></line>
                </svg><svg xmlns="http://www.w3.org/2000/svg" width="20px" height="20px" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="d-none d-xl-block collapse-toggle-icon feather feather-disc">
                    <circle cx="12" cy="12" r="10"></circle>
                    <circle cx="12" cy="12" r="3"></circle>
                </svg></a></li>
        </ul>
    </div> --}}
    <div class="shadow-bottom"></div>
    <div class="main-menu-content">
        @include('includes.sidebar')

    </div>
    </div>
    <!-- END: Main Menu-->

    <!-- BEGIN: Content-->
    <div class="app-content content ">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper container-xxl p-0">
            @include('panels.breadcrumb')
            <div class="content-body">
                @yield('content')


            </div>
        </div>
    </div>
    <!-- END: Content-->

    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>

    <!-- BEGIN: Footer-->
    <!-- <footer class="footer footer-static footer-light">
        <p class="clearfix mb-0"><span class="float-md-left d-block d-md-inline-block mt-25">COPYRIGHT &copy; 2021<a class="ml-25" href="https://1.envato.market/pixinvent_portfolio" target="_blank">Pixinvent</a><span class="d-none d-sm-inline-block">, All rights Reserved</span></span><span class="float-md-right d-none d-md-block">Hand-crafted & Made with<i data-feather="heart"></i></span></p>
    </footer> -->
    <button class="btn btn-primary btn-icon scroll-top" type="button"><i data-feather="arrow-up"></i></button>
    <!-- END: Footer-->

    @include('includes.allJs')


    <script type="text/javascript">
        $('.show_confirm').click(function(event) {
        var form = $(this).closest("form");
        var name = $(this).data("name");
        event.preventDefault();
        swal({
                title: `Are you sure you want to delete this record?`,
                text: "If you delete this, it will be gone forever.",
                icon: "warning",
                buttons: true,
                dangerMode: true,
            })
            .then((willDelete) => {

                if (willDelete) {
                    form.submit();
                }
            });
    });
    </script>
    <script type="text/javascript">
        $('.show_edit').click(function(event) {
        var form = $(this).closest("form");
        var name = $(this).data("name");
        event.preventDefault();
        form.submit();
    });
    </script>
</body>
<!-- END: Body-->


</html>