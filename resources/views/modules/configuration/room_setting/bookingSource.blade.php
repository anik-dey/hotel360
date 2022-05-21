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
                <label><a href="{{ route('deleted-booking-source') }}"><button
                            class="dt-button create-new btn btn-primary" type="button"><span>
                                Show Deleted Booking Source</span></button></a>
                    <button class="dt-button create-new btn btn-primary" type="button" data-toggle="modal"
                        data-target="#modals-booking-source"><span><i class="fa fa-plus"></i> Add
                            New</span></button>
                </label>
            </div>
            <div class="table-responsive">
                <table class="table table-bordered table-sm">
                    <thead>
                        <tr>
                            <th class="text-center">SL</th>
                            <th>Name / Company</th>
                            <th>Phone</th>
                            <th>Email</th>
                            <th>Address</th>
                            <th>Commission Type</th>
                            <th>Commission Rate</th>
                            <th>Total Balance</th>
                            <th>Paid Amount</th>
                            <th>Due Amount</th>
                            <th>Property</th>
                            <th class="text-center">Actions</th>
                        </tr>
                    </thead>
                    <tbody id="myTable">
                        @forelse($bookingSource as $key => $item)
                            <tr>
                                <td class="text-center">
                                    <span class="font-weight-bold">{{ ++$key }}</span>
                                </td>
                                <td>
                                    <span class="font-weight-bold">{{ $item->name }}</span>
                                </td>
                                <td><span>{{ $item->phone }}</span></td>
                                <td><span>{{ $item->email }}</span></td>
                                <td><span>{{ $item->address }}</span></td>
                                <td><span>{{ ucfirst( $item->commission_type) }}</span></td>
                                <td><span>{{ $item->commission_rate }}</span> </td>
                                <td>
                                    <span class="font-weight-bold">0</span>
                                </td>
                                <td>
                                    <span class="font-weight-bold">0</span>
                                </td>
                                <td><span>0</span>
                                </td>
                                <td><span>{{ $item->property->name }}</span>
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
                                                    action="{{ route('booking-source.destroy',$item->id) }}"
                                                    method="POST">
                                                    @method('delete')
                                                    @csrf
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    {{-- Booking Source Edit Modal Start --}}
                                    <div class="modal modal-slide-in fade" id="modals-booking-edit{{ $item->id }}"
                                        aria-hidden="true">
                                        <div class="modal-dialog sidebar-lg">
                                            <div class="modal-content p-0">
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">×</button>
                                                <div class="modal-header mb-1">
                                                    <h5 class="modal-title">
                                                        <span class="align-middle">Add New Booking Source</span>
                                                    </h5>
                                                </div>
                                                <div class="modal-body flex-grow-1 text-left">
                                                    <form
                                                        action="{{ route('booking-source.update', $item->id) }}"
                                                        method="POST">
                                                        @csrf
                                                        @method('put')
                                                        <div class="form-group">
                                                            <label for="name" class="form-label">Name / Company
                                                                Name</label>
                                                            <input type="text" class="form-control" id="name"
                                                                name="name" value="{{ $item->name }}"
                                                                placeholder="Booking Source" required />
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="phone" class="form-label">Phone</label>
                                                            <input type="number" class="form-control" id="phone"
                                                                value="{{ $item->phone }}" name="phone"
                                                                placeholder="Contact Phone No." />
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="email" class="form-label">Email</label>
                                                            <input type="email" class="form-control" id="email"
                                                                value="{{ $item->email }}" name="email"
                                                                placeholder="Email Address" />
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="address" class="form-label">Address</label>
                                                            <input type="text" class="form-control" id="address"
                                                                value="{{ $item->address }}" name="address"
                                                                placeholder="Email Address" />
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="commission_rate" class="form-label">Commission
                                                                Rate</label>
                                                            <input type="number" class="form-control"
                                                                id="commission_rate"
                                                                value="{{ $item->commission_rate }}"
                                                                name="commission_rate" placeholder="Commission Rate" />
                                                        </div>
                                                        <div class="form-group position-relative">
                                                            <label for="commission_type" class="form-label">Commission
                                                                Type</label>
                                                            <select class="form-control" id="commission_type"
                                                                name="commission_type">
                                                                <option value="fixed" @if ($item->commission_type ==
                                                                    "fixed") selected @endif>
                                                                    Fixed</option>
                                                                <option value="percentage" @if ($item->commission_type
                                                                    ==
                                                                    "percentage") selected @endif>Percentage
                                                                </option>
                                                            </select>
                                                        </div>
                                                        <div class="form-group position-relative">
                                                            <label for="property_id" class="form-label">Property</label>
                                                            <select class="form-control select2" id="property_id"
                                                                name="property_id" required>
                                                                <option label="Please Select"></option>
                                                                @foreach($property as $prop )
                                                                    <option value="{{ $prop->id }}" @if($prop->id ==
                                                                        $item->property_id) selected @endif
                                                                        >{{ $prop->name }}
                                                                    </option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                        <div class="form-group d-flex flex-wrap mt-2">
                                                            <button type="submit"
                                                                class="btn btn-primary mr-1">Update</button>
                                                            <button type="button" class="btn btn-outline-secondary"
                                                                data-dismiss="modal">Cancel</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    {{-- Booking Source Edit Modal End --}}
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td class="text-danger text-center" colspan="12">Please Booking Source Add First</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
                {{-- Booking Source Add Modal Start --}}
                <div class="modal modal-slide-in fade" id="modals-booking-source" aria-hidden="true">
                    <div class="modal-dialog sidebar-lg">
                        <div class="modal-content p-0">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">×</button>
                            <div class="modal-header mb-1">
                                <h5 class="modal-title">
                                    <span class="align-middle">Add New Booking Source</span>
                                </h5>
                            </div>
                            <div class="modal-body flex-grow-1">
                                <form action="{{ route('booking-source.store') }}" method="POST">
                                    @csrf
                                    @method('post')
                                    <div class="form-group">
                                        <label for="name" class="form-label">Name / Company Name</label>
                                        <input type="text" class="form-control" id="name" name="name"
                                            value="{{ old('name') }}" placeholder="Booking Source"
                                            required />
                                    </div>
                                    <div class="form-group">
                                        <label for="phone" class="form-label">Phone</label>
                                        <input type="number" class="form-control" id="phone" name="phone"
                                            value="{{ old('phone') }}"
                                            placeholder="Contact Phone No." />
                                    </div>
                                    <div class="form-group">
                                        <label for="email" class="form-label">Email</label>
                                        <input type="email" class="form-control" id="email" name="email"
                                            value="{{ old('email') }}" placeholder=" Email Address" />
                                    </div>
                                    <div class="form-group">
                                        <label for="address" class="form-label">Address</label>
                                        <input type="text" class="form-control" id="address" name="address"
                                            value="{{ old('address') }}"
                                            placeholder="Email Address" />
                                    </div>
                                    <div class="form-group">
                                        <label for="commission_rate" class="form-label">Commission Rate</label>
                                        <input type="number" class="form-control" id="commission_rate"
                                            value="{{ old('commission_rate') }}"
                                            name="commission_rate" placeholder="Commission Rate" />
                                    </div>
                                    <div class="form-group position-relative">
                                        <label for="commission_type" class="form-label">Commission Type</label>
                                        <select class="form-control" id="commission_type" name="commission_type">
                                            <option label="Please Select"></option>
                                            <option value="fixed">Fixed</option>
                                            <option value="percentage">Percentage</option>
                                        </select>
                                    </div>
                                    <div class="form-group position-relative">
                                        <label for="property_id" class="form-label">Property</label>
                                        <select class="form-control select2" id="property_id" name="property_id"
                                            required>
                                            @foreach($property as $item )
                                                <option value="{{ $item->id }}">{{ $item->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group d-flex flex-wrap mt-2">
                                        <button type="submit" class="btn btn-primary mr-1">Add</button>
                                        <button type="button" class="btn btn-outline-secondary"
                                            data-dismiss="modal">Cancel</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- Booking Source Add Modal End --}}
            </div>
        </div>
    </div>
</div>
@endsection
