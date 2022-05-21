<!DOCTYPE html>
<html class="loading dark-layout" lang="en" data-layout="dark-layout" data-textdirection="ltr">
<!-- END: Head-->

<head>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;1,400;1,500;1,600"
        rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=League+Spartan:wght@100&family=Rowdies:wght@300&family=Source+Sans+Pro&display=swap"
        rel="stylesheet">
    @include('panels.HorizontalStyle')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<!-- BEGIN: Body-->

<body class="horizontal-layout horizontal-menu  navbar-floating footer-static  " data-open="hover"
    data-menu="horizontal-menu" data-col="">
    <!-- BEGIN: Header-->
    @include('panels.horizontalNavbar')
    <!-- END: Header-->
    <!-- BEGIN: Main Menu-->
    @include('panels.horizontalMenubar')
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js"></script>
    @include('panels.horizontalScript')
    @include('panels.myScript')

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
</body>
<!-- END: Body-->


</html>