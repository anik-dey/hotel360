<!-- BEGIN: Theme CSS-->
<link rel="stylesheet" type="text/css" href="{{asset('backend/app-assets/css/bootstrap.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('backend/app-assets/css/bootstrap-extended.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('backend/app-assets/css/colors.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('backend/app-assets/css/components.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('backend/app-assets/css/themes/dark-layout.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('backend/app-assets/css/themes/bordered-layout.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('backend/app-assets/css/themes/semi-dark-layout.css')}}">

<link rel="stylesheet" type="text/css" href="{{ asset('backend/app-assets/vendors/css/vendors.min.css')}}">

<!-- BEGIN: Page CSS-->
<link rel="stylesheet" type="text/css"
    href="{{asset('backend/app-assets/css/core/menu/menu-types/vertical-menu.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('backend/app-assets/css/pages/dashboard-ecommerce.css')}}">

<link rel="stylesheet" type="text/css"
    href="{{asset('backend/app-assets/css/plugins/extensions/ext-component-toastr.css')}}">
<!-- END: Page CSS-->

<!-- BEGIN: Custom CSS-->
<link rel="stylesheet" type="text/css" href="{{asset('backend/css/style.css')}}">
<!-- END: Custom CSS-->
<link rel="stylesheet" type="text/css" href="{{asset('backend/app-assets/vendors/css/forms/select/select2.min.css')}}">
<link rel="stylesheet" type="text/css"
    href="{{asset('backend/app-assets/vendors/css/pickers/pickadate/pickadate.css')}}">
<link rel="stylesheet" type="text/css"
    href="{{asset('backend/app-assets/vendors/css/pickers/flatpickr/flatpickr.min.css')}}">
<!-- END: Vendor CSS-->
<link rel="stylesheet" type="text/css"
    href="{{asset('backend/app-assets/css/core/menu/menu-types/vertical-menu.css')}}">
<link rel="stylesheet" type="text/css"
    href="{{asset('backend/app-assets/css/plugins/forms/pickers/form-flat-pickr.css')}}">
<link rel="stylesheet" type="text/css"
    href="{{asset('backend/app-assets/css/plugins/forms/pickers/form-pickadate.css')}}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
    integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />

@toastr_css

<style>
    #toast-container>.toast-error {
        background-color: #c00505 !important;
        font-size: 15px;
        color: black !important;
    }

    #toast-container>.toast-success {
        background-color: #095f0d !important;
        font-size: 15px;
        color: #fff !important;
    }
</style>

@stack('css')
