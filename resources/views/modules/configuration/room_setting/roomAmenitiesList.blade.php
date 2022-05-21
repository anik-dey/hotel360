@extends('layouts.contentLayoutHorizontal')
@section('content')
<div class="row" id="table-bordered">
    <div class="col-12">
        <div class="card">
            <div class="card-header d-flex flex-row">
                <div class="col-sm-6 col-lg-3">
                    <h4 class="card-title">Room Amenities</h4>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <label>Search :</label>
                    <input id="myInput" type="text" onkeyup="myFunction()" value="" class="form-control"
                        placeholder="Search Anythings...">
                </div>
                <div class="col-sm-12 col-lg-6 d-flex justify-content-end mt-1 mr-auto">
                    <a href="{{ route('deleted-amenities') }}"><button
                            class=" dt-button create-new btn btn-primary btn-rasponsive2 mr-1 mt-1" tabindex="0"
                            aria-controls="DataTables_Table_0" type="button"><span>Show Deleted
                                Amenities</span>
                        </button></a>
                    <button class=" dt-button create-new btn btn-primary btn-rasponsive2 mr-1 mt-1" tabindex="0"
                        aria-controls="DataTables_Table_0" type="button" data-toggle="modal"
                        data-target="#modals-add-amenities"><span><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round"
                                class="feather feather-plus mr-50 font-small-4">
                                <line x1="12" y1="5" x2="12" y2="19"></line>
                                <line x1="5" y1="12" x2="19" y2="12"></line>
                            </svg>Add New</span>
                    </button>
                </div>
            </div>
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr align="center">
                            <th>SL</th>
                            <th>Name</th>
                            <th>Property Name</th>
                            <th>Status</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody id="myTable">
                        @forelse($amenities as $key => $item)
                            <tr align="center">
                                <td>
                                    <span class="font-weight-bold">{{ ++$key }}</span>
                                </td>
                                <td>
                                    <span class="font-weight-bold">{{ $item->amenities }}</span>
                                </td>
                                <td>
                                    <span class="font-weight-bold">{{ $item->property->name }}</span>
                                </td>
                                @if($item->status ==1)
                                    <td>
                                        <span class="badge badge-pill badge-light-success mr-1">Active</span>
                                    </td>
                                @else
                                    <td>
                                        <span class="badge badge-pill badge-light-danger mr-1">Inactive</span>
                                    </td>
                                @endif
                                <td>
                                    <div class="d-flex justify-content-center">
                                        <a class="btn btn-primary btn-sm mr-1" type="button" data-toggle="modal"
                                            data-target="#modals-edit-amenities{{ $item->id }}">
                                            <i class="fa fa-edit"></i>
                                        </a>
                                        <a onclick="deleteData({{ $item->id }})" class="btn btn-danger btn-sm">
                                            <i class="fa fa-trash"></i>
                                        </a>
                                        <form id="delete-form-{{ $item->id }}"
                                            action="{{ route('room-amenities.destroy',$item->id) }}"
                                            method="POST" style="display: none;">
                                            @method('DELETE')
                                            {{ csrf_field() }}
                                        </form>
                                    </div>
                                    {{-- Amenties edit Modal Start --}}
                                    <div class="modal modal-slide-in fade text-left"
                                        id="modals-edit-amenities{{ $item->id }}">
                                        <div class="modal-dialog sidebar-sm">
                                            <form class="add-new-record modal-content pt-0" method="POST"
                                                action="{{ route('room-amenities.update',$item->id) }}">
                                                @csrf
                                                @method('put')
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">×</button>
                                                <div class="modal-header mb-1">
                                                    <h5 class="modal-title" id="exampleModalLabel">Edit Amenities</h5>
                                                </div>

                                                <div class="modal-body flex-grow-1">
                                                    <div class="form-group">
                                                        <label class="form-label" for="status">Property</label>
                                                        <select class="form-control select2" name="property_id"
                                                            id="propert1_id">
                                                            @forelse($property as $item1 )
                                                                <option value="{{ $item1->id }}" @if ($item1->
                                                                    id==$item->property_id)selected @endif>
                                                                    {{ $item1->name }}</option>
                                                            @empty
                                                                <option value="">Please Add Property First</option>
                                                            @endforelse
                                                        </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="form-label" for="floor_name">Amenity Name</label>
                                                        <input type="text" name="amenities"
                                                            class="form-control dt-full-name" id="amenities"
                                                            value="{{ $item->amenities }}" placeholder="Floor Name"
                                                            required />
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="form-label" for="status">Status</label>
                                                        <select class="form-control" name="status" id="status">

                                                            <option value="1" @if ($item->status == 1) selected
                        @endif>Active
                        </option>
                        <option value="0" @if ($item->status == 0) selected
                            @endif>Inactive</option>
                            </select>
            </div>
            <button type="submit" class="btn btn-success data-submit mr-1">Update</button>
            <button type="reset" class="btn btn-outline-secondary" data-dismiss="modal">Cancel</button>
        </div>
        </form>
    </div>
</div>
{{-- Amenities edit Modal end --}}
</td>
</tr>
@empty
<tr align="center">
    <td colspan="5" class="text-danger">Opps No Data Found</td>
</tr>
@endforelse
</tbody>
</table>
{{-- Amenities Add Modal Start --}}
<div class="modal modal-slide-in fade" id="modals-add-amenities">
    <div class="modal-dialog sidebar-sm">
        <form class="add-new-record modal-content pt-0" action="{{ route('room-amenities.store') }}"
            method="POST">
            @csrf
            @method('POST')
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">×</button>
            <div class="modal-header mb-1">
                <h5 class="modal-title" id="exampleModalLabel">Add Amenities</h5>
            </div>
            <div class="modal-body flex-grow-1">
                <div class="form-group">
                    <label class="form-label" for="status">Property</label>
                    <select class="form-control select2" name="property_id" id="property_id">
                        @forelse($property as $item )
                            <option value="{{ $item->id }}">{{ $item->name }}</option>
                        @empty
                            <option value="">Please Add Property First</option>
                        @endforelse
                    </select>
                </div>
                <div class="form-group">
                    <label class="form-label" for="floor_name">Amenities</label>
                    <input type="text" name="amenities" class="form-control dt-full-name" id="amenities"
                        value="{{ old('aminities') }}" placeholder="Amenities" required />
                </div>
                <div class="form-group">
                    <label class="form-label" for="status">Status</label>
                    <select class="form-control" name="status" id="status">
                        <option value="1">Active</option>
                        <option value="0">Inactive</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-success data-submit mr-1">Add</button>
                <button type="reset" class="btn btn-outline-secondary" data-dismiss="modal">Cancel</button>
            </div>
        </form>

    </div>
</div>
{{-- Amenities Add Modal end --}}
</div>
</div>
</div>
</div>
@endsection
