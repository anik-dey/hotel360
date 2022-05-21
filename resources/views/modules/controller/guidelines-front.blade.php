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
    <title>Knowledge Base - Vuexy - Bootstrap HTML admin template</title>
    <link rel="apple-touch-icon" href="../../../app-assets/images/ico/apple-icon-120.png">
    <link rel="shortcut icon" type="image/x-icon" href="../../../app-assets/images/ico/favicon.ico">
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
    <link rel="stylesheet" type="text/css" href="{{asset('backend/app-assets/css/themes/semi-dark-layout.css')}}">

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css"
        href="{{asset('backend/app-assets/css/core/menu/menu-types/horizontal-menu.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('backend/app-assets/css/pages/page-knowledge-base.css')}}">
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('backend/assets/css/style.css')}}">
    <!-- END: Custom CSS-->

</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body class="horizontal-layout horizontal-menu  navbar-floating footer-static  " data-open="hover"
    data-menu="horizontal-menu" data-col="">

    <!-- BEGIN: Content-->
    <div class="app-content content" style="padding-top: 50px !important">
        <div class="content-wrapper container-xxl p-0">
            <div class="content-body">
                <!-- Knowledge base Jumbotron -->
                <section id="knowledge-base-search">
                    <div class="row">
                        <div class="col-12">
                            <div class="card knowledge-base-bg text-center"
                                style="background-image: url('{{asset('backend/app-assets/images/banner/banner.png')}}')">
                                <div class="card-body">
                                    <h2 class="text-primary">Dedicated Source Used on Website</h2>
                                    <p class="card-text mb-2">
                                        <span>Popular searches: </span><span class="font-weight-bolder">Sales
                                            automation, Email marketing</span>
                                    </p>
                                    <form class="kb-search-input">
                                        <div class="input-group input-group-merge">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i data-feather="search"></i></span>
                                            </div>
                                            <input type="text" class="form-control" id="searchbar"
                                                placeholder="Ask a question..." />
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!--/ Knowledge base Jumbotron -->

                <!-- Knowledge base -->
                <section id="knowledge-base-content">
                    <div class="row kb-search-content-info match-height">
                        <!-- sales card -->
                        <div class="col-md-4 col-sm-6 col-12 kb-search-content">
                            <div class="card">
                                <a href="page-kb-category.html">
                                    <img src="../../../app-assets/images/illustration/sales.svg" class="card-img-top"
                                        alt="knowledge-base-image" />

                                    <div class="card-body text-center">
                                        <h4>Sales Automation</h4>
                                        <p class="text-body mt-1 mb-0">
                                            There is perhaps no better demonstration of the folly of image of our tiny
                                            world.
                                        </p>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <!-- marketing -->
                        <div class="col-md-4 col-sm-6 col-12 kb-search-content">
                            <div class="card">
                                <a href="page-kb-category.html">
                                    <img src="../../../app-assets/images/illustration/marketing.svg"
                                        class="card-img-top" alt="knowledge-base-image" />
                                    <div class="card-body text-center">
                                        <h4>Marketing Automation</h4>
                                        <p class="text-body mt-1 mb-0">
                                            Look again at that dot. That’s here. That’s home. That’s us. On it everyone
                                            you love.
                                        </p>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <!-- api -->
                        <div class="col-md-4 col-sm-6 col-12 kb-search-content">
                            <div class="card">
                                <a href="page-kb-category.html">
                                    <img src="../../../app-assets/images/illustration/api.svg" class="card-img-top"
                                        alt="knowledge-base-image" />
                                    <div class="card-body text-center">
                                        <h4>API Questions</h4>
                                        <p class="text-body mt-1 mb-0">every hero and coward, every creator and
                                            destroyer of civilization.</p>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <!-- personalization -->
                        <div class="col-md-4 col-sm-6 col-12 kb-search-content">
                            <div class="card">
                                <a href="page-kb-category.html">
                                    <img src="../../../app-assets/images/illustration/personalization.svg"
                                        class="card-img-top" alt="knowledge-base-image" />
                                    <div class="card-body text-center">
                                        <h4>Personalization</h4>
                                        <p class="text-body mt-1 mb-0">It has been said that astronomy is a humbling and
                                            character experience.</p>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <!-- email -->
                        <div class="col-md-4 col-sm-6 col-12 kb-search-content">
                            <div class="card">
                                <a href="page-kb-category.html">
                                    <img src="../../../app-assets/images/illustration/email.svg" class="card-img-top"
                                        alt="knowledge-base-image" />
                                    <div class="card-body text-center">
                                        <h4>Email Marketing</h4>
                                        <p class="text-body mt-1 mb-0">There is perhaps no better demonstration of the
                                            folly of human conceits.</p>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <!-- demand -->
                        <div class="col-md-4 col-sm-6 col-12 kb-search-content">
                            <div class="card">
                                <a href="page-kb-category.html">
                                    <img src="../../../app-assets/images/illustration/demand.svg" class="card-img-top"
                                        alt="knowledge-base-image" />
                                    <div class="card-body text-center">
                                        <h4>Demand Generation</h4>
                                        <p class="text-body mt-1 mb-0">Competent means we will never take anything for
                                            granted.</p>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <!-- no result -->
                        <div class="col-12 text-center no-result no-items">
                            <h4 class="mt-4">Search result not found!!</h4>
                        </div>
                    </div>
                </section>
                <!-- Knowledge base ends -->

            </div>
        </div>
    </div>
    <!-- END: Content-->

    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>

    <!-- BEGIN: Footer-->
    <footer class="footer footer-static footer-light footer-shadow">
        <p class="clearfix mb-0"><span class="float-md-left d-block d-md-inline-block mt-25">COPYRIGHT &copy; 2021<a
                    class="ml-25" href="https://1.envato.market/pixinvent_portfolio" target="_blank">Pixinvent</a><span
                    class="d-none d-sm-inline-block">, All rights Reserved</span></span><span
                class="float-md-right d-none d-md-block">Hand-crafted & Made with<i data-feather="heart"></i></span></p>
    </footer>
    <button class="btn btn-primary btn-icon scroll-top" type="button"><i data-feather="arrow-up"></i></button>
    <!-- END: Footer-->


    <!-- BEGIN: Vendor JS-->
    <script src="{{asset('backend/app-assets/vendors/js/vendors.min.js')}}"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <script src="{{asset('backend/app-assets/vendors/js/ui/jquery.sticky.js')}}"></script>
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="{{asset('backend/app-assets/js/core/app-menu.js')}}"></script>
    <script src="{{asset('backend/app-assets/js/core/app.js')}}"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <script src="{{asset('backend/app-assets/js/scripts/pages/page-knowledge-base.js')}}"></script>
    <!-- END: Page JS-->

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