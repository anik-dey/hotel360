@extends('layouts.master')
@section('title', 'All Users')
@section('content')
<div class="row" id="table-bordered">
    <div class="col-12">
        <div class="card">
            <div class="card-header d-flex flex-row justify-content-end">
                <div class="col-lg-4 col-sm-12 mt-1 mobile_flex">
                    <label>Search :</label>
                    <input id="myInput" type="text" onkeyup="myFunction()" value="" class="form-control"
                        placeholder="Search Anythings...">
                </div>
            </div>
            <div class="table-responsive">
                <table class="table table-bordered table-sm">
                    <thead>
                        <tr align="center">
                            <th>SL</th>
                            <th>Photo</th>
                            <th>Name</th>
                            <th>Designation</th>
                            <th>Username</th>
                            <th>Status</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody id="myTable">
                        @forelse ($users as $key => $item)
                        <tr align="center">
                            <td>
                                <span class="font-weight-bold">{{++$key}}</span>
                            </td>
                            @if ($item->employees->profile_pic !='')
                            <td>
                                <span class="font-weight-bold"><img
                                        src="{{asset('employee_picture/'. $item->employees->profile_pic)}}"
                                        class="img-fluid" style="max-width: 80px; max-height: 70px;" /></span>
                            </td>
                            @else
                            <td>
                                <span class="font-weight-bold"><img src="{{asset('images/logo/female.jpg')}}"
                                        class="img-fluid" style="max-width: 80px; max-height: 70px;" /></span>
                            </td>
                            @endif

                            <td>
                                <span class="font-weight-bold">{{ $item->name }}</span>
                            </td>
                            <td>
                                <span class="font-weight-bold">{{ $item->employees->designation }}</span>
                            </td>
                            <td>
                                <span class="font-weight-bold">{{ $item->username }}</span>
                            </td>
                            @if ($item->status==1)
                            <td>
                                <a href="{{ URL::to('app/users-status-update/' . $item->id) }}"><span
                                        class="badge badge-pill badge-light-success mr-1">Active</span></a>
                            </td>
                            @else
                            <td>
                                <a href="{{ URL::to('app/users-status-update/' . $item->id) }}"><span
                                        class="badge badge-pill badge-light-danger mr-1">Deactive</span></a>
                            </td>
                            @endif
                            <td>
                                <label data-toggle="modal" data-target="#modals-pass{{$item->id}}">Change
                                    Password</label>
                            </td>
                            <div class="modal fade text-left" id="modals-pass{{$item->id}}" tabindex="-1"
                                aria-labelledby="myModalLabel33" style="display: none;" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title" id="myModalLabel33">Password Change Form</h4>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">×</span>
                                            </button>
                                        </div>
                                        <form action="{{ URL::to('app/all-users-pass-change/' . $item->id) }}"
                                            method="post">
                                            @csrf
                                            <div class="modal-body">
                                                <label>Name: </label>
                                                <div class="form-group">
                                                    <input type="text" value="{{$item->name}}" placeholder="Password"
                                                        class="form-control" readonly>
                                                </div>
                                                <label>Password: </label>
                                                <div class="form-group">
                                                    <input type="text" name="password" placeholder="Password"
                                                        class="form-control" minlength="6">
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="submit"
                                                    class="btn btn-primary waves-effect waves-float waves-light">Set</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="7" align="center">
                                <div class="alert-danger">Opps!!, Not Users Found</div>
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
