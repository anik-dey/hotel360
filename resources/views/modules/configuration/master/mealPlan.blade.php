@extends('layouts.contentLayoutHorizontal')
@section('content')
<div class="row" id="table-bordered">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <label>
                    <h4 class="card-title">Meal Plan List</h4>
                </label>
                <label>
                    <label>Search :</label> <label><input id="myInput" type="text" onkeyup="myFunction()" value=""
                            class="form-control" placeholder="Search Anythings..."></label>
                </label>
                <label><a href="{{ route('deleted-meal-plan') }}"><button
                            class="dt-button create-new btn btn-primary" tabindex="0" aria-controls="DataTables_Table_0"
                            type="button"><span>Show Deleted Meal
                                Plan</span></button></a>
                    <button class="dt-button create-new btn btn-primary" tabindex="0" aria-controls="DataTables_Table_0"
                        type="button" data-toggle="modal" data-target="#modals-add-meal"><span><svg
                                xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="feather feather-plus mr-50 font-small-4">
                                <line x1="12" y1="5" x2="12" y2="19"></line>
                                <line x1="5" y1="12" x2="19" y2="12"></line>
                            </svg>Add New Meal Plan</span></button>
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
                            <th>Meal Name</th>
                            <th class="text-center">Rate</th>
                            <th>Note</th>
                            <th>Property</th>
                            <th class="text-center">Status</th>
                            <th class="text-center">Actions</th>
                        </tr>
                    </thead>
                    <tbody id="myTable">
                        @forelse($meal as $key => $item)
                            <tr>
                                <td class="text-center">
                                    <span class="font-weight-bold">{{ ++$key }}</span>
                                </td>
                                <td>
                                    <span class="mr-1">{{ $item->name }}</span>
                                </td>
                                <td align="center">
                                    <span class="mr-1">৳</span>
                                    <span class="mr-1">{{ $item->rate }}</span>
                                </td>
                                <td>
                                    <span class="mr-1"> {{ substr($item->note, 0, 30) }}..</span>
                                </td>
                                <td>
                                    <span class="mr-1">{{ $item->property->name }}</span>
                                </td>
                                @if($item->status == "1")
                                    <td align="center"><span title="click for inactive"
                                            class="badge badge-pill badge-light-primary mr-1">Active</span>
                                    </td>
                                @else
                                    <td align="center"><span title="click for active"
                                            class="badge badge-pill badge-light-danger mr-1">Inactive</span>
                                    </td>
                                @endif
                                <td class="text-center">
                                    <div class="d-flex justify-content-center">
                                        <div style="margin-left: 7px">
                                            <button type="button" class="btn btn-primary btn-sm" data-toggle="modal"
                                                data-target="#modals-edit-meal{{ $item->id }}">
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
                                                    action="{{ route('meal-plan.destroy',$item->id) }}"
                                                    method="POST">
                                                    @method('delete')
                                                    @csrf
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    {{-- Meal Plan edit Modal Start --}}
                                    <div class="modal modal-slide-in fade text-left"
                                        id="modals-edit-meal{{ $item->id }}">
                                        <div class="modal-dialog sidebar-sm">
                                            <form class="add-new-record modal-content pt-0" method="POST"
                                                action="{{ route('meal-plan.update',$item->id) }}">
                                                @csrf
                                                @method('put')
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">×</button>
                                                <div class="modal-header mb-1">
                                                    <h5 class="modal-title" id="exampleModalLabel">Edit Floor</h5>
                                                </div>

                                                <div class="modal-body flex-grow-1">
                                                    <div class="form-group">
                                                        <label for="">Meal Name</label>
                                                        <input class="form-control" type="text" name="name"
                                                            value="{{ $item->name }}" required>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="charge-name">Rate</label>
                                                        <input class="form-control" type="text" name="rate"
                                                            value="{{ $item->rate }}" placeholder="Meal Rate"
                                                            required>
                                                    </div>
                                                    <div>
                                                        <label for="charge-name">Note</label>
                                                        <textarea class="form-control" id="exampleFormControlTextarea1"
                                                            rows="5" placeholder="Note"
                                                            name="note">{{ $item->note }}</textarea>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="form-label" for="status">Status</label>
                                                        <select class="form-control select2" name="status" id="">

                                                            <option value="1" @if ($item->status == 1) selected
                        @endif>Active
                        </option>
                        <option value="0" @if ($item->status == 0) selected
                            @endif>Inactive</option>
                            </select>
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
{{-- Meal Plan edit Modal End --}}
</td>
</tr>
@empty
<tr align="center">
    <td colspan="7" class="text-danger">Opps!! No Data Found</td>
</tr>
@endforelse
</tbody>
</table>
{!! $meal->links() !!}
{{-- Meal Plan Add Modal Start --}}
<div class="modal modal-slide-in fade" id="modals-add-meal">
    <div class="modal-dialog sidebar-sm">
        <form class="add-new-record modal-content pt-0" action="{{ route('meal-plan.store') }}"
            method="POST">
            @csrf
            @method("POST")
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">×</button>
            <div class="modal-header mb-1">
                <h5 class="modal-title" id="exampleModalLabel">Add New Meal Plan</h5>
            </div>
            <div class="modal-body flex-grow-1">
                <div class="form-group">
                    <label for="charge-name">Meal Name</label>
                    <input class="form-control" type="text" name="name" value="{{ old('name') }}"
                        placeholder="Meal Name Here" required>
                </div>
                <div class="form-group">
                    <label for="charge-name">Rate</label>
                    <input class="form-control" type="text" name="rate" value="{{ old('rate') }}"
                        placeholder="Meal Rate" required>
                </div>
                <div>
                    <label for="charge-name">Note</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="5" placeholder="Note"
                        name="note">{{ old('note') }}</textarea>
                </div>
                <div class="form-group">
                    <label class="form-label" for="status">Status</label>
                    <select class="form-control select2" name="status" id="status" required>
                        <option value="1">Active</option>
                        <option value="0">Inactive</option>
                    </select>
                </div>
                <div class="form-group">
                    <label class="form-label" for="status">Property</label>
                    <select class="form-control select2" name="property_id" id="property_id" required>
                        @forelse($property as $item )
                            <option value="{{ $item->id }}">{{ $item->name }}</option>
                        @empty
                            <option value="">Please Add Property First</option>
                        @endforelse
                    </select>
                </div>
                <hr>
                <button type="submit" class="btn btn-success data-submit mr-1">Submit</button>
                <button type="reset" class="btn btn-outline-secondary" data-dismiss="modal">Cancel</button>
            </div>
        </form>

    </div>
</div>
{{-- Meal Plan Add Modal End --}}
</div>
</div>
</div>
</div>
<script>
    function toggle(source) {
        checkboxes = document.getElementsByName('rate-type');
        for (var i = 0, n = checkboxes.length; i < n; i++) {
            checkboxes[i].checked = source.checked;
        }
    }


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
