@extends('layouts.master')
@section('content')
<div class="content-body">
    <!-- account setting page -->
    <section id="page-account-settings">
        <div class="row">
            <!-- left menu section -->
            <div class="col-md-3 mb-2 mb-md-0">
                <ul class="nav nav-pills flex-column nav-left">
                    <!-- general -->
                    <li class="nav-item">
                        <a class="nav-link active" id="account-pill-general" data-toggle="pill"
                            href="#account-vertical-general" aria-expanded="true">
                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="feather feather-user font-medium-3 mr-1">
                                <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                <circle cx="12" cy="7" r="4"></circle>
                            </svg>
                            <span class="font-weight-bold">General</span>
                        </a>
                    </li>
                    <!-- change password -->
                    <li class="nav-item">
                        <a class="nav-link" id="account-pill-password" data-toggle="pill"
                            href="#account-vertical-password" aria-expanded="false">
                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="feather feather-lock font-medium-3 mr-1">
                                <rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect>
                                <path d="M7 11V7a5 5 0 0 1 10 0v4"></path>
                            </svg>
                            <span class="font-weight-bold">Account Information</span>
                        </a>
                    </li>
                    <!-- information -->
                    <li class="nav-item">
                        <a class="nav-link" id="account-pill-info" data-toggle="pill" href="#account-vertical-info"
                            aria-expanded="false">
                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="feather feather-info font-medium-3 mr-1">
                                <circle cx="12" cy="12" r="10"></circle>
                                <line x1="12" y1="16" x2="12" y2="12"></line>
                                <line x1="12" y1="8" x2="12.01" y2="8"></line>
                            </svg>
                            <span class="font-weight-bold">Documnet Information</span>
                        </a>
                    </li>
                    <!-- social -->
                    <li class="nav-item">
                        <a class="nav-link" id="account-pill-social" data-toggle="pill" href="#account-vertical-social"
                            aria-expanded="false">
                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="feather feather-link font-medium-3 mr-1">
                                <path d="M10 13a5 5 0 0 0 7.54.54l3-3a5 5 0 0 0-7.07-7.07l-1.72 1.71"></path>
                                <path d="M14 11a5 5 0 0 0-7.54-.54l-3 3a5 5 0 0 0 7.07 7.07l1.71-1.71"></path>
                            </svg>
                            <span class="font-weight-bold">Booking Information</span>
                        </a>
                    </li>
                    <!-- notification -->
                    <li class="nav-item">
                        <a class="nav-link" id="account-pill-notifications" data-toggle="pill"
                            href="#account-vertical-notifications" aria-expanded="false">
                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="feather feather-bell font-medium-3 mr-1">
                                <path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"></path>
                                <path d="M13.73 21a2 2 0 0 1-3.46 0"></path>
                            </svg>
                            <span class="font-weight-bold">Payroll Information</span>
                        </a>
                    </li>
                    <!--Activity -->
                    <li class="nav-item">
                        <a class="nav-link" id="account-pill-activity" data-toggle="pill"
                            href="#account-vertical-activity" aria-expanded="false">
                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="feather feather-bell font-medium-3 mr-1">
                                <path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"></path>
                                <path d="M13.73 21a2 2 0 0 1-3.46 0"></path>
                            </svg>
                            <span class="font-weight-bold">Activity</span>
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
                                <div class="media">
                                    <a href="javascript:void(0);" class="mr-25">
                                        <img src="{{ asset('backend/app-assets/images/portrait/small/avatar-s-11.jpg') }}"
                                            id="account-upload-img" class="rounded mr-50" alt="profile image"
                                            height="80" width="80">
                                    </a>
                                    <!-- upload and reset button -->
                                    <!-- <div class="media-body mt-75 ml-1">
                                                    <label for="account-upload" class="btn btn-sm btn-primary mb-75 mr-75 waves-effect waves-float waves-light">Upload</label>
                                                    <input type="file" id="account-upload" hidden="" accept="image/*">
                                                    <button class="btn btn-sm btn-outline-secondary mb-75 waves-effect">Reset</button>
                                                    <p>Allowed JPG, GIF or PNG. Max size of 800kB</p>
                                                </div> -->
                                    <!--/ upload and reset button -->
                                </div>
                                <!--/ header media -->

                                <!-- form -->
                                <form class="validate-form mt-2" novalidate="novalidate">
                                    <div class="row">
                                        <div class="col-12 col-sm-6">
                                            <div class="form-group">
                                                <label for="account-username">Username</label>
                                                <input type="text" class="form-control" id="account-username"
                                                    name="username" placeholder="Username" value="johndoe">
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-6">
                                            <div class="form-group">
                                                <label for="account-name">Name</label>
                                                <input type="text" class="form-control" id="account-name" name="name"
                                                    placeholder="Name" value="John Doe">
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-6">
                                            <div class="form-group">
                                                <label for="account-e-mail">E-mail</label>
                                                <input type="email" class="form-control" id="account-e-mail"
                                                    name="email" placeholder="Email" value="granger007@hogward.com">
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-6">
                                            <div class="form-group">
                                                <label for="account-company">Company</label>
                                                <input type="text" class="form-control" id="account-company"
                                                    name="company" placeholder="Company name"
                                                    value="Crystal Technologies">
                                            </div>
                                        </div>
                                        <div class="col-12 mt-75">
                                            <div class="alert alert-warning mb-50" role="alert">
                                                <h4 class="alert-heading">Your email is not confirmed. Please check your
                                                    inbox.</h4>
                                                <div class="alert-body">
                                                    <a href="javascript: void(0);" class="alert-link">Resend
                                                        confirmation</a>
                                                </div>
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

                            <!-- Account Information -->
                            @include('modules.guest.details.accountInfo')
                            <!--/ Account Information -->

                            <!-- information -->
                            <div class="tab-pane fade" id="account-vertical-info" role="tabpanel"
                                aria-labelledby="account-pill-info" aria-expanded="false">
                                <!-- form -->
                                <form class="validate-form" novalidate="novalidate">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label for="accountTextarea">Bio</label>
                                                <textarea class="form-control" id="accountTextarea" rows="4"
                                                    placeholder="Your Bio data here..."></textarea>
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-6">
                                            <div class="form-group">
                                                <label for="account-birth-date">Birth date</label>
                                                <input type="text" class="form-control flatpickr flatpickr-input"
                                                    placeholder="Birth date" id="account-birth-date" name="dob"
                                                    readonly="readonly">
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-6">
                                            <div class="form-group">
                                                <label for="accountSelect">Country</label>
                                                <select class="form-control" id="accountSelect">
                                                    <option>USA</option>
                                                    <option>India</option>
                                                    <option>Canada</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-6">
                                            <div class="form-group">
                                                <label for="account-website">Website</label>
                                                <input type="text" class="form-control" name="website"
                                                    id="account-website" placeholder="Website address">
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-6">
                                            <div class="form-group">
                                                <label for="account-phone">Phone</label>
                                                <input type="text" class="form-control" id="account-phone"
                                                    placeholder="Phone number" value="(+656) 254 2568" name="phone">
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

                            <!-- social -->
                            <div class="tab-pane fade" id="account-vertical-social" role="tabpanel"
                                aria-labelledby="account-pill-social" aria-expanded="false">
                                <!-- form -->
                                <form class="validate-form" novalidate="novalidate">
                                    <div class="row">
                                        <!-- social header -->
                                        <div class="col-12">
                                            <div class="d-flex align-items-center mb-2">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="feather feather-link font-medium-3">
                                                    <path
                                                        d="M10 13a5 5 0 0 0 7.54.54l3-3a5 5 0 0 0-7.07-7.07l-1.72 1.71">
                                                    </path>
                                                    <path
                                                        d="M14 11a5 5 0 0 0-7.54-.54l-3 3a5 5 0 0 0 7.07 7.07l1.71-1.71">
                                                    </path>
                                                </svg>
                                                <h4 class="mb-0 ml-75">Social Links</h4>
                                            </div>
                                        </div>
                                        <!-- twitter link input -->
                                        <div class="col-12 col-sm-6">
                                            <div class="form-group">
                                                <label for="account-twitter">Twitter</label>
                                                <input type="text" id="account-twitter" class="form-control"
                                                    placeholder="Add link" value="https://www.twitter.com">
                                            </div>
                                        </div>
                                        <!-- facebook link input -->
                                        <div class="col-12 col-sm-6">
                                            <div class="form-group">
                                                <label for="account-facebook">Facebook</label>
                                                <input type="text" id="account-facebook" class="form-control"
                                                    placeholder="Add link">
                                            </div>
                                        </div>
                                        <!-- google plus input -->
                                        <div class="col-12 col-sm-6">
                                            <div class="form-group">
                                                <label for="account-google">Google+</label>
                                                <input type="text" id="account-google" class="form-control"
                                                    placeholder="Add link">
                                            </div>
                                        </div>
                                        <!-- linkedin link input -->
                                        <div class="col-12 col-sm-6">
                                            <div class="form-group">
                                                <label for="account-linkedin">LinkedIn</label>
                                                <input type="text" id="account-linkedin" class="form-control"
                                                    placeholder="Add link" value="https://www.linkedin.com">
                                            </div>
                                        </div>
                                        <!-- instagram link input -->
                                        <div class="col-12 col-sm-6">
                                            <div class="form-group">
                                                <label for="account-instagram">Instagram</label>
                                                <input type="text" id="account-instagram" class="form-control"
                                                    placeholder="Add link">
                                            </div>
                                        </div>
                                        <!-- Quora link input -->
                                        <div class="col-12 col-sm-6">
                                            <div class="form-group">
                                                <label for="account-quora">Quora</label>
                                                <input type="text" id="account-quora" class="form-control"
                                                    placeholder="Add link">
                                            </div>
                                        </div>

                                        <!-- divider -->
                                        <div class="col-12">
                                            <hr class="my-2">
                                        </div>

                                        <div class="col-12 mt-1">
                                            <!-- profile connection header -->
                                            <div class="d-flex align-items-center mb-3">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="feather feather-user font-medium-3">
                                                    <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                                    <circle cx="12" cy="7" r="4"></circle>
                                                </svg>
                                                <h4 class="mb-0 ml-75">Profile Connections</h4>
                                            </div>

                                            <div class="row">
                                                <!-- twitter user -->
                                                <div class="col-6 col-md-3 text-center mb-1">
                                                    <p class="font-weight-bold">Your Twitter</p>
                                                    <div class="avatar mb-1">
                                                        <span class="avatar-content">
                                                            <img src="{{ asset('backend/app-assets/images/avatars/11-small.png') }}"
                                                                alt="avatar img" width="40" height="40">
                                                        </span>
                                                    </div>
                                                    <p class="mb-0">@johndoe</p>
                                                    <a href="javascript:void(0)">Disconnect</a>
                                                </div>
                                                <!-- facebook button -->
                                                <div class="col-6 col-md-3 text-center mb-1">
                                                    <p class="font-weight-bold mb-2">Your Facebook</p>
                                                    <button
                                                        class="btn btn-outline-primary waves-effect">Connect</button>
                                                </div>
                                                <!-- google user -->
                                                <div class="col-6 col-md-3 text-center mb-1">
                                                    <p class="font-weight-bold">Your Google</p>
                                                    <div class="avatar mb-1">
                                                        <span class="avatar-content">
                                                            <img src="{{ asset('backend/app-assets/images/avatars/3-small.png') }}"
                                                                alt="avatar img" width="40" height="40">
                                                        </span>
                                                    </div>
                                                    <p class="mb-0">@luraweber</p>
                                                    <a href="javascript:void(0)">Disconnect</a>
                                                </div>
                                                <!-- github button -->
                                                <div class="col-6 col-md-3 text-center mb-2">
                                                    <p class="font-weight-bold mb-1">Your GitHub</p>
                                                    <button
                                                        class="btn btn-outline-primary waves-effect">Connect</button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <!-- submit and cancel button -->
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
                            <!--/ social -->

                            <!-- notifications -->
                            <div class="tab-pane fade" id="account-vertical-notifications" role="tabpanel"
                                aria-labelledby="account-pill-notifications" aria-expanded="false">
                                <div class="row">
                                    <h6 class="section-label mx-1 mb-2">Activity</h6>
                                    <div class="col-12 mb-2">
                                        <div class="custom-control custom-switch">
                                            <input type="checkbox" class="custom-control-input" checked=""
                                                id="accountSwitch1">
                                            <label class="custom-control-label" for="accountSwitch1">
                                                Email me when someone comments onmy article
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-12 mb-2">
                                        <div class="custom-control custom-switch">
                                            <input type="checkbox" class="custom-control-input" checked=""
                                                id="accountSwitch2">
                                            <label class="custom-control-label" for="accountSwitch2">
                                                Email me when someone answers on my form
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-12 mb-2">
                                        <div class="custom-control custom-switch">
                                            <input type="checkbox" class="custom-control-input" id="accountSwitch3">
                                            <label class="custom-control-label" for="accountSwitch3">Email me hen
                                                someone follows me</label>
                                        </div>
                                    </div>
                                    <h6 class="section-label mx-1 mt-2">Application</h6>
                                    <div class="col-12 mt-1 mb-2">
                                        <div class="custom-control custom-switch">
                                            <input type="checkbox" class="custom-control-input" checked=""
                                                id="accountSwitch4">
                                            <label class="custom-control-label" for="accountSwitch4">News and
                                                announcements</label>
                                        </div>
                                    </div>
                                    <div class="col-12 mb-2">
                                        <div class="custom-control custom-switch">
                                            <input type="checkbox" class="custom-control-input" checked=""
                                                id="accountSwitch6">
                                            <label class="custom-control-label" for="accountSwitch6">Weekly product
                                                updates</label>
                                        </div>
                                    </div>
                                    <div class="col-12 mb-75">
                                        <div class="custom-control custom-switch">
                                            <input type="checkbox" class="custom-control-input" id="accountSwitch5">
                                            <label class="custom-control-label" for="accountSwitch5">Weekly blog
                                                digest</label>
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
                            </div>
                            <!--/ notifications -->

                            <!-- activity -->
                            @include('modules.guest.details.activity')
                            <!--/activity -->
                        </div>
                    </div>
                </div>
            </div>
            <!--/ right content section -->
        </div>
    </section>
    <!-- / account setting page -->

</div>
@endsection
