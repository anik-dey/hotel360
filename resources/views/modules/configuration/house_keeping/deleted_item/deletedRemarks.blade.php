@extends('layouts.contentLayoutHorizontal')
@section('content')
<div class="row" id="table-bordered">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <label>
                    <h4 class="card-title">Remarks</h4>
                </label>
                <label>
                    <label>Search :</label> <label><input id="myInput" type="text" onkeyup="myFunction()" value=""
                            class="form-control" placeholder="Search Anythings..."></label>
                </label>
                <label>
                    <a href="{{ route('remarks.index') }}"><button
                            class="dt-button create-new btn btn-primary" tabindex="0" aria-controls="DataTables_Table_0"
                            type="button" data-toggle="modal" data-target="#remarks-add"><span><svg
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="feather feather-plus mr-50 font-small-4">
                                    <line x1="12" y1="5" x2="12" y2="19"></line>
                                    <line x1="5" y1="12" x2="19" y2="12"></line>
                                </svg>Remarks List</span></button></a>
                </label>
            </div>
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th class="text-center">SL</th>
                            <th>Remarks Name</th>
                            <th>Property</th>
                            <th class="text-center">Status</th>
                            <th class="text-center">Deleted By</th>
                            <th class="text-center">Deleted At</th>
                            <th class="text-center">Actions</th>
                        </tr>
                    </thead>
                    <tbody id="myTable">
                        @forelse($remarks as $key => $item)
                            <tr>
                                <td align="center">
                                    <span class="font-weight-bold">{{ ++$key }}</span>
                                </td>
                                <td>
                                    <span class="badge mr-1">{{ ucfirst($item->name) }}</span>
                                </td>
                                <td>
                                    <span class="badge mr-1">
                                        {{ ucfirst($item->property->name) }}
                                    </span>
                                </td>
                                <td align="center">
                                    @if($item->status == 1)
                                        <span class="badge badge-pill badge-light-primary mr-1">Active</span>
                                    @else
                                        <span class="badge badge-pill badge-light-danger mr-1">Inactive</span>
                                    @endif
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
                                        <a href="{{ route('unit-restore',$item->id) }}"
                                            type="button" class="btn btn-primary btn-sm mr-1" title="restore">
                                            <i class="fas fa-check-square"></i>
                                        </a>
                                        <a onclick="deleteData({{ $item->id }})" class="btn btn-danger btn-sm">
                                            <i class="fa fa-trash"></i>
                                        </a>
                                        <form id="delete-form-{{ $item->id }}"
                                            action="{{ route('unit-force-delete',$item->id) }}"
                                            method="POST" style="display: none;">
                                            @method('DELETE')
                                            {{ csrf_field() }}
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @empty
                            <tr align="center">
                                <td class="text-danger" colspan="7">No Data Found</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
