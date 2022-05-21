@extends('layouts.contentLayoutHorizontal')
@section('content')
<div class="row" id="table-bordered">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <div class=" col-md-2 mt-1">
                    <h4 class="card-title">Floor List</h4>
                </div>
                <div class="col-md-5 mt-1">
                    <span>Search</span><br>
                    <input id="myInput" type="text" onkeyup="myFunction()" value="" class="form-control"
                        placeholder="Search Anythings...">
                </div>

                <div class="col-md-5 d-flex flex-row justify-content-end" style="margin-top: 2.5rem">
                    <a href="{{ route('deleted-floor') }}"><button
                            class="dt-button create-new btn btn-primary mr-1" tabindex="0"
                            aria-controls="DataTables_Table_0" type="button"><span>Show Delete Floor</span>
                        </button></a>
                    <button class="dt-button create-new btn btn-primary mr-1" tabindex="0"
                        aria-controls="DataTables_Table_0" type="button" data-toggle="modal"
                        data-target="#modals-add-floor"><span><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round"
                                class="feather feather-plus mr-50 font-small-4">
                                <line x1="12" y1="5" x2="12" y2="19"></line>
                                <line x1="5" y1="12" x2="19" y2="12"></line>
                            </svg>Add Floor</span>
                    </button>
                </div>
            </div>
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr align="center">
                            <th>SL</th>
                            <th>Floor Name</th>
                            <th>Property Name</th>
                            <th>Create Time</th>
                            <th>Status</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody id="myTable" align="center">
                        <?php $count =0; ?>
                        @forelse($floor as $key => $item)
                            <tr>
                                <td>
                                    <span class="font-weight-bold">{{ ++$key }}</span>
                                </td>
                                <td>{{ $item->floor_name }}</td>
                                <td>{{ $item->property->name }}</td>
                                <td>{{ Carbon\Carbon::parse($item->created_at)->format('d-M-Y') }}
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
                                        <a type="button" class="btn btn-primary btn-sm mr-1" data-toggle="modal"
                                            data-target="#modals-edit-floor{{ $item->id }}"><i class="fa fa-edit"></i>
                                        </a>
                                        <div style="margin-left: 7px">
                                            <button onclick="deleteData({{ $item->id }})"
                                                class="btn btn-danger btn-sm">
                                                <i class="fa fa-trash"></i>
                                            </button>
                                            <form style="display: none" id="delete-form-{{ $item->id }}"
                                                action="{{ route('floor-list.destroy',$item->id) }}"
                                                method="POST">
                                                @method('delete')
                                                @csrf
                                            </form>
                                        </div>
                                    </div>
                                    {{-- Floor edit Modal Start --}}
                                    <div class="modal modal-slide-in fade text-left"
                                        id="modals-edit-floor{{ $item->id }}">
                                        <div class="modal-dialog sidebar-sm">
                                            <form class="add-new-record modal-content pt-0" method="POST"
                                                action="{{ route('floor-list.update',$item->id) }}">
                                                @csrf
                                                @method('put')
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">×</button>
                                                <div class="modal-header mb-1">
                                                    <h5 class="modal-title" id="exampleModalLabel">Edit Floor</h5>
                                                </div>

                                                <div class="modal-body flex-grow-1">
                                                    <div class="form-group">
                                                        <label class="form-label" for="floor_name">Floor Name</label>
                                                        <input type="text" name="floor_name"
                                                            class="form-control dt-full-name" id="floor_name"
                                                            value="{{ $item->floor_name }}" placeholder="Floor Name"
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
            <div class="form-group">
                <label class="form-label" for="status">Property</label>
                <select class="form-control select2" name="property_id" id="property_id">
                    @forelse($property as $item1 )
                        <option value="{{ $item1->id }}" @if ($item1->
                            id==$item->property_id)selected @endif>
                            {{ $item1->name }}</option>
                    @empty
                        <option value="">Please Add Property First</option>
                    @endforelse
                </select>
            </div>
            <button type="submit" class="btn btn-primary data-submit mr-1">Update</button>
            <button type="reset" class="btn btn-outline-secondary" data-dismiss="modal">Cancel</button>
        </div>
        </form>
    </div>
</div>
{{-- Floor edit Modal End --}}
</td>
</tr>
@empty
<tr>
    <td class="text-danger" colspan="6">No Data Found</td>
</tr>
@endforelse
</tbody>
</table>
{{-- Floor Add Modal Start --}}
<div class="modal modal-slide-in fade" id="modals-add-floor">
    <div class="modal-dialog sidebar-sm">
        <form class="add-new-record modal-content pt-0" action="{{ route('floor-list.store') }}"
            method="POST">
            @csrf
            @method('POST')
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">×</button>
            <div class="modal-header mb-1">
                <h5 class="modal-title" id="exampleModalLabel">Add Floor</h5>
            </div>
            <div class="modal-body flex-grow-1">
                <div class="form-group">
                    <label class="form-label" for="floor_name">Floor Name</label>
                    <input type="text" name="floor_name" class="form-control dt-full-name" id="floor_name"
                        value="{{ old('floor_name') }}" placeholder="Floor Name" required />
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
                <button type="submit" class="btn btn-primary data-submit mr-1">Submit</button>
                <button type="reset" class="btn btn-outline-secondary" data-dismiss="modal">Cancel</button>
            </div>
        </form>

    </div>
</div>
{{-- Floor Add Modal end --}}
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
