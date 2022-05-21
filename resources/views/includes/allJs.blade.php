<script src="{{asset('backend/app-assets/vendors/js/jquery/jquery.min.js')}}"></script>

<!-- BEGIN: Vendor JS-->
<script src="{{asset('backend/app-assets/vendors/js/vendors.min.js')}}"></script>
<!-- BEGIN Vendor JS-->



<!-- BEGIN: Theme JS-->
<script src="{{asset('backend/app-assets/js/core/app-menu.js')}}"></script>
<script src="{{asset('backend/app-assets/js/core/app.js')}}"></script>
<!-- END: Theme JS-->

<script src="{{asset('backend/app-assets/vendors/js/pickers/pickadate/picker.js')}}"></script>
<script src="{{asset('backend/app-assets/vendors/js/pickers/pickadate/picker.date.js')}}"></script>
<script src="{{asset('backend/app-assets/vendors/js/pickers/pickadate/picker.time.js')}}"></script>
<script src="{{asset('backend/app-assets/vendors/js/pickers/pickadate/legacy.js')}}"></script>
<script src="{{asset('backend/app-assets/vendors/js/pickers/flatpickr/flatpickr.min.js')}}"></script>
<!-- END: Page Vendor JS-->
<!-- BEGIN:
    Page JS-->

<!-- BEGIN: Page Vendor JS-->
<script src="{{asset('backend/app-assets/vendors/js/forms/select/select2.full.min.js')}}"></script>
<!-- END: Page Vendor JS-->

<!-- BEGIN: Page JS-->
<script src="{{asset('backend/app-assets/js/scripts/forms/form-select2.js')}}"></script>


<script src="{{asset('backend/app-assets/js/scripts/forms/pickers/form-pickers.js')}}"></script>
<script src="{{asset('backend/app-assets/js/scripts/forms/pickers/form-pickers.js')}}"></script>



@toastr_js
@toastr_render
@include('panels.myScript')
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js"></script>

<script>
    @foreach($errors->all() as $error)
        toastr.error("{{$error}}")
    @endforeach
</script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
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

<script>
    $(document).ready(function() {
    $('.select2').select2();
    $("#income_list").click(function() {
        $("#div1").fadeIn("slow");
        // $("#income_list").hide();
    });
});
$(document).ready(function() {
    $("#hide_btn").click(function() {
        $("#div1").hide();
        // $("#income_list").hide();
    });
});
</script>
<script>
    function deleteData(id) {
        Swal.fire({
            title: 'Are you sure?',
            text: "you want to delete this record!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
            if (result.isConfirmed) {
                $('#delete-form-' + id).submit()
            }
        })
    }
</script>
<script>
    $(document).ready(function() {
        $('.select2').select2();
        $("#ownerRadio2").click(function() {
            $("#rentalCompany").fadeIn("slow");
            // $("#income_list").hide();
        });
    });
    $(document).ready(function() {
        $("#ownerRadio1").click(function() {
            $("#rentalCompany").hide();
            // $("#income_list").hide();
        });
    });


</script>

@stack('js')