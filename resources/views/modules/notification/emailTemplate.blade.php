@extends('layouts.master')
@section('title', 'SMS Template')
@push('css')
<script src="http://demo.oslbd.org/fox/bower_components/jquery/dist/jquery.min.js"></script>
@endpush
@section('content')
<div class="card" style="display: none;" id="div1">
    <br>
    <form>
        <div class="row">
            <div class="col-xl-4 col-md-4 col-12">
            </div>
            <div class="col-xl-6 col-md-6 col-12">
                <div class="form-group">
                    <label for="helperText">Template Name</label>
                    <input type="text" id="helperText" class="form-control" placeholder="Template Name">
                    <p><small class="text-muted">Write Down a Template Name.</small></p>
                </div>
            </div>
            <div class="col-xl-2 col-md-2 col-12">
            </div>
        </div>
        <div class="row">
            <div class="col-xl-4 col-md-4 col-12">
            </div>
            <div class="col-xl-6 col-md-6 col-12">
                <label for="credit-card">Template As</label>
                <select class="form-control" id="" name="">
                    <option label="Select"></option>
                    <option value="Australia">Active</option>
                    <option value="Canada">Inactive</option>
                </select>
            </div>
            <div class="col-xl-2 col-md-2 col-12">
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-xl-4 col-md-4 col-12">
                <div class="btn-group" role="group" aria-label="Basic example">
                    <button type="button" class="btn btn-primary waves-effect waves-float waves-light spark"
                        id="account" value="Account">Account</button>
                    <button type="button" class="btn btn-primary waves-effect waves-float waves-light spark" id="amount"
                        value="Amount">Amount</button>
                    <button type="button" class="btn btn-primary waves-effect waves-float waves-light spark"
                        id="balance" value="Balance">Balance</button>
                </div>
                <div class="btn-group" role="group" aria-label="Basic example">
                    <button type="button" class="btn btn-primary waves-effect waves-float waves-light spark" id="bank"
                        value="Bank">Bank</button>
                    <button type="button" class="btn btn-primary waves-effect waves-float waves-light spark" id="branch"
                        value="Branch">Branch</button>
                    <button type="button" class="btn btn-primary waves-effect waves-float waves-light spark" id="close"
                        value="Close">Close</button>
                    <button type="button" class="btn btn-primary waves-effect waves-float waves-light spark" id="credit"
                        value="Credit">Credit</button>
                </div>
                <div class="btn-group" role="group" aria-label="Basic example">
                    <button type="button" class="btn btn-primary waves-effect waves-float waves-light spark" id="date"
                        value="Date">Date</button>
                    <button type="button" class="btn btn-primary waves-effect waves-float waves-light spark"
                        id="deposit" value="Deposit">Deposit</button>
                    <button type="button" class="btn btn-primary waves-effect waves-float waves-light spark" id="due"
                        value="Due">Due</button>
                    <button type="button" class="btn btn-primary waves-effect waves-float waves-light spark"
                        id="discount" value="Discount">Discount</button>
                    <button type="button" class="btn btn-primary waves-effect waves-float waves-light spark" id="debit"
                        value="Debit">Debit</button>
                </div>
                <div class="btn-group" role="group" aria-label="Basic example">
                    <button type="button" class="btn btn-primary waves-effect waves-float waves-light spark"
                        id="expense" value="Expense">Expense</button>
                    <button type="button" class="btn btn-primary waves-effect waves-float waves-light spark" id="expire"
                        value="Expire">Expire</button>
                    <button type="button" class="btn btn-primary waves-effect waves-float waves-light spark"
                        id="instalment" value="Instalment">Instalment</button>
                </div>
                <div class="btn-group" role="group" aria-label="Basic example">
                    <button type="button" class="btn btn-primary waves-effect waves-float waves-light spark" id="link"
                        value="Link">Link</button>
                    <button type="button" class="btn btn-primary waves-effect waves-float waves-light spark" id="loan"
                        value="Loan">Loan</button>
                    <button type="button" class="btn btn-primary waves-effect waves-float waves-light spark" id="member"
                        value="Member">Member</button>
                    <button type="button" class="btn btn-primary waves-effect waves-float waves-light spark" id="month"
                        value="Month">Month</button>
                </div>
                <div class="btn-group" role="group" aria-label="Basic example">
                    <button type="button" class="btn btn-primary waves-effect waves-float waves-light spark"
                        id="password" value="Password">Password</button>
                    <button type="button" class="btn btn-primary waves-effect waves-float waves-light spark" id="start"
                        value="Start">Start</button>
                    <button type="button" class="btn btn-primary waves-effect waves-float waves-light spark" id="target"
                        value="Target">Target</button>
                    <button type="button" class="btn btn-primary waves-effect waves-float waves-light spark" id="title"
                        value="Title">Title</button>
                </div>
                <div class="btn-group" role="group" aria-label="Basic example">
                    <button type="button" class="btn btn-primary waves-effect waves-float waves-light spark id="
                        username" value="Username">Username</button>
                    <button type="button" class="btn btn-primary waves-effect waves-float waves-light" id="left"
                        value="Left">Left</button>
                    <button type="button" class="btn btn-primary waves-effect waves-float waves-light spark"
                        id="previous" value="Previous">Previous</button>
                </div>
                <div class="btn-group" role="group" aria-label="Basic example">
                    <button type="button" class="btn btn-primary waves-effect waves-float waves-light spark" id="vat"
                        value="Vat">Vat</button>
                    <button type="button" class="btn btn-primary waves-effect waves-float waves-light spark" id="year"
                        value="Year">Year</button>
                </div>
            </div>
            <div class="col-xl-6 col-md-6 col-12">
                <div class="form-label-group mb-0">
                    <textarea data-length="160" class="form-control char-textarea active" id="textarea-counter"
                        rows="13" placeholder="Message Body" style="color: rgb(78, 81, 84);"></textarea>
                    <label for="textarea-counter">Message Body</label>
                </div>
                <small class="textarea-counter-value float-right" style="background-color: rgb(115, 103, 240);"><span
                        class="char-count">0</span> / 160 <span> | </span> <span id="demo">1</span></small>
            </div>
            <div class="col-xl-2 col-md-2 col-12">
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-xl-6 col-md-6 col-12">
                <button type="button" class="btn btn-primary btn-block waves-effect waves-float waves-light"
                    id="hide_btn">Hide</button>
            </div>
            <div class="col-xl-6 col-md-6 col-12">
                <button type="submit"
                    class="btn btn-success btn-block waves-effect waves-float waves-light">Submit</button>
            </div>
        </div>
    </form>
    <br>
