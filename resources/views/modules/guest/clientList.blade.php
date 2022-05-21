@extends('layouts.master')
@section('content')
<div class="row" id="table-bordered">
    <div class="col-12">
        <div class="card">
            <div class="card-header d-flex flex-row justify-content-end">
                <div class="col-4">
                    <!-- <h4 class="card-title">Guest List</h4> -->
                </div>
                <div class="col-4 mobile_flex">
                    <label>Search :</label>
                    <label><input id="myInput" type="text" onkeyup="myFunction()" value="" class="form-control"
                            placeholder="Search Anythings...">
                    </label>
                </div>
                <div class="col-4 text-lg-right">
                    <a href="{{route('guest.create')}}" type="button" class="dt-button create-new btn btn-primary btn-rasponsive"
                        tabindex="0" aria-controls="DataTables_Table_0" type="button"><svg
                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="feather feather-plus mr-50 font-small-4">
                            <line x1="12" y1="5" x2="12" y2="19"></line>
                            <line x1="5" y1="12" x2="19" y2="12"></line>
                        </svg><span>Add New Guest</span></a>
                </div>
            </div>
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th class="text-center">SL</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th class="text-center">Balance</th>
                            <th class="text-center">Document</th>
                            <th class="text-center">Actions</th>
                        </tr>
                    </thead>
                    <tbody id="myTable">
                        @forelse ($guest as $key => $item)
                        <tr>
                            <td align="center">
                                <span class="font-weight-bold">{{++ $key}}</span>
                            </td>
                            <td>
                                <span class="font-weight-bold">{{$item->name}}</span>
                            </td>
                            <td>
                                <span class="font-weight-bold">{{$item->email}}</span>
                            </td>
                            <td>
                                <span class="font-weight-bold">{{$item->phone}}</span>
                            </td>
                            <td align="center"><span class="badge badge-pill badge-light-success mr-1">2430.00</span>
                            </td>
                           <td align="center"> <a href="{{route('guest-detail.show',$item->id)}}"><i title="view" class="fa fa-eye"></i></a></td>
                           <td>
                                <div class="d-flex justify-content-center">
                                    <div style="margin-left: 7px">
                                        <a href="{{route('view',$item->id)}}"><button type="button" class="btn btn-primary btn-sm">
                                            <i class="fa fa-edit"></i>
                                        </button></a>
                                    </div>
                                    <div>
                                        <div style="margin-left: 7px">
                                            <button onclick="deleteData({{ $item->id }})" class="btn btn-danger btn-sm">
                                                <i class="fa fa-trash"></i>
                                            </button>
                                            <form style="display: none" id="delete-form-{{ $item->id }}"
                                                action="{{route('guest.destroy',$item->id)}}" method="POST">
                                                @method('delete')
                                                @csrf
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        @empty
                        <tr align="center">
                            <td class="text-danger" colspan="9">Opss!! No Data Found</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
                <div class="modal modal-slide-in fade" id="modals-add-pay" aria-hidden="true">
                    <div class="modal-dialog sidebar-lg">
                        <div class="modal-content p-0">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">×</button>
                            <div class="modal-header mb-1">
                                <h5 class="modal-title">
                                    <span class="align-middle">Payment Form</span>
                                </h5>
                            </div>
                            <div class="modal-body flex-grow-1">
                                <form id="form">
                                    <div class="form-group position-relative">
                                        <label for="customer-country" class="form-label">Payment Type</label>
                                        <select class="form-control" id="floor_name" name="customer-country">
                                            <option label="Please Select One"></option>
                                            <option value="Australia">Refund</option>
                                            <option value="Canada">Receieve</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="customer-contact" class="form-label">Remaks</label>
                                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"
                                            placeholder=""></textarea>
                                    </div>
                                    <div class="form-group d-flex flex-wrap mt-2">
                                        <button type="button" class="btn btn-primary mr-1"
                                            data-dismiss="modal">Add</button>
                                        <button type="button" class="btn btn-outline-secondary"
                                            data-dismiss="modal">Cancel</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal modal-slide-in fade" id="modals-add-floor">
                    <div class="modal-dialog sidebar-sm">
                        <form class="add-new-record modal-content pt-0">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">×</button>
                            <div class="modal-header mb-1">
                                <h5 class="modal-title" id="exampleModalLabel">Add Floor</h5>
                            </div>
                            <div class="modal-body flex-grow-1">
                                <div class="form-group">
                                    <label class="form-label" for="basic-icon-default-fullname">Floor Name</label>
                                    <input type="text" class="form-control dt-full-name"
                                        id="basic-icon-default-fullname" placeholder="Floor Name"
                                        aria-label="John Doe" />
                                </div>
                                <button type="button" class="btn btn-primary data-submit mr-1">Confirm</button>
                                <button type="reset" class="btn btn-outline-secondary"
                                    data-dismiss="modal">Cancel</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
