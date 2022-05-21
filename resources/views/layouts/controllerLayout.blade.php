<!DOCTYPE html>
<html class="loading dark-layout" lang="en" data-layout="dark-layout" data-textdirection="ltr">
<!-- END: Head-->

<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;1,400;1,500;1,600"
        rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=League+Spartan:wght@100&family=Rowdies:wght@300&family=Source+Sans+Pro&display=swap"
        rel="stylesheet">
    @include('panels.HorizontalStyle')
</head>
<!-- BEGIN: Body-->

<body class=" horizontal-layout horizontal-menu navbar-floating footer-static " data-open=" hover"
    data-menu="horizontal-menu" data-col="">
    <!-- BEGIN: Header-->
    @include('panels.horizontalNavbar')
    <!-- END: Header-->
    <!-- BEGIN: Main Menu-->
    @include('panels.controllerMenubar')
    <!-- END: Main Menu-->

    <div class="app-content content ">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper container-xxl p-0">

            <div class="content-body">
                <!-- Dashboard Ecommerce Starts -->
                @yield('content')
                <!-- Dashboard Ecommerce ends -->

            </div>
        </div>
    </div>
    @include('panels.horizontalScript')
    @include('panels.myScript')
</body>
<!-- END: Body-->



</html>