</div>
<div class="row" id="table-bordered">
    <div class="col-12">
        <div class="card">
            <div class="card-header d-flex flex-row justify-content-end">
                <div class="col-lg-4 col-sm-12 mt-1">
                    <h4 class="card-title">Sms Template List</h4>
                </div>
                <div class="col-lg-4 col-sm-12 mt-1 mobile_flex">
                    <label>Search :</label>
                    <input id="myInput" type="text" onkeyup="myFunction()" value="" class="form-control"
                        placeholder="Search Anythings...">
                </div>
                <div class="col-lg-4 col-sm-12 mt-1">
                    <button class="dt-button create-new btn btn-primary mt-2" tabindex="0"
                        aria-controls="DataTables_Table_0" type="button" id="create_temp"><span><svg
                                xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="feather feather-plus mr-50 font-small-4">
                                <line x1="12" y1="5" x2="12" y2="19"></line>
                                <line x1="5" y1="12" x2="19" y2="12"></line>
                            </svg>Add Template</span>
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
                            <th>Name</th>
                            <th>Message Body</th>
                            <th>Status</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody id="myTable">
                        <tr>
                            <td>
                                <span class="font-weight-bold">1</span>
                            </td>
                            <td>
                                <span class="font-weight-bold">Member Creation Sms</span>
                            </td>
                            <td>
                                <span class="font-weight-bold">Dear [Title] Welcome </span>
                            </td>
                            <td>
                                <span class="badge badge-pill badge-light-success mr-1">Active</span>
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
                                            <span>Edit</span>
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
                                <span class="font-weight-bold">2</span>
                            </td>
                            <td>
                                <span class="font-weight-bold">Rservasion Confirm Sms</span>
                            </td>
                            <td>
                                <span class="font-weight-bold">Dear [Name] Your Reservasion [Confirm] </span>
                            </td>
                            <td>
                                <span class="badge badge-pill badge-light-success mr-1">Active</span>
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
                                            <span>Edit</span>
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
                                <span class="font-weight-bold">3</span>
                            </td>
                            <td>
                                <span class="font-weight-bold">Member Creation Sms</span>
                            </td>
                            <td>
                                <span class="font-weight-bold">Dear [Title] Welcome </span>
                            </td>
                            <td>
                                <span class="badge badge-pill badge-light-danger mr-1">Inactive</span>
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
                                            <span>Edit</span>
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
                                <span class="font-weight-bold">4</span>
                            </td>
                            <td>
                                <span class="font-weight-bold">Check Out Sms</span>
                            </td>
                            <td>
                                <span class="font-weight-bold">Dear [Name] Have a Happy Journey</span>
                            </td>
                            <td>
                                <span class="badge badge-pill badge-light-success mr-1">Active</span>
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
                                            <span>Edit</span>
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
<script>
$(".spark ").click(function() {
    $("textarea").val($("textarea").val() + '[' + $(this).val() + '] ');
})
</script>
<script>
$(document).ready(function() {
    $("#textarea-counter").on("keyup", function() {
        var value = $("#textarea-counter").val();
        if (value.length == 10000) {
            var x = value.length / 160;
            document.getElementById("demo").innerHTML = x;
        } else {

            var x = value.length / 160;
            document.getElementById("demo").innerHTML = Math.ceil(x);
        }
    });
});
</script>
<script>
$(document).ready(function() {
    $("#create_temp").click(function() {
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


@endsection
