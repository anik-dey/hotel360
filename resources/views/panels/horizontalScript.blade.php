<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="{{ asset('backend/app-assets/vendors/js/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('backend/app-assets/vendors/js/vendors.min.js') }}"></script>
<script
    src="{{ asset('backend/app-assets/vendors/js/forms/select/select2.full.min.js') }}">
</script>
<!-- BEGIN Vendor JS-->

<!-- BEGIN: Page Vendor JS-->
<script src="{{ asset('backend/app-assets/vendors/js/ui/jquery.sticky.js') }}"></script>
<script src="{{ asset('backend/app-assets/vendors/js/file-uploaders/dropzone.min.js') }}">
</script>
<script src="{{ asset('backend/app-assets/js/core/app-menu.js') }}">
</script>
<script src="{{ asset('backend/app-assets/js/core/app.js') }}"></script>
<script src="{{ asset('backend/app-assets/vendors/js/pickers/pickadate/picker.js') }}">
</script>
<script
    src="{{ asset('backend/app-assets/vendors/js/pickers/pickadate/picker.date.js') }}">
</script>
<script
    src="{{ asset('backend/app-assets/vendors/js/pickers/pickadate/picker.time.js') }}">
</script>
<script src="{{ asset('backend/app-assets/vendors/js/pickers/pickadate/legacy.js') }}">
</script>
<script
    src="{{ asset('backend/app-assets/vendors/js/pickers/flatpickr/flatpickr.min.js') }}">
</script>

<!-- END: Theme JS-->

<!-- BEGIN: Page JS-->
<!-- END: Page JS-->
<script src="{{ asset('backend/app-assets/js/scripts/forms/form-file-uploader.js') }}">
</script>
<script src="{{ asset('backend/app-assets/js/scripts/forms/pickers/form-pickers.js') }}">
</script>
<script src="{{ asset('backend/app-assets/js/scripts/forms/form-select2.js') }}"></script>
<script src="{{ asset('backend/app-assets/vendors/js/forms/wizard/bs-stepper.min.js') }}">
</script>
<script
    src="{{ asset('backend/app-assets/vendors/js/forms/validation/jquery.validate.min.js') }}">
</script>
<script src="{{ asset('backend/app-assets/js/scripts/forms/form-wizard.js') }}"></script>
<script src="{{ asset('backend/app-assets/vendors/js/editors/quill/katex.min.js') }}">
</script>
<script src="{{ asset('backend/app-assets/vendors/js/editors/quill/highlight.min.js') }}">
</script>
<script src="{{ asset('backend/app-assets/vendors/js/editors/quill/quill.min.js') }}">
</script>
<script src="https://cdn.tiny.cloud/1/ecz2lwv57rndckc24ddljuir2n5wlcvy2mj9mh7cwyx2w0nn/tinymce/5/tinymce.min.js"
    referrerpolicy="origin"></script>
<script>
    $(window).on('load', function () {
        if (feather) {
            feather.replace({
                width: 14,

                height: 14
            });
        }
    })

</script>

<script
    src="{{ asset('backend/app-assets/vendors/js/extensions/sweetalert2.all.min.js') }}">
</script>
<script
    src="{{ asset('backend/app-assets/js/scripts/extensions/ext-component-sweet-alerts.min.js') }}">
</script>

@toastr_js
    @toastr_render

        <script>
            @foreach($errors->all() as $error)
            toastr.error("{{$error}}");
            @endforeach

        </script>
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
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
