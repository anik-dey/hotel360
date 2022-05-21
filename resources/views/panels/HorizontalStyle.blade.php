<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=0,minimal-ui">
<meta name="description"
    content="Vuexy admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
<meta name="keywords"
    content="admin template, Vuexy admin template, dashboard template, flat admin template, responsive admin template, web app">
<meta name="author" content="PIXINVENT">
<title>Hotel 360 | {{ isset($title) ? $title : '' }}</title>
<link rel="apple-touch-icon" href="../../../app-assets/images/ico/apple-icon-120.png">
<link rel="shortcut icon" type="image/x-icon" href="../../../app-assets/images/ico/favicon.ico">
<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;1,400;1,500;1,600"
    rel="stylesheet">

<!-- BEGIN: Vendor CSS-->
<link rel="stylesheet" type="text/css" href="{{ asset('backend/app-assets/vendors/css/vendors.min.css')}}">
<link rel="stylesheet" type="text/css"
    href="{{ asset('backend/app-assets/vendors/css/file-uploaders/dropzone.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{ asset('backend/app-assets/vendors/css/extensions/toastr.min.css')}}">
<link rel="stylesheet" type="text/css"
    href="{{asset('backend/app-assets/vendors/css/pickers/pickadate/pickadate.css')}}">
<link rel="stylesheet" type="text/css"
    href="{{asset('backend/app-assets/vendors/css/pickers/flatpickr/flatpickr.min.css')}}">
<link rel="stylesheet" type="text/css"
    href="{{asset('backend/app-assets/css/plugins/forms/pickers/form-flat-pickr.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('backend/app-assets/vendors/css/forms/select/select2.min.css')}}">
<link rel="stylesheet" type="text/css"
    href="{{asset('backend/app-assets/css/plugins/forms/pickers/form-pickadate.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('backend/app-assets/css/plugins/charts/chart-apex.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('backend/app-assets/vendors/css/charts/apexcharts.css')}}">
<link rel="stylesheet" type="text/css"
    href="{{asset('backend/app-assets/css/plugins/extensions/ext-component-toastr.css')}}">
<!-- END: Vendor CSS-->

<!-- BEGIN: Theme CSS-->
<link rel="stylesheet" type="text/css" href="{{ asset('backend/app-assets/css/bootstrap.css')}}">
<link rel="stylesheet" type="text/css" href="{{ asset('backend/app-assets/css/bootstrap-extended.css')}}">
<link rel="stylesheet" type="text/css" href="{{ asset('backend/app-assets/css/colors.css')}}">
<link rel="stylesheet" type="text/css" href="{{ asset('backend/app-assets/css/components.css')}}">
<link rel="stylesheet" type="text/css" href="{{ asset('backend/app-assets/css/themes/dark-layout.css')}}">
<link rel="stylesheet" type="text/css" href="{{ asset('backend/app-assets/css/themes/bordered-layout.css')}}">
<link rel="stylesheet" type="text/css" href="{{ asset('backend/app-assets/css/themes/semi-dark-layout.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('backend/app-assets/css/plugins/forms/form-validation.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('backend/app-assets/css/plugins/forms/form-wizard.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('backend/app-assets/css/plugins/forms/form-quill-editor.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('backend/app-assets/vendors/css/editors/quill/katex.min.css')}}">
<link rel="stylesheet" type="text/css"
    href="{{asset('backend/app-assets/vendors/css/editors/quill/monokai-sublime.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('backend/app-assets/vendors/css/editors/quill/quill.snow.css')}}">
<link rel="stylesheet" type="text/css"
    href="{{asset('backend/app-assets/vendors/css/editors/quill/quill.bubble.css')}}">
<link rel="stylesheet" type="text/css"
    href="{{asset('backend/app-assets/vendors/css/forms/wizard/bs-stepper.min.css')}}">

<!-- BEGIN: Page CSS-->
<link rel="stylesheet" type="text/css"
    href="{{ asset('backend/app-assets/css/core/menu/menu-types/horizontal-menu.css')}}">
<link rel="stylesheet" type="text/css" href="{{ asset('backend/app-assets/css/pages/dashboard-ecommerce.css')}}">
<link rel="stylesheet" type="text/css"
    href="{{ asset('backend/app-assets/css/plugins/extensions/ext-component-toastr.css')}}">

<!-- END: Page CSS-->

<!-- BEGIN: Custom CSS-->
<link rel="stylesheet" type="text/css" href="{{ asset('backend/assets/css/style.css')}}">
<link rel="stylesheet" type="text/css" href="{{ asset('backend/css/style.css')}}">
<link rel="stylesheet" type="text/css"
    href="{{asset('backend/app-assets/vendors/css/file-uploaders/dropzone.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{ asset('backend/app-assets/css/plugins/forms/form-file-uploader.css')}}">
<link rel="stylesheet" type="text/css"
    href="{{asset('backend/app-assets/vendors/css/extensions/sweetalert2.min.css')}}">
<link rel="stylesheet" type="text/css"
    href="{{asset('backend/app-assets/css/plugins/extensions/ext-component-sweet-alerts.min.css')}}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
    integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
@stack('css')

<!-- END: Custom CSS-->