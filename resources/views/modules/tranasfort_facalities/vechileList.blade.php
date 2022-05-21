@extends('layouts.master')
@section('title', 'Vechile List')
@section('content')
<form action="" method="" id="div1" enctype="multipart/form-data" style="display: none">
    <div class="row">
        <div class="form-group position-relative col-md-3">
            <label for="vehicleNumber" class="form-label">Vehicle Number</label>
            <input type="text" class="form-control date-mask" placeholder="Enter Vehicle Number" id="vehicleNumber">
        </div>
        <div class="form-group position-relative col-md-3">
            <label for="vehicleType" class="form-label">Vehicle Type</label>
            <input type="text" class="form-control date-mask" placeholder="Enter Vehicle Type" id="vehicleType">
        </div>
        <div class="form-group position-relative col-md-3">
            <label for="vehicleCapacity" class="form-label">Vehicle Capacity</label>
            <input type="number" class="form-control date-mask" placeholder="Enter Vehicle Capacity"
                id="vehicleCapacity">
        </div>
        <div class="form-group position-relative col-md-3">
            <label for="vehicleStatus" class="form-label">Vehicle Status</label>
            <div class="form-control date-mask"
                style="display: flex; background-color: rgb(40, 48, 70); border-radius: 10px">
                <div class="custom-control custom-radio">
                    <input type="radio" id="statusRadio1" name="statusRadio" class="custom-control-input" checked>
                    <label class="custom-control-label" for="statusRadio1">Active</label>
                </div>
                <div class="custom-control custom-radio ml-2">
                    <input type="radio" id="statusRadio2" name="statusRadio" class="custom-control-input">
                    <label class="custom-control-label" for="statusRadio2">Inactive</label>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="form-group position-relative col-md-3">
            <label for="ownerType" class="form-label">Owner</label>
            <div class="form-control date-mask"
                style="display: flex; background-color: rgb(40, 48, 70); border-radius: 10px">
                <div id="ownerVehicle" class="custom-control custom-radio">
                    <input type="radio" id="ownerRadio1" name="customRadio" class="custom-control-input" checked>
                    <label class="custom-control-label" for="ownerRadio1">Own</label>
                </div>
                <div id="rentalVehicle" class="custom-control custom-radio ml-2">
                    <input type="radio" id="ownerRadio2" name="customRadio" class="custom-control-input">
                    <label class="custom-control-label" for="ownerRadio2">Rental</label>
                </div>
            </div>

        </div>
        <div class="form-group position-relative col-md-3">
            <label for="ownerMobile" class="form-label">Owner Mobile Number</label>
            <input type="number" class="form-control date-mask" placeholder="Enter Owner Mobile Number"
                id="ownerMobile">
        </div>
        <div class="form-group position-relative col-md-3">
            <label for="driverName" class="form-label">Vehicle Driver Name</label>
            <input type="text" class="form-control date-mask" placeholder="Enter Driver Name" id="driverName">
        </div>
        <div class="form-group position-relative col-md-3">
            <label for="driverMobile" class="form-label">Driver Mobile Number</label>
            <input type="number" class="form-control date-mask" placeholder="Enter Driver Mobile Number"
                id="driverMobile">
        </div>

    </div>
    <div class="row">
        <div class="form-group position-relative col-md-4">
            <div id="rentalCompany" style="display: none">
                <input type="text" class="form-control date-mask" placeholder="Rental Comapny Name">
            </div>
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
<div class="row" id="table-bordered">
    <div class="col-12">
        <div class="card">
            <div class="card-header d-flex flex-row justify-content-end">
                <div class="col-lg-4 col-sm-12 mt-2">
                    <h4 class="card-title">List of all Vechiles</h4>
                </div>
                <div class="col-lg-4 col-sm-12 mt-1">
                    <button class="dt-button create-new btn btn-primary mt-2" tabindex="0"
                        aria-controls="DataTables_Table_0" type="button" id="income_list"><span><svg
                                xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="feather feather-plus mr-50 font-small-4">
                                <line x1="12" y1="5" x2="12" y2="19"></line>
                                <line x1="5" y1="12" x2="19" y2="12"></line>
                            </svg>Add Vehicle</span>
                    </button>
                </div>
                <div class="col-lg-4 col-sm-12 mt-1 mobile_flex">
                    <label>Search :</label>
                    <input id="myInput" type="text" onkeyup="myFunction()" value="" class="form-control"
                        placeholder="Search Anythings...">
                </div>
            </div>

            <div class="table-responsive">
                <table class="table table-bordered table-sm">
                    <thead>
                        <tr>
                            <th>SL</th>
                            <th>Vechile ID</th>
                            <th>Vehicle Number</th>
                            <th>Vechile Type</th>
                            <th>Vehicle Owner</th>
                            <th>Owner Mobile Number</th>
                            <th>Vehicle Driver</th>
                            <th>Driver Mobile Number</th>
                            <th>Vehicle Capacity</th>
                            <th>Vehicle Status</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody id="myTable">
                        <tr>
                            <td>
                                <span class="font-weigth-bold">1</span>
                            </td>
                            <td>
                                <span class="font-weigth-bold">001</span>
                            </td>
                            <td>
                                <span class="font-weigth-bold">19-614253</span>
                            </td>
                            <td>
                                <span class="font-weigth-bold">Toyota Hiace</span>
                            </td>
                            <td>
                                <span class="font-weigth-bold">Own</span>
                            </td>
                            <td>
                                <span class="font-weigth-bold">01641991515</span>
                            </td>
                            <td>
                                <span class="font-weigth-bold">Hasan</span>
                            </td>
                            <td>
                                <span class="font-weigth-bold">01843792705</span>
                            </td>
                            <td>
                                <span class="font-weigth-bold">9</span>
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
                                <span class="font-weigth-bold">2</span>
                            </td>
                            <td>
                                <span class="font-weigth-bold">002</span>
                            </td>
                            <td>
                                <span class="font-weigth-bold">30-7234</span>
                            </td>
                            <td>
                                <span class="font-weigth-bold">Toyota Noah</span>
                            </td>
                            <td>
                                <span class="font-weigth-bold">Rental <br> by <span>Green Rent a Car</span></span>
                            </td>
                            <td>
                                <span class="font-weigth-bold">01641991515</span>
                            </td>
                            <td>
                                <span class="font-weigth-bold">Farhan</span>
                            </td>
                            <td>
                                <span class="font-weigth-bold">01843792705</span>
                            </td>
                            <td>
                                <span class="font-weigth-bold">7</span>
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
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection