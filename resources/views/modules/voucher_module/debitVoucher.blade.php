@extends('layouts.master')
@section('title', 'Debit Voucher')
@push('css')
<link rel="stylesheet" type="text/css" href="{{asset('backend/app-assets/css/components.css')}}">
@endpush
@push('allJs')
<script>
$(document).ready(function() {
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
@endpush
@section('content')
<form action="" method="" enctype="multipart/form-data" style="display: none;" id="div1">
    <div class="row">
        <div class="form-group position-relative col-md-4">
            <label for="customer-country" class="form-label">Voucher Category</label>
            <select class="form-control select2" id="" name="">
                <option>Select</option>
                <option value="Australia">Internet Bill</option>
                <option value="Canada">Office Expense</option>
                <option value="Russia">Trainning and Development</option>
                <option value="Saudi Arabia">Audit Fee</option>
                <option value="Singapore">Service Charge</option>
                <option value="Russia">Credit Sale</option>
                <option value="Saudi Arabia">Devidend</option>
                <option value="Singapore">Entertainment</option>
            </select>
        </div>
        <div class="form-group position-relative col-md-4">
            <label for="customer-country" class="form-label">Voucher ID</label>
            <input type="text" class="form-control date-mask" placeholder="Input Voucher Id or Not" id="date">
        </div>
        <div class="form-group position-relative col-md-4">
            <label for="customer-country" class="form-label">Date</label>
            <input type="date" id="check_in" name="check_in" value=""
                class="form-control flatpickr-basic flatpickr-input" placeholder="YYYY-MM-DD" readonly="readonly">
        </div>
    </div>
    <div class="row">
        <div class="form-group position-relative col-md-4">
            <label for="customer-country" class="form-label">Branch Name</label>
            <select class="form-control select2" id="" name="">
                <option>Select</option>
                <option value="Australia">Gulshan Branch</option>
                <option value="Canada">Banani Branch</option>
            </select>
        </div>
        <div class="form-group position-relative col-md-4">
            <label for="customer-country" class="form-label">Expense Amount</label>
            <input type="number" class="form-control date-mask" placeholder="Amount" id="date">
        </div>
        <div class="form-group position-relative col-md-4">
            <label for="customer-country" class="form-label">Expense By</label>
            <input type="text" class="form-control date-mask" placeholder="Expense By" id="date">
        </div>
    </div>
    <div class="row">
        <div class="form-group position-relative col-md-4">
            <label for="customer-country" class="form-label">Attachment File</label>
            <input type="file" class="form-control date-mask" placeholder="" id="date">
        </div>
        <div class="form-group position-relative col-md-4">
            <label for="customer-country" class="form-label">Debit From Account</label>
            <select class="form-control select2" id="" name="">
                <option>Select</option>
                <option value="Australia">Entry Date</option>
                <option value="Canada">Outer Date</option>
            </select>
        </div>
        <div class="form-group position-relative col-md-4">
            <label for="customer-country" class="form-label">Expense Details</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder=""></textarea>
        </div>
    </div>
    <div class="row">
        <div class="form-group position-relative col-md-6">
            <button type="button" id="hide_btn"
                class="btn btn-primary btn-block waves-effect waves-float waves-light">Hide</button>
        </div>
        <div class="form-group position-relative col-md-6">
            <button type="submit" class="btn btn-success btn-block waves-effect waves-float waves-light">Submit</button>
        </div>
    </div>
</form>
<br>
<div class="row" id="table-bordered">
    <div class="col-12">
        <div class="card">
            <div class="card-header d-flex flex-row justify-content-end">
                <div class="col-lg-4 col-sm-12 mt-1">
                    <h4 class="card-title">Debit Vouchers</h4>
                </div>
                <div class="col-lg-4 col-sm-12 mt-1 mobile_flex">
                    <label>Search :</label>
                    <input id="myInput" type="text" onkeyup="myFunction()" value="" class="form-control"
                        placeholder="Search Anythings...">
                </div>
                <div class="col-lg-4 col-sm-12 mt-1">
                    <button class="dt-button create-new btn btn-primary mt-2" tabindex="0"
                        aria-controls="DataTables_Table_0" type="button" id="income_list"><span><svg
                                xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="feather feather-plus mr-50 font-small-4">
                                <line x1="12" y1="5" x2="12" y2="19"></line>
                                <line x1="5" y1="12" x2="19" y2="12"></line>
                            </svg>Add Expense List</span>
                    </button>
                </div>
            </div>
            <!-- <div class="card-body">
                <p class="card-text">

                </p>
            </div> -->
            <div class="table-responsive">
                <table class="table table-bordered table-sm">
                    <thead>
                        <tr>
                            <th>SL</th>
                            <th>Voucher ID</th>
                            <th>Date</th>
                            <th>Category</th>
                            <th>Amount</th>
                            <th>Expense By</th>
                            <th>Note</th>
                            <th>Attachment</th>
                            <th>Staus</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody id="myTable">
                        <tr>
                            <td>
                                <span class="font-weight-bold">1</span>
                            </td>
                            <td>
                                <span class="font-weight-bold">Dis Islam</span>
                            </td>
                            <td>
                                <span class="font-weight-bold">0185236985</span>
                            </td>
                            <td>
                                <span class="font-weight-bold">din@gmail.com</span>
                            </td>
                            <td>
                                <span class="font-weight-bold">12-10-2022</span>
                            </td>
                            <td>
                                <span class="font-weight-bold">10:55 AM</span>
                            </td>
                            <td>
                                <span class="font-weight-bold">Need Some Water</span>
                            </td>
                            <td>
                                <span class="font-weight-bold">Attachment</span>
                            </td>
                            <td>
                                <span class="badge badge-pill badge-light-success mr-1">Approve</span>
                            </td>
                            <td>
                                <div class="dropdown">
                                    <button type="button"
                                        class="btn btn-sm dropdown-toggle hide-arrow waves-effect waves-float waves-light"
                                        data-toggle="dropdown">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="feather feather-more-vertical">
                                            <circle cx="12" cy="12" r="1"></circle>
                                            <circle cx="12" cy="5" r="1"></circle>
                                            <circle cx="12" cy="19" r="1"></circle>
                                        </svg>
                                    </button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="javascript:void(0);">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round"
                                                class="feather feather-edit-2 mr-50">
                                                <path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z">
                                                </path>
                                            </svg>
                                            <span>Print</span>
                                        </a>
                                        <a class="dropdown-item" href="javascript:void(0);">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round"
                                                class="feather feather-trash mr-50">
                                                <polyline points="3 6 5 6 21 6"></polyline>
                                                <path
                                                    d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2">
                                                </path>
                                            </svg>
                                            <span>Delete</span>
                                        </a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <span class="font-weight-bold">1</span>
                            </td>
                            <td>
                                <span class="font-weight-bold">Dis Islam</span>
                            </td>
                            <td>
                                <span class="font-weight-bold">0185236985</span>
                            </td>
                            <td>
                                <span class="font-weight-bold">din@gmail.com</span>
                            </td>
                            <td>
                                <span class="font-weight-bold">12-10-2022</span>
                            </td>
                            <td>
                                <span class="font-weight-bold">10:55 AM</span>
                            </td>
                            <td>
                                <span class="font-weight-bold">Need Some Water</span>
                            </td>
                            <td>
                                <span class="font-weight-bold">Attachment</span>
                            </td>
                            <td>
                                <span class="badge badge-pill badge-light-danger mr-1">Not Approve</span>
                            </td>
                            <td>
                                <div class="dropdown">
                                    <button type="button"
                                        class="btn btn-sm dropdown-toggle hide-arrow waves-effect waves-float waves-light"
                                        data-toggle="dropdown">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="feather feather-more-vertical">
                                            <circle cx="12" cy="12" r="1"></circle>
                                            <circle cx="12" cy="5" r="1"></circle>
                                            <circle cx="12" cy="19" r="1"></circle>
                                        </svg>
                                    </button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="javascript:void(0);">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round"
                                                class="feather feather-edit-2 mr-50">
                                                <path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z">
                                                </path>
                                            </svg>
                                            <span>Print</span>
                                        </a>
                                        <a class="dropdown-item" href="javascript:void(0);">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round"
                                                class="feather feather-trash mr-50">
                                                <polyline points="3 6 5 6 21 6"></polyline>
                                                <path
                                                    d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2">
                                                </path>
                                            </svg>
                                            <span>Delete</span>
                                        </a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <span class="font-weight-bold">1</span>
                            </td>
                            <td>
                                <span class="font-weight-bold">Dis Islam</span>
                            </td>
                            <td>
                                <span class="font-weight-bold">0185236985</span>
                            </td>
                            <td>
                                <span class="font-weight-bold">din@gmail.com</span>
                            </td>
                            <td>
                                <span class="font-weight-bold">12-10-2022</span>
                            </td>
                            <td>
                                <span class="font-weight-bold">10:55 AM</span>
                            </td>
                            <td>
                                <span class="font-weight-bold">Need Some Water</span>
                            </td>
                            <td>
                                <span class="font-weight-bold">Attachment</span>
                            </td>
                            <td>
                                <span class="badge badge-pill badge-light-success mr-1">Approve</span>
                            </td>
                            <td>
                                <div class="dropdown">
                                    <button type="button"
                                        class="btn btn-sm dropdown-toggle hide-arrow waves-effect waves-float waves-light"
                                        data-toggle="dropdown">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="feather feather-more-vertical">
                                            <circle cx="12" cy="12" r="1"></circle>
                                            <circle cx="12" cy="5" r="1"></circle>
                                            <circle cx="12" cy="19" r="1"></circle>
                                        </svg>
                                    </button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="javascript:void(0);">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round"
                                                class="feather feather-edit-2 mr-50">
                                                <path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z">
                                                </path>
                                            </svg>
                                            <span>Print</span>
                                        </a>
                                        <a class="dropdown-item" href="javascript:void(0);">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round"
                                                class="feather feather-trash mr-50">
                                                <polyline points="3 6 5 6 21 6"></polyline>
                                                <path
                                                    d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2">
                                                </path>
                                            </svg>
                                            <span>Delete</span>
                                        </a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <span class="font-weight-bold">1</span>
                            </td>
                            <td>
                                <span class="font-weight-bold">Dis Islam</span>
                            </td>
                            <td>
                                <span class="font-weight-bold">0185236985</span>
                            </td>
                            <td>
                                <span class="font-weight-bold">din@gmail.com</span>
                            </td>
                            <td>
                                <span class="font-weight-bold">12-10-2022</span>
                            </td>
                            <td>
                                <span class="font-weight-bold">10:55 AM</span>
                            </td>
                            <td>
                                <span class="font-weight-bold">Need Some Water</span>
                            </td>
                            <td>
                                <span class="font-weight-bold">Attachment</span>
                            </td>
                            <td>
                                <span class="badge badge-pill badge-light-danger mr-1">Not Approve</span>
                            </td>
                            <td>
                                <div class="dropdown">
                                    <button type="button"
                                        class="btn btn-sm dropdown-toggle hide-arrow waves-effect waves-float waves-light"
                                        data-toggle="dropdown">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="feather feather-more-vertical">
                                            <circle cx="12" cy="12" r="1"></circle>
                                            <circle cx="12" cy="5" r="1"></circle>
                                            <circle cx="12" cy="19" r="1"></circle>
                                        </svg>
                                    </button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="javascript:void(0);">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round"
                                                class="feather feather-edit-2 mr-50">
                                                <path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z">
                                                </path>
                                            </svg>
                                            <span>Print</span>
                                        </a>
                                        <a class="dropdown-item" href="javascript:void(0);">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round"
                                                class="feather feather-trash mr-50">
                                                <polyline points="3 6 5 6 21 6"></polyline>
                                                <path
                                                    d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2">
                                                </path>
                                            </svg>
                                            <span>Delete</span>
                                        </a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <span class="font-weight-bold">1</span>
                            </td>
                            <td>
                                <span class="font-weight-bold">Dis Islam</span>
                            </td>
                            <td>
                                <span class="font-weight-bold">0185236985</span>
                            </td>
                            <td>
                                <span class="font-weight-bold">din@gmail.com</span>
                            </td>
                            <td>
                                <span class="font-weight-bold">12-10-2022</span>
                            </td>
                            <td>
                                <span class="font-weight-bold">10:55 AM</span>
                            </td>
                            <td>
                                <span class="font-weight-bold">Need Some Water</span>
                            </td>
                            <td>
                                <span class="font-weight-bold">Attachment</span>
                            </td>
                            <td>
                                <span class="badge badge-pill badge-light-success mr-1">Approve</span>
                            </td>
                            <td>
                                <div class="dropdown">
                                    <button type="button"
                                        class="btn btn-sm dropdown-toggle hide-arrow waves-effect waves-float waves-light"
                                        data-toggle="dropdown">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="feather feather-more-vertical">
                                            <circle cx="12" cy="12" r="1"></circle>
                                            <circle cx="12" cy="5" r="1"></circle>
                                            <circle cx="12" cy="19" r="1"></circle>
                                        </svg>
                                    </button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="javascript:void(0);">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round"
                                                class="feather feather-edit-2 mr-50">
                                                <path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z">
                                                </path>
                                            </svg>
                                            <span>Print</span>
                                        </a>
                                        <a class="dropdown-item" href="javascript:void(0);">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round"
                                                class="feather feather-trash mr-50">
                                                <polyline points="3 6 5 6 21 6"></polyline>
                                                <path
                                                    d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2">
                                                </path>
                                            </svg>
                                            <span>Delete</span>
                                        </a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <span class="font-weight-bold">1</span>
                            </td>
                            <td>
                                <span class="font-weight-bold">Dis Islam</span>
                            </td>
                            <td>
                                <span class="font-weight-bold">0185236985</span>
                            </td>
                            <td>
                                <span class="font-weight-bold">din@gmail.com</span>
                            </td>
                            <td>
                                <span class="font-weight-bold">12-10-2022</span>
                            </td>
                            <td>
                                <span class="font-weight-bold">10:55 AM</span>
                            </td>
                            <td>
                                <span class="font-weight-bold">Need Some Water</span>
                            </td>
                            <td>
                                <span class="font-weight-bold">Attachment</span>
                            </td>
                            <td>
                                <span class="badge badge-pill badge-light-danger mr-1">Not Approve</span>
                            </td>
                            <td>
                                <div class="dropdown">
                                    <button type="button"
                                        class="btn btn-sm dropdown-toggle hide-arrow waves-effect waves-float waves-light"
                                        data-toggle="dropdown">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="feather feather-more-vertical">
                                            <circle cx="12" cy="12" r="1"></circle>
                                            <circle cx="12" cy="5" r="1"></circle>
                                            <circle cx="12" cy="19" r="1"></circle>
                                        </svg>
                                    </button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="javascript:void(0);">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round"
                                                class="feather feather-edit-2 mr-50">
                                                <path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z">
                                                </path>
                                            </svg>
                                            <span>Print</span>
                                        </a>
                                        <a class="dropdown-item" href="javascript:void(0);">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round"
                                                class="feather feather-trash mr-50">
                                                <polyline points="3 6 5 6 21 6"></polyline>
                                                <path
                                                    d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2">
                                                </path>
                                            </svg>
                                            <span>Delete</span>
                                        </a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <span class="font-weight-bold">1</span>
                            </td>
                            <td>
                                <span class="font-weight-bold">Dis Islam</span>
                            </td>
                            <td>
                                <span class="font-weight-bold">0185236985</span>
                            </td>
                            <td>
                                <span class="font-weight-bold">din@gmail.com</span>
                            </td>
                            <td>
                                <span class="font-weight-bold">12-10-2022</span>
                            </td>
                            <td>
                                <span class="font-weight-bold">10:55 AM</span>
                            </td>
                            <td>
                                <span class="font-weight-bold">Need Some Water</span>
                            </td>
                            <td>
                                <span class="font-weight-bold">Attachment</span>
                            </td>
                            <td>
                                <span class="badge badge-pill badge-light-success mr-1">Approve</span>
                            </td>
                            <td>
                                <div class="dropdown">
                                    <button type="button"
                                        class="btn btn-sm dropdown-toggle hide-arrow waves-effect waves-float waves-light"
                                        data-toggle="dropdown">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="feather feather-more-vertical">
                                            <circle cx="12" cy="12" r="1"></circle>
                                            <circle cx="12" cy="5" r="1"></circle>
                                            <circle cx="12" cy="19" r="1"></circle>
                                        </svg>
                                    </button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="javascript:void(0);">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round"
                                                class="feather feather-edit-2 mr-50">
                                                <path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z">
                                                </path>
                                            </svg>
                                            <span>Print</span>
                                        </a>
                                        <a class="dropdown-item" href="javascript:void(0);">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round"
                                                class="feather feather-trash mr-50">
                                                <polyline points="3 6 5 6 21 6"></polyline>
                                                <path
                                                    d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2">
                                                </path>
                                            </svg>
                                            <span>Delete</span>
                                        </a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <span class="font-weight-bold">1</span>
                            </td>
                            <td>
                                <span class="font-weight-bold">Dis Islam</span>
                            </td>
                            <td>
                                <span class="font-weight-bold">0185236985</span>
                            </td>
                            <td>
                                <span class="font-weight-bold">din@gmail.com</span>
                            </td>
                            <td>
                                <span class="font-weight-bold">12-10-2022</span>
                            </td>
                            <td>
                                <span class="font-weight-bold">10:55 AM</span>
                            </td>
                            <td>
                                <span class="font-weight-bold">Need Some Water</span>
                            </td>
                            <td>
                                <span class="font-weight-bold">Attachment</span>
                            </td>
                            <td>
                                <span class="badge badge-pill badge-light-danger mr-1">Not Approve</span>
                            </td>
                            <td>
                                <div class="dropdown">
                                    <button type="button"
                                        class="btn btn-sm dropdown-toggle hide-arrow waves-effect waves-float waves-light"
                                        data-toggle="dropdown">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="feather feather-more-vertical">
                                            <circle cx="12" cy="12" r="1"></circle>
                                            <circle cx="12" cy="5" r="1"></circle>
                                            <circle cx="12" cy="19" r="1"></circle>
                                        </svg>
                                    </button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="javascript:void(0);">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round"
                                                class="feather feather-edit-2 mr-50">
                                                <path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z">
                                                </path>
                                            </svg>
                                            <span>Print</span>
                                        </a>
                                        <a class="dropdown-item" href="javascript:void(0);">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round"
                                                class="feather feather-trash mr-50">
                                                <polyline points="3 6 5 6 21 6"></polyline>
                                                <path
                                                    d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2">
                                                </path>
                                            </svg>
                                            <span>Delete</span>
                                        </a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <span class="font-weight-bold">1</span>
                            </td>
                            <td>
                                <span class="font-weight-bold">Dis Islam</span>
                            </td>
                            <td>
                                <span class="font-weight-bold">0185236985</span>
                            </td>
                            <td>
                                <span class="font-weight-bold">din@gmail.com</span>
                            </td>
                            <td>
                                <span class="font-weight-bold">12-10-2022</span>
                            </td>
                            <td>
                                <span class="font-weight-bold">10:55 AM</span>
                            </td>
                            <td>
                                <span class="font-weight-bold">Need Some Water</span>
                            </td>
                            <td>
                                <span class="font-weight-bold">Attachment</span>
                            </td>
                            <td>
                                <span class="badge badge-pill badge-light-success mr-1">Approve</span>
                            </td>
                            <td>
                                <div class="dropdown">
                                    <button type="button"
                                        class="btn btn-sm dropdown-toggle hide-arrow waves-effect waves-float waves-light"
                                        data-toggle="dropdown">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="feather feather-more-vertical">
                                            <circle cx="12" cy="12" r="1"></circle>
                                            <circle cx="12" cy="5" r="1"></circle>
                                            <circle cx="12" cy="19" r="1"></circle>
                                        </svg>
                                    </button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="javascript:void(0);">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round"
                                                class="feather feather-edit-2 mr-50">
                                                <path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z">
                                                </path>
                                            </svg>
                                            <span>Print</span>
                                        </a>
                                        <a class="dropdown-item" href="javascript:void(0);">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round"
                                                class="feather feather-trash mr-50">
                                                <polyline points="3 6 5 6 21 6"></polyline>
                                                <path
                                                    d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2">
                                                </path>
                                            </svg>
                                            <span>Delete</span>
                                        </a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <span class="font-weight-bold">1</span>
                            </td>
                            <td>
                                <span class="font-weight-bold">Dis Islam</span>
                            </td>
                            <td>
                                <span class="font-weight-bold">0185236985</span>
                            </td>
                            <td>
                                <span class="font-weight-bold">din@gmail.com</span>
                            </td>
                            <td>
                                <span class="font-weight-bold">12-10-2022</span>
                            </td>
                            <td>
                                <span class="font-weight-bold">10:55 AM</span>
                            </td>
                            <td>
                                <span class="font-weight-bold">Need Some Water</span>
                            </td>
                            <td>
                                <span class="font-weight-bold">Attachment</span>
                            </td>
                            <td>
                                <span class="badge badge-pill badge-light-danger mr-1">Not Approve</span>
                            </td>
                            <td>
                                <div class="dropdown">
                                    <button type="button"
                                        class="btn btn-sm dropdown-toggle hide-arrow waves-effect waves-float waves-light"
                                        data-toggle="dropdown">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="feather feather-more-vertical">
                                            <circle cx="12" cy="12" r="1"></circle>
                                            <circle cx="12" cy="5" r="1"></circle>
                                            <circle cx="12" cy="19" r="1"></circle>
                                        </svg>
                                    </button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="javascript:void(0);">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round"
                                                class="feather feather-edit-2 mr-50">
                                                <path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z">
                                                </path>
                                            </svg>
                                            <span>Print</span>
                                        </a>
                                        <a class="dropdown-item" href="javascript:void(0);">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round"
                                                class="feather feather-trash mr-50">
                                                <polyline points="3 6 5 6 21 6"></polyline>
                                                <path
                                                    d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2">
                                                </path>
                                            </svg>
                                            <span>Delete</span>
                                        </a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <span class="font-weight-bold">1</span>
                            </td>
                            <td>
                                <span class="font-weight-bold">Dis Islam</span>
                            </td>
                            <td>
                                <span class="font-weight-bold">0185236985</span>
                            </td>
                            <td>
                                <span class="font-weight-bold">din@gmail.com</span>
                            </td>
                            <td>
                                <span class="font-weight-bold">12-10-2022</span>
                            </td>
                            <td>
                                <span class="font-weight-bold">10:55 AM</span>
                            </td>
                            <td>
                                <span class="font-weight-bold">Need Some Water</span>
                            </td>
                            <td>
                                <span class="font-weight-bold">Attachment</span>
                            </td>
                            <td>
                                <span class="badge badge-pill badge-light-success mr-1">Approve</span>
                            </td>
                            <td>
                                <div class="dropdown">
                                    <button type="button"
                                        class="btn btn-sm dropdown-toggle hide-arrow waves-effect waves-float waves-light"
                                        data-toggle="dropdown">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="feather feather-more-vertical">
                                            <circle cx="12" cy="12" r="1"></circle>
                                            <circle cx="12" cy="5" r="1"></circle>
                                            <circle cx="12" cy="19" r="1"></circle>
                                        </svg>
                                    </button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="javascript:void(0);">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round"
                                                class="feather feather-edit-2 mr-50">
                                                <path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z">
                                                </path>
                                            </svg>
                                            <span>Print</span>
                                        </a>
                                        <a class="dropdown-item" href="javascript:void(0);">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round"
                                                class="feather feather-trash mr-50">
                                                <polyline points="3 6 5 6 21 6"></polyline>
                                                <path
                                                    d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2">
                                                </path>
                                            </svg>
                                            <span>Delete</span>
                                        </a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <span class="font-weight-bold">1</span>
                            </td>
                            <td>
                                <span class="font-weight-bold">Dis Islam</span>
                            </td>
                            <td>
                                <span class="font-weight-bold">0185236985</span>
                            </td>
                            <td>
                                <span class="font-weight-bold">din@gmail.com</span>
                            </td>
                            <td>
                                <span class="font-weight-bold">12-10-2022</span>
                            </td>
                            <td>
                                <span class="font-weight-bold">10:55 AM</span>
                            </td>
                            <td>
                                <span class="font-weight-bold">Need Some Water</span>
                            </td>
                            <td>
                                <span class="font-weight-bold">Attachment</span>
                            </td>
                            <td>
                                <span class="badge badge-pill badge-light-danger mr-1">Not Approve</span>
                            </td>
                            <td>
                                <div class="dropdown">
                                    <button type="button"
                                        class="btn btn-sm dropdown-toggle hide-arrow waves-effect waves-float waves-light"
                                        data-toggle="dropdown">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="feather feather-more-vertical">
                                            <circle cx="12" cy="12" r="1"></circle>
                                            <circle cx="12" cy="5" r="1"></circle>
                                            <circle cx="12" cy="19" r="1"></circle>
                                        </svg>
                                    </button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="javascript:void(0);">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round"
                                                class="feather feather-edit-2 mr-50">
                                                <path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z">
                                                </path>
                                            </svg>
                                            <span>Print</span>
                                        </a>
                                        <a class="dropdown-item" href="javascript:void(0);">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round"
                                                class="feather feather-trash mr-50">
                                                <polyline points="3 6 5 6 21 6"></polyline>
                                                <path
                                                    d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2">
                                                </path>
                                            </svg>
                                            <span>Delete</span>
                                        </a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <span class="font-weight-bold">1</span>
                            </td>
                            <td>
                                <span class="font-weight-bold">Dis Islam</span>
                            </td>
                            <td>
                                <span class="font-weight-bold">0185236985</span>
                            </td>
                            <td>
                                <span class="font-weight-bold">din@gmail.com</span>
                            </td>
                            <td>
                                <span class="font-weight-bold">12-10-2022</span>
                            </td>
                            <td>
                                <span class="font-weight-bold">10:55 AM</span>
                            </td>
                            <td>
                                <span class="font-weight-bold">Need Some Water</span>
                            </td>
                            <td>
                                <span class="font-weight-bold">Attachment</span>
                            </td>
                            <td>
                                <span class="badge badge-pill badge-light-success mr-1">Approve</span>
                            </td>
                            <td>
                                <div class="dropdown">
                                    <button type="button"
                                        class="btn btn-sm dropdown-toggle hide-arrow waves-effect waves-float waves-light"
                                        data-toggle="dropdown">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="feather feather-more-vertical">
                                            <circle cx="12" cy="12" r="1"></circle>
                                            <circle cx="12" cy="5" r="1"></circle>
                                            <circle cx="12" cy="19" r="1"></circle>
                                        </svg>
                                    </button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="javascript:void(0);">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round"
                                                class="feather feather-edit-2 mr-50">
                                                <path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z">
                                                </path>
                                            </svg>
                                            <span>Print</span>
                                        </a>
                                        <a class="dropdown-item" href="javascript:void(0);">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round"
                                                class="feather feather-trash mr-50">
                                                <polyline points="3 6 5 6 21 6"></polyline>
                                                <path
                                                    d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2">
                                                </path>
                                            </svg>
                                            <span>Delete</span>
                                        </a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <span class="font-weight-bold">1</span>
                            </td>
                            <td>
                                <span class="font-weight-bold">Dis Islam</span>
                            </td>
                            <td>
                                <span class="font-weight-bold">0185236985</span>
                            </td>
                            <td>
                                <span class="font-weight-bold">din@gmail.com</span>
                            </td>
                            <td>
                                <span class="font-weight-bold">12-10-2022</span>
                            </td>
                            <td>
                                <span class="font-weight-bold">10:55 AM</span>
                            </td>
                            <td>
                                <span class="font-weight-bold">Need Some Water</span>
                            </td>
                            <td>
                                <span class="font-weight-bold">Attachment</span>
                            </td>
                            <td>
                                <span class="badge badge-pill badge-light-danger mr-1">Not Approve</span>
                            </td>
                            <td>
                                <div class="dropdown">
                                    <button type="button"
                                        class="btn btn-sm dropdown-toggle hide-arrow waves-effect waves-float waves-light"
                                        data-toggle="dropdown">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="feather feather-more-vertical">
                                            <circle cx="12" cy="12" r="1"></circle>
                                            <circle cx="12" cy="5" r="1"></circle>
                                            <circle cx="12" cy="19" r="1"></circle>
                                        </svg>
                                    </button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="javascript:void(0);">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round"
                                                class="feather feather-edit-2 mr-50">
                                                <path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z">
                                                </path>
                                            </svg>
                                            <span>Print</span>
                                        </a>
                                        <a class="dropdown-item" href="javascript:void(0);">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round"
                                                class="feather feather-trash mr-50">
                                                <polyline points="3 6 5 6 21 6"></polyline>
                                                <path
                                                    d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2">
                                                </path>
                                            </svg>
                                            <span>Delete</span>
                                        </a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <span class="font-weight-bold">1</span>
                            </td>
                            <td>
                                <span class="font-weight-bold">Dis Islam</span>
                            </td>
                            <td>
                                <span class="font-weight-bold">0185236985</span>
                            </td>
                            <td>
                                <span class="font-weight-bold">din@gmail.com</span>
                            </td>
                            <td>
                                <span class="font-weight-bold">12-10-2022</span>
                            </td>
                            <td>
                                <span class="font-weight-bold">10:55 AM</span>
                            </td>
                            <td>
                                <span class="font-weight-bold">Need Some Water</span>
                            </td>
                            <td>
                                <span class="font-weight-bold">Attachment</span>
                            </td>
                            <td>
                                <span class="badge badge-pill badge-light-success mr-1">Approve</span>
                            </td>
                            <td>
                                <div class="dropdown">
                                    <button type="button"
                                        class="btn btn-sm dropdown-toggle hide-arrow waves-effect waves-float waves-light"
                                        data-toggle="dropdown">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="feather feather-more-vertical">
                                            <circle cx="12" cy="12" r="1"></circle>
                                            <circle cx="12" cy="5" r="1"></circle>
                                            <circle cx="12" cy="19" r="1"></circle>
                                        </svg>
                                    </button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="javascript:void(0);">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round"
                                                class="feather feather-edit-2 mr-50">
                                                <path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z">
                                                </path>
                                            </svg>
                                            <span>Print</span>
                                        </a>
                                        <a class="dropdown-item" href="javascript:void(0);">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round"
                                                class="feather feather-trash mr-50">
                                                <polyline points="3 6 5 6 21 6"></polyline>
                                                <path
                                                    d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2">
                                                </path>
                                            </svg>
                                            <span>Delete</span>
                                        </a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <span class="font-weight-bold">1</span>
                            </td>
                            <td>
                                <span class="font-weight-bold">Dis Islam</span>
                            </td>
                            <td>
                                <span class="font-weight-bold">0185236985</span>
                            </td>
                            <td>
                                <span class="font-weight-bold">din@gmail.com</span>
                            </td>
                            <td>
                                <span class="font-weight-bold">12-10-2022</span>
                            </td>
                            <td>
                                <span class="font-weight-bold">10:55 AM</span>
                            </td>
                            <td>
                                <span class="font-weight-bold">Need Some Water</span>
                            </td>
                            <td>
                                <span class="font-weight-bold">Attachment</span>
                            </td>
                            <td>
                                <span class="badge badge-pill badge-light-danger mr-1">Not Approve</span>
                            </td>
                            <td>
                                <div class="dropdown">
                                    <button type="button"
                                        class="btn btn-sm dropdown-toggle hide-arrow waves-effect waves-float waves-light"
                                        data-toggle="dropdown">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="feather feather-more-vertical">
                                            <circle cx="12" cy="12" r="1"></circle>
                                            <circle cx="12" cy="5" r="1"></circle>
                                            <circle cx="12" cy="19" r="1"></circle>
                                        </svg>
                                    </button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="javascript:void(0);">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round"
                                                class="feather feather-edit-2 mr-50">
                                                <path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z">
                                                </path>
                                            </svg>
                                            <span>Print</span>
                                        </a>
                                        <a class="dropdown-item" href="javascript:void(0);">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round"
                                                class="feather feather-trash mr-50">
                                                <polyline points="3 6 5 6 21 6"></polyline>
                                                <path
                                                    d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2">
                                                </path>
                                            </svg>
                                            <span>Delete</span>
                                        </a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <span class="font-weight-bold">1</span>
                            </td>
                            <td>
                                <span class="font-weight-bold">Dis Islam</span>
                            </td>
                            <td>
                                <span class="font-weight-bold">0185236985</span>
                            </td>
                            <td>
                                <span class="font-weight-bold">din@gmail.com</span>
                            </td>
                            <td>
                                <span class="font-weight-bold">12-10-2022</span>
                            </td>
                            <td>
                                <span class="font-weight-bold">10:55 AM</span>
                            </td>
                            <td>
                                <span class="font-weight-bold">Need Some Water</span>
                            </td>
                            <td>
                                <span class="font-weight-bold">Attachment</span>
                            </td>
                            <td>
                                <span class="badge badge-pill badge-light-success mr-1">Approve</span>
                            </td>
                            <td>
                                <div class="dropdown">
                                    <button type="button"
                                        class="btn btn-sm dropdown-toggle hide-arrow waves-effect waves-float waves-light"
                                        data-toggle="dropdown">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="feather feather-more-vertical">
                                            <circle cx="12" cy="12" r="1"></circle>
                                            <circle cx="12" cy="5" r="1"></circle>
                                            <circle cx="12" cy="19" r="1"></circle>
                                        </svg>
                                    </button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="javascript:void(0);">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round"
                                                class="feather feather-edit-2 mr-50">
                                                <path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z">
                                                </path>
                                            </svg>
                                            <span>Print</span>
                                        </a>
                                        <a class="dropdown-item" href="javascript:void(0);">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round"
                                                class="feather feather-trash mr-50">
                                                <polyline points="3 6 5 6 21 6"></polyline>
                                                <path
                                                    d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2">
                                                </path>
                                            </svg>
                                            <span>Delete</span>
                                        </a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <span class="font-weight-bold">1</span>
                            </td>
                            <td>
                                <span class="font-weight-bold">Dis Islam</span>
                            </td>
                            <td>
                                <span class="font-weight-bold">0185236985</span>
                            </td>
                            <td>
                                <span class="font-weight-bold">din@gmail.com</span>
                            </td>
                            <td>
                                <span class="font-weight-bold">12-10-2022</span>
                            </td>
                            <td>
                                <span class="font-weight-bold">10:55 AM</span>
                            </td>
                            <td>
                                <span class="font-weight-bold">Need Some Water</span>
                            </td>
                            <td>
                                <span class="font-weight-bold">Attachment</span>
                            </td>
                            <td>
                                <span class="badge badge-pill badge-light-danger mr-1">Not Approve</span>
                            </td>
                            <td>
                                <div class="dropdown">
                                    <button type="button"
                                        class="btn btn-sm dropdown-toggle hide-arrow waves-effect waves-float waves-light"
                                        data-toggle="dropdown">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="feather feather-more-vertical">
                                            <circle cx="12" cy="12" r="1"></circle>
                                            <circle cx="12" cy="5" r="1"></circle>
                                            <circle cx="12" cy="19" r="1"></circle>
                                        </svg>
                                    </button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="javascript:void(0);">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round"
                                                class="feather feather-edit-2 mr-50">
                                                <path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z">
                                                </path>
                                            </svg>
                                            <span>Print</span>
                                        </a>
                                        <a class="dropdown-item" href="javascript:void(0);">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round"
                                                class="feather feather-trash mr-50">
                                                <polyline points="3 6 5 6 21 6"></polyline>
                                                <path
                                                    d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2">
                                                </path>
                                            </svg>
                                            <span>Delete</span>
                                        </a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection