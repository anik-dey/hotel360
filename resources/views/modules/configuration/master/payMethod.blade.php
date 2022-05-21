@extends('layouts.contentLayoutHorizontal')
@section('content')
<div class="row" id="table-bordered">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <label>
                    <h4 class="card-title">Payment Mathod List</h4>
                </label>
                <label>
                    <label>Search :</label> <label><input id="myInput" type="text" onkeyup="myFunction()" value=""
                            class="form-control" placeholder="Search Anythings..."></label>
                </label>
                <label><a href="{{ route('deleted-pay-method') }}"><button
                            class="dt-button create-new btn btn-primary" tabindex="0" aria-controls="DataTables_Table_0"
                            type="button"><span>Show Deleted Pay
                                Mathod</span></button></a>
                    <button class="dt-button create-new btn btn-primary" tabindex="0" aria-controls="DataTables_Table_0"
                        type="button" data-toggle="modal" data-target="#modals-add-payMethod"><span><svg
                                xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="feather feather-plus mr-50 font-small-4">
                                <line x1="12" y1="5" x2="12" y2="19"></line>
                                <line x1="5" y1="12" x2="19" y2="12"></line>
                            </svg>Add New Pay Mathod</span></button>
                </label>
            </div>
            <!-- <div class="card-body">
                <p class="card-text">

                </p>
            </div> -->
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th class="text-center">SL</th>
                            <th class="text-center">Payment Method</th>
                            <th>Property</th>
                            <th class="text-center">Status</th>
                            <th class="text-center">Actions</th>
                        </tr>
                    </thead>
                    <tbody id="myTable">
                        @forelse($pay_method as $key => $item)
                            <tr>
                                <td align="center">
                                    <span class="font-weight-bold">{{ ++$key }}</span>
                                </td>
                                <td align="center"><span class="mr-1">{{ ucfirst($item->pay_method) }}</span>
                                </td>
                                <td><span class="mr-1">{{ $item->property->name }}</span>
                                </td>
                                @if($item->status == "1")
                                    <td align="center"><a
                                            href="{{ route('pay-method.edit',$item->id) }}"><span
                                                title="click for inactive"
                                                class="badge badge-pill badge-light-primary mr-1">Active</span></a>
                                    </td>
                                @else
                                    <td align="center"><a
                                            href="{{ route('pay-method.edit',$item->id) }}"><span
                                                title="click for active"
                                                class="badge badge-pill badge-light-danger mr-1">Inactive</span></a>
                                    </td>
                                @endif
                                <td class="text-center">
                                    <div class="d-flex justify-content-center">
                                        <!-- <div style="margin-left: 7px">
                                        <button type="button" class="btn btn-primary btn-sm" data-toggle="modal"
                                            data-target="#modals-booking-edit">
                                            <i class="fa fa-edit"></i>
                                        </button>
                                    </div> -->
                                        <div>
                                            <div style="margin-left: 7px">
                                                <button onclick="deleteData({{ $item->id }})"
                                                    class="btn btn-danger btn-sm">
                                                    <i class="fa fa-trash"></i>
                                                </button>
                                                <form style="display: none" id="delete-form-{{ $item->id }}"
                                                    action="{{ route('pay-method.destroy',$item->id) }}"
                                                    method="POST">
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
                                <td colspan="5" class="text-danger">Opps!! No Data Found</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
                {!! $pay_method->links() !!}
                <div class="modal modal-slide-in fade" id="modals-add-payMethod">
                    <div class="modal-dialog sidebar-sm">
                        <form class="add-new-record modal-content pt-0"
                            action="{{ route('pay-method.store') }}" method="POST">
                            @csrf
                            @method('POST')
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">×</button>
                            <div class="modal-header mb-1">
                                <h5 class="modal-title" id="exampleModalLabel">Add New Payment Method</h5>
                            </div>
                            <div class="modal-body flex-grow-1">
                                <div class="form-group">
                                    <label class="form-label" for="status">Select Payment Method</label>
                                    <input class="form-control" type="text" name="pay_method"
                                        value="{{ old('pay_method') }}" placeholder="Pay Method"
                                        required>
                                </div>
                                <div class="form-group">
                                    <label class="form-label" for="status">Status</label>
                                    <select class="form-control select2" name="status" id="status">
                                        <option value="1">Active</option>
                                        <option value="0">Inactive</option>
                                    </select>
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
                                <button type="submit" class="btn btn-success data-submit mr-1">Submit</button>
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
<script>
    function myFunction() {
        $(document).ready(function () {
            $("#myInput").on("keyup", function () {
                var value = $(this).val().toLowerCase();
                $("#myTable tr").filter(function () {
                    $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                });
            });
        });
    }

</script>

@endsection
