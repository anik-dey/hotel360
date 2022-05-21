@extends('layouts.controllerlayout')
@section('content')
{{-- <div class="row justify-content-around">
    <div class="col-lg-11">
        <div class="row">
            <div class="col-lg-5 col-sm-12 ml-1">
                <h1>Welcome Superadmin</h1>
            </div>
            <div class="col-lg-5 col-sm-12 d-flex justify-content-center">
                <a type="button" href="" class="btn btn-primary">Today</a>
                <a type="button" href="" class="btn btn-primary ml-1">This Week</a>
                <a type="button" href="" class="btn btn-primary ml-1">This Month</a>
                <a type="button" href="" class="btn btn-primary ml-1">This Year</a>
            </div>
        </div>
    </div>
    <div class="col-lg-4 col-md-6 my-1">
        <div class="dashboard-card p-2 border rounded">
            <div class="dash-card">
                <h2>$ 150</h2>
                <h4>New Subscriptions</h4>
            </div>
            <div class="card-icon">
                <svg width="100" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                    <path
                        d="M568.2 336.3c-13.12-17.81-38.14-21.66-55.93-8.469l-119.7 88.17h-120.6c-8.748 0-15.1-7.25-15.1-15.99c0-8.75 7.25-16 15.1-16h78.25c15.1 0 30.75-10.88 33.37-26.62c3.25-20-12.12-37.38-31.62-37.38H191.1c-26.1 0-53.12 9.25-74.12 26.25l-46.5 37.74L15.1 383.1C7.251 383.1 0 391.3 0 400v95.98C0 504.8 7.251 512 15.1 512h346.1c22.03 0 43.92-7.188 61.7-20.27l135.1-99.52C577.5 379.1 581.3 354.1 568.2 336.3zM279.3 175C271.7 173.9 261.7 170.3 252.9 167.1L248 165.4C235.5 160.1 221.8 167.5 217.4 179.1s2.121 26.2 14.59 30.64l4.655 1.656c8.486 3.061 17.88 6.095 27.39 8.312V232c0 13.25 10.73 24 23.98 24s24-10.75 24-24V221.6c25.27-5.723 42.88-21.85 46.1-45.72c8.688-50.05-38.89-63.66-64.42-70.95L288.4 103.1C262.1 95.64 263.6 92.42 264.3 88.31c1.156-6.766 15.3-10.06 32.21-7.391c4.938 .7813 11.37 2.547 19.65 5.422c12.53 4.281 26.21-2.312 30.52-14.84s-2.309-26.19-14.84-30.53c-7.602-2.627-13.92-4.358-19.82-5.721V24c0-13.25-10.75-24-24-24s-23.98 10.75-23.98 24v10.52C238.8 40.23 221.1 56.25 216.1 80.13C208.4 129.6 256.7 143.8 274.9 149.2l6.498 1.875c31.66 9.062 31.15 11.89 30.34 16.64C310.6 174.5 296.5 177.8 279.3 175z" />
                </svg>
            </div>
            <hr>
            <div class="dash-card-footer">
                <a href=""> Click For More <span><svg width="15" xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 448 512">
                            <path
                                d="M438.6 278.6l-160 160C272.4 444.9 264.2 448 256 448s-16.38-3.125-22.62-9.375c-12.5-12.5-12.5-32.75 0-45.25L338.8 288H32C14.33 288 .0016 273.7 .0016 256S14.33 224 32 224h306.8l-105.4-105.4c-12.5-12.5-12.5-32.75 0-45.25s32.75-12.5 45.25 0l160 160C451.1 245.9 451.1 266.1 438.6 278.6z" />
                        </svg></span>
                </a>
            </div>
        </div>
    </div>
    <div class="col-lg-4 col-md-6 my-1">
        <div class="dashboard-card p-2 border rounded ">
            <div class="dash-card">
                <h2>120</h2>
                <h4 style="font-size:18px">New Business Registrations</h4>
            </div>
            <div class="card-icon">
                <svg width="100" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512">
                    <path
                        d="M319.9 320c57.41 0 103.1-46.56 103.1-104c0-57.44-46.54-104-103.1-104c-57.41 0-103.1 46.56-103.1 104C215.9 273.4 262.5 320 319.9 320zM369.9 352H270.1C191.6 352 128 411.7 128 485.3C128 500.1 140.7 512 156.4 512h327.2C499.3 512 512 500.1 512 485.3C512 411.7 448.4 352 369.9 352zM512 160c44.18 0 80-35.82 80-80S556.2 0 512 0c-44.18 0-80 35.82-80 80S467.8 160 512 160zM183.9 216c0-5.449 .9824-10.63 1.609-15.91C174.6 194.1 162.6 192 149.9 192H88.08C39.44 192 0 233.8 0 285.3C0 295.6 7.887 304 17.62 304h199.5C196.7 280.2 183.9 249.7 183.9 216zM128 160c44.18 0 80-35.82 80-80S172.2 0 128 0C83.82 0 48 35.82 48 80S83.82 160 128 160zM551.9 192h-61.84c-12.8 0-24.88 3.037-35.86 8.24C454.8 205.5 455.8 210.6 455.8 216c0 33.71-12.78 64.21-33.16 88h199.7C632.1 304 640 295.6 640 285.3C640 233.8 600.6 192 551.9 192z" />
                </svg>
            </div>
            <hr>
            <div class="dash-card-footer">
                <a href=""> Click For More <span>
                        <svg width="15" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                            <path
                                d="M438.6 278.6l-160 160C272.4 444.9 264.2 448 256 448s-16.38-3.125-22.62-9.375c-12.5-12.5-12.5-32.75 0-45.25L338.8 288H32C14.33 288 .0016 273.7 .0016 256S14.33 224 32 224h306.8l-105.4-105.4c-12.5-12.5-12.5-32.75 0-45.25s32.75-12.5 45.25 0l160 160C451.1 245.9 451.1 266.1 438.6 278.6z" />
                        </svg></span>
                </a>
            </div>
        </div>
    </div>
    <div class="col-lg-4 col-md-6 my-1">
        <div class="dashboard-card p-2 border rounded">
            <div class="dash-card">
                <h2>05</h2>
                <h4>Not Subscribe</h4>
            </div>
            <div class="card-icon">
                <svg width="100" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512">
                    <path
                        d="M240 320h320c26.4 0 48-21.6 48-48v-192C608 53.6 586.4 32 560 32H448v128l-48-32L352 160V32H240C213.6 32 192 53.6 192 80v192C192 298.4 213.6 320 240 320zM608 384H128V64c0-35.2-28.8-64-64-64H31.1C14.4 0 0 14.4 0 32S14.4 64 31.1 64H48C56.84 64 64 71.16 64 80v335.1c0 17.6 14.4 32 32 32l66.92-.0009C161.1 453 160 458.4 160 464C160 490.5 181.5 512 208 512S256 490.5 256 464c0-5.641-1.13-10.97-2.917-16h197.9c-1.787 5.027-2.928 10.36-2.928 16C448 490.5 469.5 512 496 512c26.51 0 48.01-21.49 48.01-47.1c0-5.641-1.12-10.97-2.907-16l66.88 .0009C625.6 448 640 433.6 640 415.1C640 398.4 625.6 384 608 384z" />
                </svg>
            </div>
            <hr>
            <div class="dash-card-footer">
                <a href=""> Click For More <span><svg width="15" xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 448 512">
                            <path
                                d="M438.6 278.6l-160 160C272.4 444.9 264.2 448 256 448s-16.38-3.125-22.62-9.375c-12.5-12.5-12.5-32.75 0-45.25L338.8 288H32C14.33 288 .0016 273.7 .0016 256S14.33 224 32 224h306.8l-105.4-105.4c-12.5-12.5-12.5-32.75 0-45.25s32.75-12.5 45.25 0l160 160C451.1 245.9 451.1 266.1 438.6 278.6z" />
                        </svg></span></a>
            </div>
        </div>
    </div>
</div> --}}
<div class="row my-1 d-flex justify-centent-start">
    <div class="col-md-6"></div>
    <div class="col-lg-6 col-sm-12 d-flex justify-content-md-end">
        <a type="button" href="" class="btn btn-primary">Today</a>
        <a type="button" href="" class="btn btn-primary ml-1">This Week</a>
        <a type="button" href="" class="btn btn-primary ml-1">This Month</a>
        <a type="button" href="" class="btn btn-primary ml-1">This Year</a>
    </div>
