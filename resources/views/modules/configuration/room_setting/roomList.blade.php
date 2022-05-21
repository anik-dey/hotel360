@extends('layouts.contentLayoutHorizontal')
@section('content')
<div class="row" id="table-bordered">
    <div class="col-12">
        <div class="card">
            <div class="card-header d-flex flex-row">
                <div class="col-sm-6 col-lg-3">
                    <h4 class="card-title">Room List</h4>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <label>Search :</label>
                    <input id="myInput" type="text" onkeyup="myFunction()" value="" class="form-control"
                        placeholder="Search Anythings...">
                </div>
                <div class="col-sm-12 col-lg-6 d-flex justify-content-end mt-1 mr-auto">
                    <a href="{{ route('deleted-room') }}"><button
                            class=" dt-button create-new btn btn-primary btn-rasponsive2 mr-1 mt-1" tabindex="0"
                            aria-controls="DataTables_Table_0" type="button"><span>Show Deleted Room</span>
                        </button></a>
                    <a href="{{ URL::to('configuration/room-settings/room-list/create') }}"><button
                            class=" dt-button create-new btn btn-primary btn-rasponsive2 mr-1 mt-1" tabindex="0"
                            aria-controls="DataTables_Table_0" type="button"><span><svg
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="feather feather-plus mr-50 font-small-4">
                                    <line x1="12" y1="5" x2="12" y2="19"></line>
                                    <line x1="5" y1="12" x2="19" y2="12"></line>
                                </svg>Add New</span>
                        </button></a>
                    <a href="assign-amenities"><button class="dt-button create-new btn btn-primary btn-rasponsive2 mt-1"
                            tabindex="0" aria-controls="DataTables_Table_0" type="button"><span>Assign Room
                                Amenities</span>
                        </button></a>
                </div>
            </div>
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr align="center">
                            <th>SL</th>
                            <th>Room Number</th>
                            <th>Room Type</th>
                            <th>Rate</th>
                            <th>Extra Bed Charge</th>
                            <th>Extra Person Charge</th>
                            <th>Capacity</th>
                            <th>Extra Capacity</th>
                            <th>Floor</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody id="myTable">
                        @forelse($room_lists as $key => $item)
                            <tr align="center">
                                <td>
                                    <span class="font-weight-bold">{{ ++$key }}</span>
                                </td>
                                <td>
                                    <span class="font-weight-bold">{{ $item->room_number }}</span>
                                </td>
                                <td>
                                    <span class="font-weight-bold">{{ $item->room_type }}</span>
                                </td>
                                <td>
                                    <span class="badge badge-pill badge-light-success mr-1">{{ $item->rate }}</span>
                                </td>
                                <td>
                                    <span class="font-weight-bold">{{ $item->bed_ex_charge }}</span>
                                </td>
                                <td>
                                    <span class="font-weight-bold">{{ $item->ex_person_charge }}</span>
                                </td>
                                <td><span
                                        class="badge badge-pill badge-light-primary mr-1">{{ $item->capacity }}</span>
                                </td>
                                <td>
                                    <span class="font-weight-bold">{{ $item->extra_capacity }}</span>
                                </td>
                                <td>
                                    <span class="font-weight-bold">{{ $item->floors->floor_name }}</span>
                                </td>
                                <td>
                                    <div class="d-flex justify-content-center">
                                        <a type="button" class="btn btn-primary btn-sm mr-1"
                                            href="{{ route('room-list.edit', $item->id) }}"><i
                                                class="fa fa-edit"></i>
                                        </a>
                                        <a class="btn btn-danger btn-sm" onclick="deleteData({{ $item->id }})"
                                            class="dropdown-item"><i class="fa fa-trash"></i>
                                        </a>
                                        <form id="delete-form-{{ $item->id }}"
                                            action="{{ route('room-list.destroy',$item->id) }}"
                                            method="POST" style="display: none;">
                                            @method('DELETE')
                                            {{ csrf_field() }}
                                        </form>
                                    </div>

                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td align="center" colspan="10" class="text-danger">Opps No Data Found</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<script>
    // Checked All Checkbox
    function toggle(source) {
        checkboxes = document.getElementsByName('aminities');
        for (var i = 0, n = checkboxes.length; i < n; i++) {
            checkboxes[i].checked = source.checked;
        }

    }

</script>
@endsection
