@extends('layouts.master')
@section('title', 'Sms Log')
@push('css')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
@endpush
@section('content')
<div class="card" id="div3" style="display: none;">
    <br>
    <form>
        <div class="row">
            <div class="col-xl-4 col-md-4 col-12">
            </div>
            <div class="col-xl-4 col-md-4 col-12">
                <label for="credit-card">Show All</label>
                <select class="form-control" id="" name="">
                    <option label="Select"></option>
                    <option value="Australia">Success Only</option>
                    <option value="Canada">Failed Only</option>
                </select>
            </div>
            <div class="col-xl-4 col-md-4 col-12">
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-xl-4 col-md-4 col-12">
            </div>
            <div class="col-xl-4 col-md-4 col-12">
                <div class="row">
                    <div class="col-xl-6 col-md-2 col-12">
                        <div class="custom-control custom-radio">
                            <input type="radio" id="customRadio1" name="customRadio" class="custom-control-input"
                                checked="">
                            <label class="custom-control-label" for="customRadio1">All Data</label>
                        </div>
                    </div>
                    <div class="col-xl-6 col-md-2 col-12">
                        <div class="custom-control custom-radio">
                            <input type="radio" id="customRadio2" name="customRadio" class="custom-control-input">
                            <label class="custom-control-label" for="customRadio2">Data Range</label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-4 col-12">
            </div>
        </div>
        <br>
        <div class="row" id="div1" style="display: none;">
            <div class="col-xl-4 col-md-4 col-12">
            </div>
            <div class="col-xl-4 col-md-4 col-12">
                <div class="col-md-12 form-group">
                    <label for="fp-default">Start Date</label>
                    <input type="text" id="fp-default" class="form-control flatpickr-basic flatpickr-input"
                        placeholder="YYYY-MM-DD" readonly="readonly">
                </div>
            </div>
            <div class="col-xl-4 col-md-4 col-12">
            </div>
        </div>
        <br>
        <div class="row" id="div2" style="display: none;">
            <div class="col-xl-4 col-md-4 col-12">
            </div>
            <div class="col-xl-4 col-md-4 col-12">
                <div class="col-md-12 form-group">
                    <label for="fp-default">End Date</label>
                    <input type="text" id="fp-default" class="form-control flatpickr-basic flatpickr-input"
                        placeholder="YYYY-MM-DD" readonly="readonly">
                </div>
            </div>
            <div class="col-xl-4 col-md-4 col-12">
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-xl-4 col-md-4 col-12">
            </div>
            <div class="col-xl-4 col-md-4 col-12">
                <div class="form-group position-relative col-md-12">
                    <button type="submit"
                        class="btn btn-success btn-block waves-effect waves-float waves-light">Search</button>
                </div>
            </div>
            <div class="col-xl-4 col-md-4 col-12">
            </div>
        </div>
    </form>
</div>
<div class="row" id="table-bordered">
    <div class="col-12">
        <div class="card">
            <div class="card-header d-flex flex-row justify-content-end">
                <div class="col-lg-4 col-sm-12 mt-1">
                    <h4 class="card-title">Sms Report</h4>
                </div>
                <div class="col-lg-4 col-sm-12 mt-1 mobile_flex">
                    <label>Search :</label>
                    <input id="myInput" type="text" onkeyup="myFunction()" value="" class="form-control"
                        placeholder="Search Anythings...">
                </div>
                <div class="col-lg-4 col-sm-12 mt-1">
                    <button class="dt-button create-new btn btn-primary mt-2" tabindex="0"
                        aria-controls="DataTables_Table_0" type="button" id="custom_src"><span><svg
                                xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="feather feather-plus mr-50 font-small-4">
                                <line x1="12" y1="5" x2="12" y2="19"></line>
                                <line x1="5" y1="12" x2="19" y2="12"></line>
                            </svg>Custom Search</span>
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
                            <th>Date</th>
                            <th>Time</th>
                            <th>Phone</th>
                            <th>Text</th>
                            <th>Status</th>
                            <th>Match</th>
                        </tr>
                    </thead>
                    <tbody id="myTable">
                        <tr>
                            <td>
                                <span class="font-weight-bold">1</span>
                            </td>
                            <td>
                                <span class="font-weight-bold">2022-03-08</span>
                            </td>
                            <td>
                                <span class="font-weight-bold">7:48 pm</span>
                            </td>
                            <td>
                                <span class="font-weight-bold">01772598636</span>
                            </td>
                            <td>
                                <span class="font-weight-bold">Dear Rakib how was your day</span>
                            </td>
                            <td>
                                <span class="badge badge-pill badge-light-success mr-1">Success</span>
                            </td>
                            <td>
                                <span class="font-weight-bold">[10001] Mr Rakib</span>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <span class="font-weight-bold">1</span>
                            </td>
                            <td>
                                <span class="font-weight-bold">2022-03-08</span>
                            </td>
                            <td>
                                <span class="font-weight-bold">7:48 pm</span>
                            </td>
                            <td>
                                <span class="font-weight-bold">01772598636</span>
                            </td>
                            <td>
                                <span class="font-weight-bold">Dear Rakib how was your day</span>
                            </td>
                            <td>
                                <span class="badge badge-pill badge-light-success mr-1">Success</span>
                            </td>
                            <td>
                                <span class="font-weight-bold">[10001] Mr Rakib</span>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <span class="font-weight-bold">1</span>
                            </td>
                            <td>
                                <span class="font-weight-bold">2022-03-08</span>
                            </td>
                            <td>
                                <span class="font-weight-bold">7:48 pm</span>
                            </td>
                            <td>
                                <span class="font-weight-bold">01772598636</span>
                            </td>
                            <td>
                                <span class="font-weight-bold">Dear Rakib how was your day</span>
                            </td>
                            <td>
                                <span class="badge badge-pill badge-light-success mr-1">Success</span>
                            </td>
                            <td>
                                <span class="font-weight-bold">[10001] Mr Rakib</span>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<script>
$(document).ready(function() {
    $("#customRadio2").click(function() {
        $("#div1").show("slow");
        $("#div2").show("slow");
        // $("#income_list").hide();
    });
});
$(document).ready(function() {
    $("#customRadio1").click(function() {
        $("#div1").hide("slow");
        $("#div2").hide("slow");
    });
});
$(document).ready(function() {
    $("#custom_src").click(function() {
        $("#div3").fadeIn("slow");
        // $("#income_list").hide();
    });
});
</script>
@endsection