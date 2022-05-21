@extends('layouts.contentLayoutHorizontal')
@section('content')
<div class="row" id="table-bordered">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <label>
                    <h4 class="card-title">Deleted Identity Type</h4>
                </label>
                <label>
                    <label>Search :</label> <label><input id="myInput" type="text" onkeyup="myFunction()" value=""
                            class="form-control" placeholder="Search Anythings..."></label>
                </label>
                <label><a href="{{ route('identity-type.index') }}"><button
                            class="dt-button create-new btn btn-primary" tabindex="0" aria-controls="DataTables_Table_0"
                            type="button"><span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="feather feather-plus mr-50 font-small-4">
                                    <line x1="12" y1="5" x2="12" y2="19"></line>
                                    <line x1="5" y1="12" x2="19" y2="12"></line>
                                </svg>Identity Type List</span></button></a>
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
                            <th>Identity Name</th>
                            <th>Property</th>
                            <th class="text-center">Status</th>
                            <th class="text-center">Deleted By</th>
                            <th class="text-center">Deleted At</th>
                            <th class="text-center">Actions</th>
                        </tr>
                    </thead>
                    <tbody id="myTable">
                        @forelse($identity as $key => $item)
                            <tr>
                                <td align="center">
                                    <span class="font-weight-bold">{{ ++$key }}</span>
                                </td>
                                <td><span class="mr-1">{{ ucfirst($item->name) }}</span>
                                </td>
                                <td><span class="mr-1">{{ $item->property->name }}</span>
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
                                <td align="center">
                                    <span class="font-weight-bold">{{ $item->deleted_by }}</span>
                                </td>
                                <td>
                                    <span
                                        class="font-weight-bold">{{ Carbon\Carbon::parse($item->deleted_at)->format('d-M-Y H:i:s') }}</span>
                                </td>
                                <td>
                                    <div class="d-flex justify-content-center">
                                        <a href="{{ route('identity-type-restore',$item->id) }}"
                                            type="button" class="btn btn-primary btn-sm mr-1" title="restore">
                                            <i class="fas fa-check-square"></i>
                                        </a>
                                        <a onclick="deleteData({{ $item->id }})" class="btn btn-danger btn-sm">
                                            <i class="fa fa-trash"></i>
                                        </a>
                                        <form id="delete-form-{{ $item->id }}"
                                            action="{{ route('identity-type-force-delete',$item->id) }}"
                                            method="POST" style="display: none;">
                                            @method('DELETE')
                                            {{ csrf_field() }}
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @empty
                            <tr align="center">
                                <td colspan="7" class="text-danger">Opps!! No Data Found</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
                {!! $identity->links() !!}
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
