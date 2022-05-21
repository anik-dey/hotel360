@extends('layouts.master')
@section('title', 'Leave')
@section('content')
<form action="" method="" id="div1" enctype="multipart/form-data" style="display: none">
    <div class="row">
        <div class="form-group position-relative col-md-3"></div>
        <div class="form-group position-relative col-md-6">
            <label for="deperatmentName" class="form-label">Leave Type</label>
            <input type="text" class="form-control date-mask" placeholder="Leave Type" id="">
        </div>
        <div class="form-group position-relative col-md-3"></div>
    </div>
    <div class="row">
        <div class="form-group position-relative col-md-3"></div>
        <div class="form-group position-relative col-md-3">
            <button type="button" id="hide_btn"
                class="btn btn-primary btn-block waves-effect waves-float waves-light">Hide</button>
        </div>
        <div class="form-group position-relative col-md-3">
            <button type="submit" class="btn btn-success btn-block waves-effect waves-float waves-light">Submit</button>
        </div>
        <div class="form-group position-relative col-md-3"></div>
    </div>
</form>

<div class="row" id="table-bordered">
    <div class="col-12">
        <div class="card">
            <div class="card-header d-flex flex-row justify-content-end">
                <div class="col-md-4 mt-2">
                    <h4 class="card-title">Leave Type List</h4>
                </div>
                <div class="col-md-4 mt-1 mobile_flex">
                    <label>Search :</label>
                    <input id="myInput" type="text" onkeyup="myFunction()" value="" class="form-control"
                        placeholder="Search Anythings...">
                </div>
                <div class="col-md-4 mt-1">
                    <button class="dt-button create-new btn btn-primary mt-2" tabindex="0"
                        aria-controls="DataTables_Table_0" type="button" id="income_list"><span><svg
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
                <table class="table table-bordered table-sm" style="text-align: center">
                    <thead>
                        <tr>
                            <th>SL</th>
                            <th>Name</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody id="myTable">
                        <tr>
                            <td>
                                <span class="font-weigth-bold">1</span>
                            </td>
                            <td>
                                <span class="font-weigth-bold">Paid</span>
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
                                <span class="font-weigth-bold">2</span>
                            </td>
                            <td>
                                <span class="font-weigth-bold">Unpaid</span>
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
                                <span class="font-weigth-bold">3</span>
                            </td>
                            <td>
                                <span class="font-weigth-bold">Medical</span>
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
        </div>
    </div>
</div>
@endsection