</div>
<div class="row match-height">
    <!-- Medal Card -->
    <div class="col-xl-4 col-md-6 col-12">
        <div class="card card-congratulation-medal">
            <div class="card-body">
                <h5>Congratulations 🎉 {{
                    auth()->user()->name }}</h5>
                <p class="card-text font-small-3">Now Explore Your Business</p>
                <h3 class="mb-75 mt-2 pt-50">
                    <a href=""> Total Sales $48.9k</a>
                </h3>
                <button type="button" class="btn btn-primary">View Sales</button>
                <img src="{{asset('backend/app-assets/images/illustration/badge.svg')}}" class="congratulation-medal"
                    alt="Medal Pic" />
            </div>
        </div>
    </div>
    <!--/ Medal Card -->

    <!-- Statistics Card -->
    <div class="col-xl-8 col-md-6 col-12">
        <div class="card card-statistics">
            <div class="card-header">
                <h4 class="card-title">Statistics</h4>
                <div class="d-flex align-items-center">
                    <p class="card-text font-small-2 mr-25 mb-0">Updated 1 month ago</p>
                </div>
            </div>
            <div class="card-body statistics-body">
                <div class="row">
                    <div class="col-xl-3 col-sm-6 col-12 mb-2 mb-xl-0">
                        <div class="media">
                            <div class="avatar bg-light-primary mr-2">
                                <div class="avatar-content">
                                    <i data-feather="trending-up" class="avatar-icon"></i>
                                </div>
                            </div>
                            <div class="media-body my-auto">
                                <h4 class="font-weight-bolder mb-0">100</h4>
                                <p class="card-text font-small-3 mb-0">Sales</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6 col-12 mb-2 mb-xl-0">
                        <div class="media">
                            <div class="avatar bg-light-info mr-2">
                                <div class="avatar-content">
                                    <i data-feather="user" class="avatar-icon"></i>
                                </div>
                            </div>
                            <div class="media-body my-auto">
                                <h4 class="font-weight-bolder mb-0">300</h4>
                                <p class="card-text font-small-3 mb-0">Properties</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6 col-12 mb-2 mb-sm-0">
                        <div class="media">
                            <div class="avatar bg-light-danger mr-2">
                                <div class="avatar-content">
                                    <i data-feather="box" class="avatar-icon"></i>
                                </div>
                            </div>
                            <div class="media-body my-auto">
                                <h4 class="font-weight-bolder mb-0">1000</h4>
                                <p class="card-text font-small-3 mb-0">Booked</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6 col-12">
                        <div class="media">
                            <div class="avatar bg-light-success mr-2">
                                <div class="avatar-content">
                                    <i data-feather="dollar-sign" class="avatar-icon"></i>
                                </div>
                            </div>
                            <div class="media-body my-auto">
                                <h4 class="font-weight-bolder mb-0">100</h4>
                                <p class="card-text font-small-3 mb-0">Happy clients</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/ Statistics Card -->
