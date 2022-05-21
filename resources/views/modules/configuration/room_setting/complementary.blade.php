@extends('layouts.contentLayoutHorizontal')
@section('content')
<div class="row" id="table-bordered">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <label>
                    <h4 class="card-title">Complementary</h4>
                </label>
                <label>
                    <label>Search :</label> <label><input id="myInput" type="text" onkeyup="myFunction()" value=""
                            class="form-control" placeholder="Search Anythings..."></label>
                </label>
                <label><a href="{{ route('deleted-complementary') }}"><button
                            class="dt-button create-new btn btn-primary" tabindex="0" aria-controls="DataTables_Table_0"
                            type="button"><span>Show Deleted
                                Complementary</span></button></a>
                    <button class="dt-button create-new btn btn-primary" tabindex="0" aria-controls="DataTables_Table_0"
                        type="button" data-toggle="modal" data-target="#modals-complemantry"><span><svg
                                xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="feather feather-plus mr-50 font-small-4">
                                <line x1="12" y1="5" x2="12" y2="19"></line>
                                <line x1="5" y1="12" x2="19" y2="12"></line>
                            </svg>Add New</span></button>
                </label>
            </div>
            <!-- <div class="card-body">
                <p class="card-text">

                </p>
            </div> -->
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr align="center">
                            <th>SL</th>
                            <th>Room Type</th>
                            <th>Complemantary</th>
                            <th>Rate</th>
                            <th>Property</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody id="myTable">
                        @forelse($complementary as $key => $item)
                            <tr align="center">
                                <td>
                                    <span class="font-weight-bold">{{ ++$key }}</span>
                                </td>
                                <td>
                                    <span class="font-weight-bold">{{ $item->room_type }}</span>
                                </td>
                                <td>
                                    <span class="font-weight-bold">{{ $item->name }}</span>
                                </td>
                                <td><span class="badge badge-pill badge-light-success mr-1">{{ $item->rate }}</span>
                                </td>
                                <td>
                                    <span class="font-weight-bold">{{ $item->property->name }}</span>
                                </td>
                                <td>
                                    <div class="d-flex justify-content-center">
                                        <div style="margin-left: 7px">
                                            <a type="button" data-toggle="modal"
                                                data-target="#modals-edit-complementary{{ $item->id }}"
                                                class="btn btn-primary btn-sm mr-1" type="button">
                                                <i class="fa fa-edit"></i>
                                            </a>
                                        </div>
                                        <button onclick="deleteData({{ $item->id }})" class="btn btn-danger btn-sm">
                                            <i class="fa fa-trash"></i>
                                        </button>
                                        <form style="display: none" id="delete-form-{{ $item->id }}"
                                            action="{{ route('complementary.destroy',$item->id) }}"
                                            method="POST">
                                            @method('delete')
                                            @csrf
                                        </form>
                                    </div>
                                    {{-- Complementary edit Modal Start --}}
                                    <div class="modal modal-slide-in fade text-left"
                                        id="modals-edit-complementary{{ $item->id }}">
                                        <div class="modal-dialog sidebar-sm">
                                            <form class="add-new-record modal-content pt-0" method="POST"
                                                action="{{ route('complementary.update',$item->id) }}">
                                                @csrf
                                                @method('put')
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">×</button>
                                                <div class="modal-header mb-1">
                                                    <h5 class="modal-title" id="exampleModalLabel">Update Complementary
                                                    </h5>
                                                </div>

                                                <div class="modal-body flex-grow-1">
                                                    <div class="form-group position-relative">
                                                        <label for="customer-country" class="form-label">Room
                                                            Type</label>
                                                        <select class="form-control select2" id="" name="room_type"
                                                            required>
                                                            <option value="Single" @if ($item->room_type=='Single')
                                                                selected
                        @endif>Single</option>
                        <option value="Double" @if ($item->room_type=='Double') selected
                            @endif>Double</option>
                        <option value="Twin beds" @if ($item->room_type=='Twin beds')
                            selected
                            @endif>Twin beds</option>
                        <option value="Quad" @if ($item->room_type=='Quad') selected
                            @endif>Quad</option>
                        <option value="Queen" @if ($item->room_type=='Queen') selected
                            @endif>Queen</option>
                        <option value="King" @if ($item->room_type=='King') selected
                            @endif>King</option>
                        <option value="Triple" @if ($item->room_type=='Triple') selected
                            @endif>Triple</option>
                        <option value="Double Twin" @if ($item->room_type=='Double
                            Twin') selected
                            @endif">Double Twin</option>
                        <option value="Murphy bed" @if ($item->room_type=='Murphy bed')
                            selected
                            @endif>Murphy bed</option>
                        <option value="Adjoining rooms" @if ($item->
                            room_type=='Adjoining rooms') selected
                            @endif>Adjoining rooms</option>
                            </select>
            </div>
            <div class="form-group">
                <label class="form-label" for="floor_name">Complementary</label>
                <input type="text" name="name" class="form-control dt-full-name" id="bed_name"
                    value="{{ $item->name }}" placeholder="" required />
            </div>
            <div class="form-group">
                <label class="form-label" for="floor_name">Rate</label>
                <input type="text" class="form-control dt-full-name" id="" name="rate" value="{{ $item->rate }}"
                    placeholder="" required />
            </div>
            <div class="form-group">
                <label class="form-label" for="status">Property</label>
                <select class="form-control select2" name="property_id" id="">
                    @forelse($property as $item1 )
                        <option value="{{ $item1->id }}" @if ($item1->
                            id==$item->property_id)selected @endif>
                            {{ $item1->name }}</option>
                    @empty
                        <option value="">Please Add Property First</option>
                    @endforelse
                </select>
            </div>
            <button type="submit" class="btn btn-success data-submit mr-1">Update</button>
            <button type="reset" class="btn btn-outline-secondary" data-dismiss="modal">Cancel</button>
        </div>
        </form>
    </div>
</div>
{{-- Complementary edit Modal end --}}
</td>
</tr>
@empty
<tr align="center">
    <td class="text-danger" colspan="6">No Data Found</td>
</tr>
@endforelse
</tbody>
</table>
{!! $complementary->links() !!}
{{-- Complementary Add Modal end --}}
<div class="modal modal-slide-in fade" id="modals-complemantry" aria-hidden="true">
    <div class="modal-dialog sidebar-lg">
        <div class="modal-content p-0">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">×</button>
            <div class="modal-header mb-1">
                <h5 class="modal-title">
                    <span class="align-middle">Add New</span>
                </h5>
            </div>
            <div class="modal-body flex-grow-1">
                <form action="{{ route('complementary.store') }}" method="POST">
                    @csrf
                    @method('POST')
                    <div class="form-group position-relative">
                        <label for="customer-country" class="form-label">Room Type</label>
                        <select class="form-control select2" id="" name="room_type">
                            <option label="Select Size"></option>
                            <option value="Single">Single</option>
                            <option value="Double">Double</option>
                            <option value="Twin beds">Twin beds</option>
                            <option value="Quad">Quad</option>
                            <option value="Queen">Queen</option>
                            <option value="King">King</option>
                            <option value="Triple">Triple</option>
                            <option value="Double Twin">Double Twin</option>
                            <option value="Murphy bed">Murphy bed</option>
                            <option value="Adjoining rooms">Adjoining rooms</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="customer-contact" class="form-label">Complementary</label>
                        <input type="text" class="form-control" id="" name="name"
                            value="{{ old('name') }}" placeholder="Complementry" />
                    </div>
                    <div class="form-group">
                        <label for="customer-contact" class="form-label">Rate</label>
                        <input type="text" class="form-control" id="rate" name="rate"
                            value="{{ old('rate') }}" placeholder="Rate" />
                    </div>
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
                    <div class="form-group d-flex flex-wrap mt-2">
                        <button type="submit" class="btn btn-success mr-1">Add</button>
                        <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">Cancel</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
{{-- Complementary Add Modal end --}}
</div>
</div>
</div>
</div>
@endsection
