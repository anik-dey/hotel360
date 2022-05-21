@extends('layouts.contentLayoutHorizontal')
@section('content')
<div class="row" id="table-bordered">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <label>
                    <h4 class="card-title">{{ $title }}</h4>
                </label>
                <label>
                    <label>Search :</label> <label><input id="myInput" type="text" onkeyup="myFunction()" value=""
                            class="form-control" placeholder="Search Anythings..."></label>
                </label>
                <label><a href="{{ route('deleted-booking-type') }}"><button
                            class="dt-button create-new btn btn-primary" type="button" <span>
                            Show Deleted Booking Type</span></button></a>
                    <button class="dt-button create-new btn btn-primary" type="button" data-toggle="modal"
                        data-target="#modals-booking-type" onclick="resetForm()"><span><i class=" fa fa-plus mr-1"></i>
                            Add New</span></button>
                </label>
            </div>
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th class="text-center">SL</th>
                            <th>Booking Type</th>
                            <th>Property</th>
                            <th class="text-center">Actions</th>
                        </tr>
                    </thead>
                    <tbody id="myTable">
                        @forelse($bookingType as $key => $item)
                            <tr>
                                <td class="text-center">
                                    <span class="font-weight-bold">{{ ++$key }}</span>
                                </td>
                                <td>
                                    <span class="font-weight-bold">{{ $item->type_name }}</span>
                                </td>
                                <td>
                                    <span class="font-weight-bold">{{ $item->property->name }}</span>
                                </td>
                                <td class="text-center">
                                    <div class="d-flex justify-content-center">
                                        <div style="margin-left: 7px">
                                            <button type="button" class="btn btn-primary btn-sm" data-toggle="modal"
                                                data-target="#modals-booking-edit{{ $item->id }}">
                                                <i class="fa fa-edit"></i>
                                            </button>
                                        </div>
                                        <div>
                                            <div style="margin-left: 7px">
                                                <button onclick="deleteData({{ $item->id }})"
                                                    class="btn btn-danger btn-sm">
                                                    <i class="fa fa-trash"></i>
                                                </button>
                                                <form style="display: none" id="delete-form-{{ $item->id }}"
                                                    action="{{ route('booking-type-list.destroy',$item->id) }}"
                                                    method="POST">
                                                    @method('delete')
                                                    @csrf
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    {{-- Booking Type Edit Modal Start --}}
                                    <div class="modal modal-slide-in fade" id="modals-booking-edit{{ $item->id }}">
                                        <div class="modal-dialog sidebar-sm text-left">
                                            <form id="bookingForm" class="add-new-record modal-content pt-0"
                                                action="{{ route('booking-type-list.update', $item->id) }}"
                                                method="POST">
                                                @csrf
                                                @method('put')
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">×</button>
                                                <div class="modal-header mb-1">
                                                    <h5 class="modal-title" id="exampleModalLabel">Edit Booking Type
                                                    </h5>
                                                </div>
                                                <div class="modal-body flex-grow-1">
                                                    <div class="form-group">
                                                        <label class="form-label" for="type_name">Booking Type</label>
                                                        <input type="text" class="form-control dt-full-name"
                                                            id="type_name" name="type_name"
                                                            value="{{ $item->type_name }}"
                                                            placeholder="Booking Type" />
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="property_id">Select Property</label>
                                                        <select name="property_id" id="property_id"
                                                            class="form-control select2">
                                                            <option label="Please Select"></option>
                                                            @foreach($property as $item1)
                                                                <option value="{{ $item1->id }}" @if ($item1->id
                                                                    ==$item->property_id)
                                                                    selected @endif>{{ $item1->name }}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                    <button type="submit"
                                                        class="btn btn-primary data-submit mr-1">Add</button>
                                                    <button type="reset" class="btn btn-outline-secondary"
                                                        data-dismiss="modal">Cancel</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    {{-- Booking Type Edit Modal End --}}
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="4" class="text-danger text-center"> Please add booking type name</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>

                {{-- Booking Type Add Modal Start --}}
                <div class="modal modal-slide-in fade" id="modals-booking-type">
                    <div class="modal-dialog sidebar-sm">
                        <form id="bookingForm" class="add-new-record modal-content pt-0"
                            action="{{ route('booking-type-list.store') }}" method="POST">
                            @csrf
                            @method('post')
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">×</button>
                            <div class="modal-header mb-1">
                                <h5 class="modal-title" id="exampleModalLabel">Add New</h5>
                            </div>
                            <div class="modal-body flex-grow-1">
                                <div class="form-group">
                                    <label class="form-label" for="type_name">Booking Type</label>
                                    <input type="text" class="form-control dt-full-name" id="type_name" name="type_name"
                                        value="{{ old('type_name') }}" placeholder="Booking Type" />
                                </div>
                                <div class="form-group">
                                    <label for="property_id">Select Property</label>
                                    <select name="property_id" id="property_id" class="form-control select2">
                                        @foreach($property as $item)
                                            <option value="{{ $item->id }}">{{ $item->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <button type="submit" class="btn btn-primary data-submit mr-1">Add</button>
                                <button type="reset" class="btn btn-outline-secondary"
                                    data-dismiss="modal">Cancel</button>
                            </div>
                        </form>
                    </div>
                </div>
                {{-- Booking Type Add Modal End --}}
            </div>
        </div>
    </div>
</div>
@endsection
