@extends('layouts.master')
@section('title', 'Employee List')
@section('content')
<div class="row" id="table-bordered">
    <div class="col-12">
        <div class="card">
            <div class="card-header d-flex flex-row justify-content-end">
                <div class="col-md-4  mt-2">
                    <h4 class="card-title">Employee List</h4>
                </div>
                <div class="col-md-4  mt-1 mobile_flex">
                    <label>Search :</label>
                    <input id="myInput" type="text" onkeyup="myFunction()" value="" class="form-control"
                        placeholder="Search Anythings...">
                </div>
                <div class="col-md-4  mt-1">
                    <button class="dt-button btn btn-primary mt-2" onclick="window.location.href='new-employee';"
                        tabindex="0" aria-controls="DataTables_Table_0" type="button"><span><svg
                                xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="feather feather-plus mr-50 font-small-4">
                                <line x1="12" y1="5" x2="12" y2="19"></line>
                                <line x1="5" y1="12" x2="19" y2="12"></line>
                            </svg>Add Employee</span>
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
                            <th>Photo</th>
                            <th>Name</th>
                            <th>Property</th>
                            <th>Designation</th>
                            <th>Joining</th>
                            <th>Phone</th>
                            <th>Salary</th>
                            <th>Self Panel</th>
                            <th>Status</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody id="myTable">

                        @forelse($employee as $key => $item )
                            <tr>
                                <td>
                                    <span class="font-weight-bold">{{ ++$key }}</span>
                                </td>
                                @if($item->profile_pic != "")
                                    <td>
                                        <span class="font-weight-bold"><img
                                                src="{{ asset('employee_picture/'. $item->profile_pic) }}"
                                                class="img-fluid" style="max-width: 80px; max-height: 70px;" /></span>
                                    </td>
                                @else
                                    <td>
                                        <span class="font-weight-bold"><img
                                                src="{{ asset('images/logo/male.jpg') }}"
                                                class="img-fluid" style="max-width: 80px; max-height: 70px;" /></span>
                                    </td>
                                @endif
                                <td>
                                    <span class="font-weight-bold">{{ $item->employee_name }}</span>
                                </td>
                                <td>
                                    <span class=" font-weight-bold">{{ $item->properties->name }}</span>
                                </td>
                                <td>
                                    <span class="font-weight-bold">{{ $item->designation }}</span>
                                </td>
                                <td>
                                    <span class="font-weight-bold">{{
                                    Carbon\Carbon::parse($item->joining_date)->format('d-M-Y') }}</span>
                                </td>
                                <td>
                                    <span class="font-weight-bold">{{ $item->mobile_number }}</span>
                                </td>
                                <td>
                                    <span class="font-weight-bold">৳ {{ $item->basic_salary }}</span>
                                </td>
                                @if($item->panel == "")
                                    <td>
                                        <a
                                            href="{{ URL::to('/app/panel/user/' . $item->id) }}"><span
                                                class="font-weight-bold">Make Panel</span></a>
                                    </td>
                                @else
                                    <td>
                                        <span class="font-weight-bold">{{ $item->panel }}</span>
                                    </td>
                                @endif
                                @if($item->employee_status == 1)
                                    <td>
                                        <span class="badge badge-pill badge-light-success mr-1">Active</span>
                                    </td>
                                @else
                                    <td>
                                        <span class="badge badge-pill badge-light-danger mr-1">Inactive</span>
                                    </td>
                                @endif

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
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="feather feather-edit-2 mr-50">
                                                    <path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z">
                                                    </path>
                                                </svg>
                                                <span>Pad Print</span>
                                            </a>
                                            <a class="dropdown-item" href="javascript:void(0);">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="feather feather-edit-2 mr-50">
                                                    <path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z">
                                                    </path>
                                                </svg>
                                                <span>Page Print</span>
                                            </a>
                                            <a class="dropdown-item" href="javascript:void(0);">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="feather feather-edit-2 mr-50">
                                                    <path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z">
                                                    </path>
                                                </svg>
                                                <span>Id Card</span>
                                            </a>
                                            <a class="dropdown-item">
                                                <form action="{{ route('hr-employee-update') }}"
                                                    method="POST">
                                                    @csrf
                                                    <input name="_method" type="hidden" value="POST">
                                                    <input type="text" name="id" value="{{ $item->id }}" hidden>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                        class="feather feather-edit-2 mr-50">
                                                        <path
                                                            d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z">
                                                        </path>
                                                    </svg>
                                                    <span class="show_edit">Edit</span>
                                                </form>
                                            </a>
                                            <a onclick="deleteData({{ $item->id }})" class="dropdown-item"
                                                href="javascript:void(0);">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="feather feather-trash mr-50">
                                                    <polyline points="3 6 5 6 21 6"></polyline>
                                                    <path
                                                        d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2">
                                                    </path>
                                                </svg>
                                                <span>Delete</span>
                                            </a>
                                            <form id="delete-form-{{ $item->id }}"
                                                action="{{ URL::to('app/employee-delete/' . $item->id) }}"
                                                method="POST" style="display: none;">
                                                @method('DELETE')
                                                {{ csrf_field() }}
                                            </form>
                                            <!-- <a class="dropdown-item">
                                                <form
                                                    action="{{ URL::to('app/employee-delete/' . $item->id) }}"
                                                    method="POST">
@csrf
                                                    <input name="_method" type="hidden" value="DELETE">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                        class="feather feather-trash mr-50">
                                                        <polyline points="3 6 5 6 21 6"></polyline>
                                                        <path
                                                            d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2">
                                                        </path>
                                                    </svg>
                                                    <span class="show_confirm">Delete</span>
                                                </form>
                                            </a> -->
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="11" align="center">
                                    <div class="alert-danger">Opps!!, Not Employees Found</div>
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection

