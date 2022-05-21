@extends('layouts.contentLayoutHorizontal')
@section('content')
<div class="row" id="table-bordered">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <label>
                    <h4 class="card-title">Deleted Booking Source List</h4>
                </label>
                <label>
                    <label>Search :</label> <label><input id="myInput" type="text" onkeyup="myFunction()" value=""
                            class="form-control" placeholder="Search Anythings..."></label>
                </label>
                <label><a href="{{ route('booking-source.index') }}"><button
                            class="dt-button create-new btn btn-primary" type="button"><span><i class="fa fa-plus"></i>
                                Booking Source
                                List</span></button></a>
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
                            <th>Deleted By</th>
                            <th>Deleted At</th>
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
                                <td>
                                    <span class="font-weight-bold">{{ $item->deleted_by }}</span>
                                </td>
                                <td>
                                    <span
                                        class="font-weight-bold">{{ Carbon\Carbon::parse($item->deleted_at)->format('d-M-Y H:i:s') }}</span>
                                </td>
                                <td>
                                    <div class="d-flex justify-content-center">
                                        <a href="{{ route('booking-source-restore',$item->id) }}"
                                            type="button" class="btn btn-primary btn-sm mr-1" title="restore">
                                            <i class="fas fa-check-square"></i>
                                        </a>
                                        <a onclick="deleteData({{ $item->id }})" class="btn btn-danger btn-sm">
                                            <i class="fa fa-trash"></i>
                                        </a>
                                        <form id="delete-form-{{ $item->id }}"
                                            action="{{ route('booking-source-force-delete',$item->id) }}"
                                            method="POST" style="display: none;">
                                            @method('DELETE')
                                            {{ csrf_field() }}
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td class="text-danger text-center" colspan="14">Please Booking Source Add First</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
