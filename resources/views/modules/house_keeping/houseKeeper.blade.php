@extends('layouts.master')
@section('title', 'Housekeeper')
@section('content')
<div class="row" id="table-bordered">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <label>
                    <label>Search :</label> <label><input id="myInput" type="text" onkeyup="myFunction()" value=""
                            class="form-control" placeholder="Search Anythings..."></label>
                </label>
                <label>
                    <button class="dt-button create-new btn btn-primary" tabindex="0" aria-controls="DataTables_Table_0"
                        type="button" data-toggle="modal" data-target="#modals-add-houseKeeper"><span>
                            <i class="fa fa-plus"></i> Add New Housekeeper</span>
                    </button>
                </label>
            </div>
            <div class="col-md-6 my-2">
                <a href="{{route('house-keeper.index')}}" class="btn btn-primary btn-sm">Active House Keeper</a>
                <button class="btn btn-danger btn-sm" id="inactive-haldler">Inactive House Keeper</button>
            </div>
            <div class="table-responsive">
                {{-- Active House Keeper Table --}}
                <table class="table table-bordered" id="active-housekeeper">
                    <thead>
                        <tr>
                            <th>SL</th>
                            <th>Property</th>
                            <th>House Keeper</th>
                            <th>Cell / Phone</th>
                            <th>Status</th>
                            <th class="text-center">Actions</th>
                        </tr>
                    </thead>
                    <tbody id="myTable">
                        @forelse ($housekeeper as $key => $item)
                        @if ($item->housekeepers->status == 1)
                        <tr>
                            <td>
                                <span class="font-weight-bold">{{++$key}}</span>
                            </td>
                            <td><span>{{ $item->properties->name }}</span></td>
                            <td><span>{{$item->employee_name}}</span></td>
                            <td><span class="font-weight-bold">{{$item->mobile_number}}</span></td>

                            <td>
                                <a href="{{ URL::to('house-keeper-update/'. $item->housekeepers->id) }}"><span
                                        class="badge badge-pill badge-light-success mr-1">Active</span></a>
                            </td>

                            <td class="text-center">
                                <div class="d-flex justify-content-center">
                                    <div>
                                        <div style="margin-left: 7px">
                                            <button onclick="deleteData({{$item->housekeepers->id}})"
                                                class="btn btn-danger btn-sm">
                                                <i class="fa fa-trash"></i>
                                            </button>
                                            <form style="display: none" id="delete-form-{{$item->housekeepers->id}}"
                                                action="{{route('house-keeper.destroy', $item->housekeepers->id)}}"
                                                method="POST">
                                                @method('delete')
                                                @csrf
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                {{-- House Keeper Edit Modal Start --}}
                                <div class="modal modal-slide-in fade" id="modals-edit-houseKeeper">
                                    <div class="modal-dialog sidebar-sm">
                                        <form class="add-new-record modal-content pt-0" action="" method="POST">
                                            @csrf
                                            @method('put')
                                            <button type="button" class="close" data-dismiss="modal"
                                                aria-label="Close">×</button>
                                            <div class="modal-header mb-1">
                                                <h5 class="modal-title" id="exampleModalLabel">Edit Housekeeper</h5>
                                            </div>
                                            <div class="modal-body flex-grow-1 text-left">
                                                <div class="form-group">
                                                    <label class="form-label" for="name">Name</label>
                                                    <input type="text" class="form-control dt-full-name" name="name"
                                                        id="name" placeholder="House Keeper Name Here" value=""
                                                        required />
                                                </div>
                                                <div class="form-group">
                                                    <label class="form-label" for="contact_no">Cell / Phone</label>
                                                    <input type="number" class="form-control dt-full-name"
                                                        id="contact_no" name="contact_no"
                                                        placeholder="House Keeper Cell / Phone Here" value="" />
                                                </div>
                                                <button type="submit"
                                                    class="btn btn-primary data-submit mr-1">Submit</button>
                                                <button type="reset" class="btn btn-outline-secondary"
                                                    data-dismiss="modal">Cancel</button>
                                            </div>
                                        </form>

                                    </div>
                                </div>
                                {{-- House Keeper Edit Modal End --}}
                            </td>
                        </tr>
                        @endif
                        @empty
                        <tr align="center">
                            <td class="text-danger" colspan="6"> Please Add House Keeper First</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
                {{-- Inactive House Keeper Table --}}
                <table class="table table-bordered" id="inactive-housekeeper" style="display: none;">
                    <thead>
                        <tr>
                            <th>SL</th>
                            <th>Property</th>
                            <th>House Keeper</th>
                            <th>Cell / Phone</th>
                            <th>Status</th>
                            <th class="text-center">Actions</th>
                        </tr>
                    </thead>
                    <tbody id="myTable">
                        @forelse ($housekeeper as $key => $item)
                        @if ($item->housekeepers->status == 0)
                        <tr>
                            <td>
                                <span class="font-weight-bold">{{++$key}}</span>
                            </td>
                            <td><span>{{ $item->properties->name }}</span></td>
                            <td><span>{{$item->employee_name}}</span></td>
                            <td><span class="font-weight-bold">{{$item->mobile_number}}</span></td>
                            <td>
                                <a href="{{ URL::to('house-keeper-update/'. $item->housekeepers->id) }}"><span
                                        class="badge badge-pill badge-light-danger mr-1">Deactive</span>
                                </a>
                            </td>
                            <td class="text-center">
                                <div class="d-flex justify-content-center">
                                    <div>
                                        <div style="margin-left: 7px">
                                            <button onclick="deleteData({{$item->housekeepers->id}})"
                                                class="btn btn-danger btn-sm">
                                                <i class="fa fa-trash"></i>
                                            </button>
                                            <form style="display: none" id="delete-form-{{$item->housekeepers->id}}"
                                                action="{{route('house-keeper.destroy', $item->housekeepers->id)}}"
                                                method="POST">
                                                @method('delete')
                                                @csrf
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                {{-- House Keeper Edit Modal Start --}}
                                <div class="modal modal-slide-in fade" id="modals-edit-houseKeeper">
                                    <div class="modal-dialog sidebar-sm">
                                        <form class="add-new-record modal-content pt-0" action="" method="POST">
                                            @csrf
                                            @method('put')
                                            <button type="button" class="close" data-dismiss="modal"
                                                aria-label="Close">×</button>
                                            <div class="modal-header mb-1">
                                                <h5 class="modal-title" id="exampleModalLabel">Edit Housekeeper</h5>
                                            </div>
                                            <div class="modal-body flex-grow-1 text-left">
                                                <div class="form-group">
                                                    <label class="form-label" for="name">Name</label>
                                                    <input type="text" class="form-control dt-full-name" name="name"
                                                        id="name" placeholder="House Keeper Name Here" value=""
                                                        required />
                                                </div>
                                                <div class="form-group">
                                                    <label class="form-label" for="contact_no">Cell / Phone</label>
                                                    <input type="number" class="form-control dt-full-name"
                                                        id="contact_no" name="contact_no"
                                                        placeholder="House Keeper Cell / Phone Here" value="" />
                                                </div>
                                                <button type="submit"
                                                    class="btn btn-primary data-submit mr-1">Submit</button>
                                                <button type="reset" class="btn btn-outline-secondary"
                                                    data-dismiss="modal">Cancel</button>
                                            </div>
                                        </form>

                                    </div>
                                </div>
                                {{-- House Keeper Edit Modal End --}}
                            </td>
                        </tr>
                        @endif
                        @empty
                        <tr align="center">
                            <td class="text-danger" colspan="6"> Please Add House Keeper First</td>
                        </tr>

                        @endforelse
                    </tbody>
                </table>
                {{-- House Keeper Add Modal Start --}}
                <div class="modal modal-slide-in fade" id="modals-add-houseKeeper">
                    <div class="modal-dialog sidebar-sm">
                        <form class="add-new-record modal-content pt-0" action="{{route('house-keeper.store')}}"
                            method="POST">
                            @csrf
                            @method('post')
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">×</button>
                            <div class="modal-header mb-1">
                                <h5 class="modal-title" id="exampleModalLabel">Add New Housekeeper</h5>
                            </div>
                            <div class="modal-body flex-grow-1">
                                <div class="form-group">
                                    <label class="form-label" for="status">Employee</label>
                                    <select class="form-control select2" name="employee_id" id="employee_id" required>
                                        @forelse ($employee as $item )
                                        <option value="{{$item->id}}">{{$item->employee_name}}</option>
                                        @empty
                                        <option value="">Please Add Employee First</option>
                                        @endforelse
                                    </select>
                                </div>
                                <button type="submit" class="btn btn-primary data-submit mr-1">Submit</button>
                                <button type="reset" class="btn btn-outline-secondary"
                                    data-dismiss="modal">Cancel</button>
                            </div>
                        </form>

                    </div>
                </div>
                {{-- House Keeper Add Modal End --}}
            </div>
        </div>
    </div>
</div>
@endsection
@push('js')
<script>
    $(document).ready(function(){
        $('#inactive-haldler').click(function(){
            $('#inactive-housekeeper').show();
            $('#active-housekeeper').hide();
        })
    })
</script>
@endpush
