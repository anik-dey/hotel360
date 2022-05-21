@extends('layouts.master')
@section('title', 'Account Settings')
@section('content')
<section id="page-account-settings">
    <div class="row">
        <!-- left menu section -->
        <div class="col-md-3 mb-2 mb-md-0">
            <ul class="nav nav-pills flex-column nav-left">
                <!-- general -->
                <li class="nav-item">
                    <a class="nav-link active" id="account-pill-general" data-toggle="pill"
                        href="#account-vertical-general" aria-expanded="true">
                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="feather feather-user font-medium-3 mr-1">
                            <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                            <circle cx="12" cy="7" r="4"></circle>
                        </svg>
                        <span class="font-weight-bold">General</span>
                    </a>
                </li>
                <!-- change password -->
                <li class="nav-item">
                    <a class="nav-link" id="account-pill-password" data-toggle="pill" href="#account-vertical-password"
                        aria-expanded="false">
                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="feather feather-lock font-medium-3 mr-1">
                            <rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect>
                            <path d="M7 11V7a5 5 0 0 1 10 0v4"></path>
                        </svg>
                        <span class="font-weight-bold">Change Password</span>
                    </a>
                </li>
                <!-- information -->
                <li class="nav-item">
                    <a class="nav-link" id="account-pill-info" data-toggle="pill" href="#account-vertical-info"
                        aria-expanded="false">
                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="feather feather-info font-medium-3 mr-1">
                            <circle cx="12" cy="12" r="10"></circle>
                            <line x1="12" y1="16" x2="12" y2="12"></line>
                            <line x1="12" y1="8" x2="12.01" y2="8"></line>
                        </svg>
                        <span class="font-weight-bold">Information</span>
                    </a>
                </li>
            </ul>
        </div>
        <!--/ left menu section -->

        <!-- right content section -->
        <div class="col-md-9">
            <div class="card">
                <div class="card-body">
                    <div class="tab-content">
                        <!-- general tab -->
                        <div role="tabpanel" class="tab-pane active" id="account-vertical-general"
                            aria-labelledby="account-pill-general" aria-expanded="true">
                            <!-- header media -->
                            <form action="{{ route('account-setting-upload') }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="media">
                                    <a href="javascript:void(0);" class="mr-25">
                                        <img src="{{ asset('employee_picture/'.$employee->employees->profile_pic) }}"
                                            id="account-upload-img" class="rounded mr-50" alt="profile image"
                                            height="80" width="80">
                                    </a>
                                    <!-- upload and reset button -->
                                    <div class="media-body mt-75 ml-1">
                                        <label for="account-upload"
                                            class="btn btn-sm btn-primary mb-75 mr-75 waves-effect waves-float waves-light">Upload</label>
                                        <button
                                            class="btn btn-sm btn-outline-secondary mb-75 waves-effect">Set</button><br>
                                        <input type="file" name="profile_pic" id="account-upload" accept="image/*">
                                    </div>
                                    <!--/ upload and reset button -->
                                </div>
                            </form>
                            <!--/ header media -->

                            <!-- form -->
                            <form class="validate-form mt-2" novalidate="novalidate"
                                action="{{ route ('account-setting.store') }}" method="POST">
                                @csrf
                                @method('POST')
                                <div class="row">
                                    <div class="col-12 col-sm-6">
                                        <div class="form-group">
                                            <label for="account-username">Username</label>
                                            <input type="text" class="form-control" id="username" name="username"
                                                placeholder="Username" value="{{ $employee->username }}" required>
                                            <div align="right" id="check_username" class="text-danger">
                                                <label></label></div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-6">
                                        <div class="form-group">
                                            <label for="account-name">Name</label>
                                            <input type="text" class="form-control" id="account-name"
                                                name="employee_name" placeholder="Name"
                                                value="{{ $employee->employees->employee_name }}" required>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-6">
                                        <div class="form-group">
                                            <label for="account-e-mail">E-mail</label>
                                            <input type="email" class="form-control" id="email" name="email"
                                                placeholder="Email" value="{{ $employee->email }}" required>
                                            <div align="right" id="check_email" class="text-danger"><label></label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-6">
                                        <div class="form-group">
                                            <label for="account-company">Phone Number</label>
                                            <input type="text" class="form-control" id="account-company"
                                                name="mobile_number" placeholder="Phone"
                                                value="{{ $employee->employees->mobile_number }}" required>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <button type="submit"
                                            class="btn btn-primary mt-2 mr-1 waves-effect waves-float waves-light">Save
                                            changes</button>
                                        <button type="reset"
                                            class="btn btn-outline-secondary mt-2 waves-effect">Cancel</button>
                                    </div>
                                </div>
                            </form>
                            <!--/ form -->
                        </div>
                        <!--/ general tab -->

                        <!-- change password -->
                        <div class="tab-pane fade" id="account-vertical-password" role="tabpanel"
                            aria-labelledby="account-pill-password" aria-expanded="false">
                            <!-- form -->
                            <form class="validate-form" novalidate="novalidate"
                                action="{{ route('account-setting-password') }}" method="POST">
                                @csrf
                                <div class="row">
                                    <div class="col-12 col-sm-6">
                                        <div class="form-group">
                                            <label for="account-old-password">Old Password</label>
                                            <div class="input-group form-password-toggle input-group-merge">
                                                <input type="password" class="form-control" id="old-password"
                                                    name="old_password" placeholder="Old Password" required>
                                                <div class="input-group-append">
                                                    <div class="input-group-text cursor-pointer">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                            stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round" class="feather feather-eye">
                                                            <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z">
                                                            </path>
                                                            <circle cx="12" cy="12" r="3"></circle>
                                                        </svg>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 col-sm-6">
                                        <div class="form-group">
                                            <label for="account-new-password">New Password</label>
                                            <div class="input-group form-password-toggle input-group-merge">
                                                <input type="password" id="password" name="password"
                                                    class="form-control" placeholder="New Password" required>
                                                <div class="input-group-append">
                                                    <div class="input-group-text cursor-pointer">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                            stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round" class="feather feather-eye">
                                                            <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z">
                                                            </path>
                                                            <circle cx="12" cy="12" r="3"></circle>
                                                        </svg>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-6">
                                        <div class="form-group">
                                            <label for="account-retype-new-password">Retype New Password</label>
                                            <div class="input-group form-password-toggle input-group-merge">
                                                <input type="password" class="form-control" id="confirm-password"
                                                    name="confirm_password" placeholder="New Password" required>
                                                <div class="input-group-append">
                                                    <div class="input-group-text cursor-pointer"><svg
                                                            xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                            stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round" class="feather feather-eye">
                                                            <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z">
                                                            </path>
                                                            <circle cx="12" cy="12" r="3"></circle>
                                                        </svg></div>
                                                </div>
                                            </div>
                                            <div align="right">
                                                <span id='message'></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <button type="submit"
                                            class="btn btn-primary mr-1 mt-1 waves-effect waves-float waves-light">Save
                                            changes</button>
                                        <button type="reset"
                                            class="btn btn-outline-secondary mt-1 waves-effect">Cancel</button>
                                    </div>
                                </div>
                            </form>
                            <!--/ form -->
                        </div>
                        <!--/ change password -->

                        <!-- information -->
                        <div class="tab-pane fade" id="account-vertical-info" role="tabpanel"
                            aria-labelledby="account-pill-info" aria-expanded="false">
                            <!-- form -->
                            <form class="validate-form" novalidate="novalidate"
                                action="{{ route('account-setting-info') }}" method="POST">
                                @csrf
                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label for="accountTextarea">Address</label>
                                            <textarea class="form-control" id="accountTextarea" rows="4"
                                                placeholder="Your Address data here...">{{ $employee->employees->address }}</textarea>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-6">
                                        <div class="form-group">
                                            <label for="account-birth-date">Birth date</label>
                                            <input type="date" class="form-control flatpickr flatpickr-input"
                                                placeholder="Birth date" id="account-birth-date" name="dob"
                                                value="{{ $employee->employees->dob }}">
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-6">
                                        <div class="form-group">
                                            <label for="account-website">Father Name</label>
                                            <input type="text" class="form-control" name="father_name"
                                                id="account-website" placeholder="Father Name"
                                                value="{{ $employee->employees->father_name }}">
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-6">
                                        <div class="form-group">
                                            <label for="account-website">Mother Name</label>
                                            <input type="text" class="form-control" name="mother_name"
                                                id="account-website" placeholder="Mother Name"
                                                value="{{ $employee->employees->mother_name }}">
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-6">
                                        <div class="form-group">
                                            <label for="account-phone">NID</label>
                                            <input type="text" class="form-control" id="account-phone"
                                                placeholder="National Id number" name="nid"
                                                value="{{ $employee->employees->nid }}" readonly>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-6">
                                        <div class="form-group">
                                            <label for="account-phone">Joining Date</label>
                                            <input type="text" class="form-control" id="account-phone"
                                                placeholder="Joining Date" name="joining_date"
                                                value="{{ $employee->employees->joining_date }}" readonly>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-6">
                                        <div class="form-group">
                                            <label for="account-phone">Designation</label>
                                            <input type="text" class="form-control" id="account-phone"
                                                placeholder="Designation" name="designation"
                                                value="{{ $employee->employees->designation }}" readonly>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <button type="submit"
                                            class="btn btn-primary mt-1 mr-1 waves-effect waves-float waves-light">Save
                                            changes</button>
                                        <button type="reset"
                                            class="btn btn-outline-secondary mt-1 waves-effect">Cancel</button>
                                    </div>
                                </div>
                            </form>
                            <!--/ form -->
                        </div>
                        <!--/ information -->

                    </div>
                </div>
            </div>
        </div>
        <!--/ right content section -->
    </div>
</section>
<script>
    $(document).ready(function () {
        $('#username').keyup(function () {
            var username = $(this).val()
            $.ajax({
                url: "{{ url('api/fetch-username') }}",
                type: "POST",
                data: {
                    username: username,
                    _token: '{{ csrf_token() }}'
                },
                dataType: 'json',
                success: function (result) {
                    $('#check_username').html(result.username);
                },
                error: (error) => {
                    console.log("error", error);
                }
            });
        });
    });

</script>
<script>
    $(document).ready(function () {
        $('#email').keyup(function () {
            var email = $(this).val()
            $.ajax({
                url: "{{ url('api/fetch-email') }}",
                type: "POST",
                data: {
                    email: email,
                    _token: '{{ csrf_token() }}'
                },
                dataType: 'json',
                success: function (result) {
                    $('#check_email').html(result.email);
                },
                error: (error) => {
                    console.log("error", error);
                }
            });
        });
    });

</script>
<script>
    $('#password, #confirm-password').on('keyup', function () {
        if ($('#password').val() == $('#confirm-password').val()) {
            $('#message').html('Matching').css('color', 'green');
        } else
            $('#message').html('Not Matching').css('color', 'red');
    });

</script>
@endsection
