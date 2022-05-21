@extends('layouts.master')
@section('title', 'Leave')
@push('css')
<link rel="stylesheet" type="text/css" href="{{asset('backend/app-assets/css/components.css')}}">
@endpush
@section('content')
<div class="row" id="table-bordered">
    <div class="col-12">
        <div class="card">
            <div class="card-header d-flex flex-row justify-content-end">
                <div class="col-md-2  mt-2" >
                    <h4 class="card-title">Leave List</h4>
                </div>
                <div class="col-md-4  mt-1 mobile_flex"  >
                    <label>Search :</label>
                    <input id="myInput" type="text" onkeyup="myFunction()" value="" class="form-control"
                        placeholder="Search Anythings...">
                </div>
                <div class="col-md-1" ></div>
                <div class="col-md-2 pl-3" >
                    <button class="dt-button btn btn-primary mt-2" data-toggle="modal" data-target="#add_leave"
                        tabindex="0" aria-controls="DataTables_Table_0" type="button"><span><svg
                                xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="feather feather-plus mr-50 font-small-4">
                                <line x1="12" y1="5" x2="12" y2="19"></line>
                                <line x1="5" y1="12" x2="19" y2="12"></line>
                            </svg>Add Leave</span>
                    </button>
                </div>
                <div class="col-md-3 pr-2" >
                    <button class="dt-button btn btn-primary mt-2" onclick="window.location.href='leave-type';"
                        tabindex="0" aria-controls="DataTables_Table_0" type="button"><span><svg
                                xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="feather feather-plus mr-50 font-small-4">
                                <line x1="12" y1="5" x2="12" y2="19"></line>
                                <line x1="5" y1="12" x2="19" y2="12"></line>
                            </svg>Add Leave Type</span>
                    </button>
                </div>
            </div>
            <div class="table-responsive">
                <table class="table table-bordered table-sm">
                    <thead>
                        <tr>
                            <th>Employee Id</th>
                            <th>Photo</th>
                            <th>Name</th>
                            <th>Leave Type</th>
                            <th>Application Start Date</th>
                            <th>Application End Date</th>
                            <th>Approve Start Date</th>
                            <th>Approve End Date</th>
                            <th>Apply Day</th>
                            <th>Approve Day</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody id="myTable">
                        <tr>
                            <td>
                                <span class="font-weight-bold">E12306</span>
                            </td>
                            <td>
                                <span class="font-weight-bold"><img src="{{asset('images/logo/male.jpg')}}"
                                        class="img-fluid" style="max-width: 80px; max-height: 70px;" /></span>
                            </td>
                            <td>
                                <span class="font-weight-bold">Din Islam</span>
                            </td>
                            <td>
                                <span class="font-weight-bold">Paid</span>
                            </td>
                            <td>
                                <span class="font-weight-bold">2021-09-15</span>
                            </td>
                            <td>
                                <span class="font-weight-bold">2021-09-18</span>
                            </td>
                            <td>
                                <span class="font-weight-bold">2021-09-15</span>
                            </td>
                            <td>
                                <span class="font-weight-bold">2021-09-17</span>
                            </td>
                            <td>
                                <span class="font-weight-bold">3</span>
                            </td>
                            <td>
                                <span class="badge badge-pill badge-light-success mr-1">2</span>
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
                                        <form class="dropdown-item">
                                            <input name="_method" type="hidden" value="DELETE">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round"
                                                class="feather feather-trash mr-50">
                                                <polyline points="3 6 5 6 21 6"></polyline>
                                                <path
                                                    d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2">
                                                </path>
                                            </svg>
                                            <span class="show_confirm">Delete</span>
                                        </form>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <span class="font-weight-bold">E25469</span>
                            </td>
                            <td>
                                <span class="font-weight-bold"><img src="{{asset('images/logo/male.jpg')}}"
                                        class="img-fluid" style="max-width: 80px; max-height: 70px;" /></span>
                            </td>
                            <td>
                                <span class="font-weight-bold">Din Islam</span>
                            </td>
                            <td>
                                <span class="font-weight-bold">Paid</span>
                            </td>
                            <td>
                                <span class="font-weight-bold">2021-09-15</span>
                            </td>
                            <td>
                                <span class="font-weight-bold">2021-09-18</span>
                            </td>
                            <td>
                                <span class="font-weight-bold">2021-09-15</span>
                            </td>
                            <td>
                                <span class="font-weight-bold">2021-09-17</span>
                            </td>
                            <td>
                                <span class="font-weight-bold">3</span>
                            </td>
                            <td>
                                <span class="badge badge-pill badge-light-success mr-1">2</span>
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
                                        <form class="dropdown-item">
                                            <input name="_method" type="hidden" value="DELETE">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round"
                                                class="feather feather-trash mr-50">
                                                <polyline points="3 6 5 6 21 6"></polyline>
                                                <path
                                                    d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2">
                                                </path>
                                            </svg>
                                            <span class="show_confirm">Delete</span>
                                        </form>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <span class="font-weight-bold">E8569</span>
                            </td>
                            <td>
                                <span class="font-weight-bold"><img src="{{asset('images/logo/male.jpg')}}"
                                        class="img-fluid" style="max-width: 80px; max-height: 70px;" /></span>
                            </td>
                            <td>
                                <span class="font-weight-bold">Din Islam</span>
                            </td>
                            <td>
                                <span class="font-weight-bold">Paid</span>
                            </td>
                            <td>
                                <span class="font-weight-bold">2021-09-15</span>
                            </td>
                            <td>
                                <span class="font-weight-bold">2021-09-18</span>
                            </td>
                            <td>
                                <span class="font-weight-bold">2021-09-15</span>
                            </td>
                            <td>
                                <span class="font-weight-bold">2021-09-17</span>
                            </td>
                            <td>
                                <span class="font-weight-bold">3</span>
                            </td>
                            <td>
                                <span class="badge badge-pill badge-light-success mr-1">2</span>
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
                                        <form class="dropdown-item">
                                            <input name="_method" type="hidden" value="DELETE">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round"
                                                class="feather feather-trash mr-50">
                                                <polyline points="3 6 5 6 21 6"></polyline>
                                                <path
                                                    d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2">
                                                </path>
                                            </svg>
                                            <span class="show_confirm">Delete</span>
                                        </form>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="modal modal-slide-in fade" id="add_leave" aria-hidden="true">
                <div class="modal-dialog sidebar-lg-add_leave">
                    <div class="modal-content p-0">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">×</button>
                        <div class="modal-header mb-1">
                            <h5 class="modal-title">
                                <span class="align-middle">Add Employee Leave</span>
                            </h5>
                        </div>
                        <div class="modal-body flex-grow-1">
                            <form action="#">
                                <div class="row">
                                    <div class="form-group position-relative col-md-6 sm-lg-12">
                                        <label for="customer-country" class="form-label">Employee Id</label>
                                        <select class="form-control select2" id="" name="">
                                            <option>Select</option>
                                            <option value="">E-12548</option>
                                            <option value="">E-23695</option>
                                            <option value="">E-14569</option>
                                            <option value="">E-14785</option>
                                            <option value="">E-45879</option>
                                        </select>
                                    </div>
                                    <div class="form-group position-relative col-md-6 sm-lg-12">
                                        <label for="customer-country" class="form-label">Leave Type</label>
                                        <select class="form-control select2" id="" name="">
                                            <option>Select</option>
                                            <option value="">Paid</option>
                                            <option value="">Unpaid</option>
                                            <option value="">Medical</option>
                                            <option value="">Parternity</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group position-relative col-md-6 sm-lg-12">
                                        <label for="customer-country" class="form-label">Application Start Date</label>
                                        <input type="text" id="fp-default"
                                            class="form-control flatpickr-basic flatpickr-input"
                                            placeholder="YYYY-MM-DD" readonly="readonly">
                                    </div>
                                    <div class="form-group position-relative col-md-6 sm-lg-12">
                                        <label for="customer-country" class="form-label">Application End Date</label>
                                        <input type="text" id="fp-default"
                                            class="form-control flatpickr-basic flatpickr-input"
                                            placeholder="YYYY-MM-DD" readonly="readonly">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group position-relative col-md-6 sm-lg-12">
                                        <label for="customer-country" class="form-label">Apply Days</label>
                                        <input type="number" class="form-control" id="basicInput" placeholder=""
                                            readonly>
                                    </div>
                                    <div class="form-group position-relative col-md-6 sm-lg-12">
                                        <label for="customer-country" class="form-label">Application Copy (if
                                            any)</label>
                                        <input type="file" class="form-control" id="basicInput" placeholder="">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group position-relative col-md-6 sm-lg-12">
                                        <label for="customer-country" class="form-label">Approve Start Date</label>
                                        <input type="text" id="fp-default"
                                            class="form-control flatpickr-basic flatpickr-input"
                                            placeholder="YYYY-MM-DD" readonly="readonly">
                                    </div>
                                    <div class="form-group position-relative col-md-6 sm-lg-12">
                                        <label for="customer-country" class="form-label">Approve End Date</label>
                                        <input type="text" id="fp-default"
                                            class="form-control flatpickr-basic flatpickr-input"
                                            placeholder="YYYY-MM-DD" readonly="readonly">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group position-relative col-md-12 sm-lg-12">
                                        <label for="customer-country" class="form-label">Leave Reason</label>
                                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"
                                            placeholder="Textarea"></textarea>
                                    </div>
                                </div>
                                <div class="form-group d-flex flex-wrap mt-2">
                                    <button type="submit" class="btn btn-success mr-1"
                                        data-dismiss="modal">Submit</button>
                                    <button type="button" class="btn btn-outline-secondary"
                                        data-dismiss="modal">Cancel</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js"></script>
<script type="text/javascript">
$('.show_confirm').click(function(event) {
    var form = $(this).closest("form");
    var name = $(this).data("name");
    event.preventDefault();
    swal({
            title: `Are you sure you want to delete this record?`,
            text: "If you delete this, it will be gone forever.",
            icon: "warning",
            buttons: true,
            dangerMode: true,
        })
        .then((willDelete) => {

            if (willDelete) {
                form.submit();
            }
        });
});
</script>
@endsection
