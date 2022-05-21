<link rel="stylesheet" href="{{ asset(mix('vendors/css/vendors.min.css')) }}" />
<link rel="stylesheet" href="{{ asset(mix('vendors/css/ui/prism.min.css')) }}" />
{{-- Vendor Styles --}}
@yield('vendor-style')
{{-- Theme Styles --}}

<link rel="stylesheet" href="{{ asset(mix('css/core.css')) }}" />

{{-- {!! Helper::applClasses() !!} --}}
@php $configData = Helper::applClasses(); @endphp

{{-- Page Styles --}}
@if($configData['mainLayoutType'] === 'horizontal')
<link rel="stylesheet" href="{{ asset(mix('css/base/core/menu/menu-types/horizontal-menu.css')) }}" />
@endif
<link rel="stylesheet" href="{{ asset(mix('css/base/core/menu/menu-types/vertical-menu.css')) }}" />
<!-- <link rel="stylesheet" href="{{ asset(mix('css/base/core/colors/palette-gradient.css')) }}"> -->

{{-- Google Fornt --}}
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Rowdies:wght@300&family=Source+Sans+Pro&display=swap"
    rel="stylesheet">
<link rel="stylesheet" href="{{ asset('css/style.css') }}" />
{{-- Page Styles --}}
@yield('page-style')
{{-- Laravel Style --}}

<link rel="stylesheet" href="{{ asset(mix('css/overrides.css')) }}" />


{{-- Custom RTL Styles --}}

@if($configData['direction'] === 'rtl' && isset($configData['direction']))
<link rel="stylesheet" href="{{ asset(mix('css-rtl/custom-rtl.css')) }}" />
<link rel="stylesheet" href="{{ asset(mix('css-rtl/style-rtl.css')) }}" />
@endif

{{-- user custom styles --}}

<link rel="stylesheet" href="{{ asset(mix('css/style.css')) }}" />

{{-- Font Awesome --}}
{{--
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/fontawesome.min.css"> --}}

{{-- Bootstrap --}}
{{--
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
{{--Bootstrap Script --}}
{{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
</script> --}}