</div>
<div class="row">
    <div class="col-md-12 col-12">
        <div class="card card-revenue-budget">
            <div class="row mx-0">
                <div class="col-md-8 col-12 revenue-report-wrapper">
                    <div class="d-sm-flex justify-content-between align-items-center mb-3">
                        <h4 class="card-title mb-50 mb-sm-0">Revenue Report</h4>
                        <div class="d-flex align-items-center">
                            <div class="d-flex align-items-center mr-2">
                                <span class="bullet bullet-primary font-small-3 mr-50 cursor-pointer"></span>
                                <span>Earning</span>
                            </div>
                            <div class="d-flex align-items-center ml-75">
                                <span class="bullet bullet-warning font-small-3 mr-50 cursor-pointer"></span>
                                <span>Expense</span>
                            </div>
                        </div>
                    </div>
                    <div id="revenue-report-chart"></div>
                </div>
                <div class="col-md-4 col-12 budget-wrapper">
                    <div class="btn-group">
                        <button type="button" class="btn btn-outline-primary btn-sm dropdown-toggle budget-dropdown"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            2020
                        </button>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="javascript:void(0);">2020</a>
                            <a class="dropdown-item" href="javascript:void(0);">2019</a>
                            <a class="dropdown-item" href="javascript:void(0);">2018</a>
                        </div>
                    </div>
                    <h2 class="mb-25">$25,852</h2>
                    <div class="d-flex justify-content-center">
                        <span class="font-weight-bolder mr-25">Budget:</span>
                        <span>56,800</span>
                    </div>
                    <div id="budget-chart"></div>
                    <button type="button" class="btn btn-primary">Increase Budget</button>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection