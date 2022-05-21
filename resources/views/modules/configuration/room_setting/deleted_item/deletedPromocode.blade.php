@extends('layouts.contentLayoutHorizontal')
@section('content')
<div class="row" id="table-bordered">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <label>
                    <h4 class="card-title">Deleted Promocode List</h4>
                </label>
                <label>
                    <label>Search :</label> <label><input id="myInput" type="text" onkeyup="myFunction()" value=""
                            class="form-control" placeholder="Search Anythings..."></label>
                </label>
                <label><a href="{{ route('promocode.index') }}"><button
                            class="dt-button create-new btn btn-primary" tabindex="0" aria-controls="DataTables_Table_0"
                            type="button"><span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="feather feather-plus mr-50 font-small-4">
                                    <line x1="12" y1="5" x2="12" y2="19"></line>
                                    <line x1="5" y1="12" x2="19" y2="12"></line>
                                </svg>Promocode List</span></button>
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
                            <th>From</th>
                            <th>To</th>
                            <th>Discount</th>
                            <th>Promocode</th>
                            <th>Status</th>
                            <th>Property</th>
                            <th>Deleted By</th>
                            <th>Deleted At</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody id="myTable" align="center">
                        @forelse($promocode as $key => $item)
                            <tr>
                                <td>
                                    <span class="font-weight-bold">{{ ++$key }}</span>
                                </td>
                                <td>
                                    <span class="font-weight-bold">{{ $item->room_type }}</span>
                                </td>
                                <td>
                                    <span
                                        class="font-weight-bold">{{ Carbon\Carbon::parse($item->start_date)->format('d-M-Y') }}</span>
                                </td>
                                <td>
                                    <span
                                        class="font-weight-bold">{{ Carbon\Carbon::parse($item->end_date)->format('d-M-Y') }}</span>
                                </td>
                                <td>
                                    <span class="font-weight-bold">{{ $item->discount }}</span>
                                </td>
                                <td>
                                    <span class="font-weight-bold">{{ $item->code }}</span>
                                </td>
                                @if($item->end_date < Carbon\Carbon::today())<td><span
                                    class="badge badge-pill badge-light-danger mr-1">Expired</span>
                                    </td>
                                @else
                                    <td><span class="badge badge-pill badge-light-primary mr-1">Used</span>
                                    </td>
                                @endif
                                <td>
                                    <span class="font-weight-bold">{{ $item->property->name }}</span>
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
                                        <a href="{{ route('promocode-restore',$item->id) }}"
                                            type="button" class="btn btn-primary btn-sm mr-1" title="restore">
                                            <i class="fas fa-check-square"></i>
                                        </a>
                                        <a onclick="deleteData({{ $item->id }})" class="btn btn-danger btn-sm">
                                            <i class="fa fa-trash"></i>
                                        </a>
                                        <form id="delete-form-{{ $item->id }}"
                                            action="{{ route('promocode-force-delete',$item->id) }}"
                                            method="POST" style="display: none;">
                                            @method('DELETE')
                                            {{ csrf_field() }}
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @empty
                            <tr align="center">
                                <td class="text-danger" colspan="11">Opps! No Data Found</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
                {!! $promocode->links() !!}
            </div>
        </div>
    </div>
</div>
@endsection
