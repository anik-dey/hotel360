@extends('layouts.contentLayoutHorizontal')
@section('content')
<div class="row" id="table-bordered">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <label>
                    <h4 class="card-title">{{$title}}</h4>
                </label>
                <label>
                    <label>Search :</label> <label><input id="myInput" type="text" onkeyup="myFunction()" value=""
                            class="form-control" placeholder="Search Anythings..."></label>
                </label>
                <label><a href="{{route('deleted-status')}}"><button class="dt-button create-new btn btn-primary" tabindex="0"
                        aria-controls="DataTables_Table_0" type="button" ><span>Show Deleted Status</span></button></a>
                    <button class="dt-button create-new btn btn-primary" tabindex="0"
                        aria-controls="DataTables_Table_0" type="button" data-toggle="modal"
                        data-target="#status-add"><span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round"
                                class="feather feather-plus mr-50 font-small-4">
                                <line x1="12" y1="5" x2="12" y2="19"></line>
                                <line x1="5" y1="12" x2="19" y2="12"></line>
                            </svg>Add New Status</span></button>
                </label>
            </div>
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th class="text-center">SL</th>
                            <th>Status Name</th>
                            <th>Color</th>
                            <th>Property</th>
                            <th class="text-center">Status</th>
                            <th class="text-center">Actions</th>
                        </tr>
                    </thead>
                    <tbody id="myTable">
                        @forelse ($status as $key => $item)
                        <tr>
                            <td align="center">
                                <span class="font-weight-bold">{{++$key}}</span>
                            </td>
                            <td><span class="badge mr-1">{{ucfirst($item->name)}}</span>
                            </td>
                            <td>
                                <span class="badge mr-1">
                                    <input type="color" value="{{$item->color}}" disabled>
                                </span>
                            </td>
                            <td>
                                <span class="badge mr-1">
                                    {{$item->property->name}}
                                </span>
                            </td>
                            <td align="center">
                                @if ($item->status == 1)
                                <span class="badge badge-pill badge-light-primary mr-1">Active</span>
                                @else
                                <span class="badge badge-pill badge-light-danger mr-1">Inactive</span>
                                @endif
                            </td>
                            <td>
                                <div class="d-flex justify-content-center">
                                    <div style="margin-left: 7px">
                                        <button type="button" class="btn btn-primary btn-sm" data-toggle="modal"
                                            data-target="#modals-status-edit{{$item->id}}">
                                            <i class="fa fa-edit"></i>
                                        </button>
                                    </div>
                                    <div>
                                        <div style="margin-left: 7px">
                                            <button onclick="deleteData({{ $item->id }})" class="btn btn-danger btn-sm">
                                                <i class="fa fa-trash"></i>
                                            </button>
                                            <form style="display: none" id="delete-form-{{ $item->id }}"
                                                action="{{ route('status.destroy',$item->id) }}" method="POST">
                                                @method('delete')
                                                @csrf
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                {{-- Status Edit Model Start --}}
                                <div class="modal modal-slide-in fade" id="modals-status-edit{{$item->id}}">
                                    <div class="modal-dialog sidebar-sm">
                                        <form class="add-new-record modal-content pt-0"
                                            action="{{route('status.update', $item->id)}}" method="POST">
                                            @csrf
                                            @method('put')
                                            <button type="button" class="close" data-dismiss="modal"
                                                aria-label="Close">×</button>
                                            <div class="modal-header mb-1">
                                                <h5 class="modal-title" id="exampleModalLabel">Add New Unit</h5>
                                            </div>
                                            <div class="modal-body flex-grow-1">
                                                <div class="form-group">
                                                    <label for="property_id" class="form-label">Property</label>
                                                    <select class="form-control select2" id="property_id"
                                                        name="property_id" required>
                                                        <option label="Please Select"></option>
                                                        @foreach ($property as $prop )
                                                        <option value="{{$prop->id}}" @if ($prop->id ==
                                                            $item->property_id) selected @endif>{{$prop->name}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label class="form-label" for="name">Unit Name</label>
                                                    <input type="text" class="form-control dt-full-name"
                                                        id="basic-icon-default-fullname" placeholder="Unit Name Here"
                                                        name="name" value="{{$item->name}}" />
                                                </div>
                                                <div class="form-group">
                                                    <label for="color" class="form-label">Color </label>
                                                    <input type="color" class="form-control form-control-color"
                                                        id="color" name="color" title="Choose your color"
                                                        value="{{$item->color}}">
                                                </div>
                                                <div class="form-group">
                                                    <label class="form-label" for="status">Status</label>
                                                    <select name="status" id="status" class="form-control select2">
                                                        <option value="1" @if ($item->status == 1) selected
                                                            @endif>Active</option>
                                                        <option value="0" @if ($item->status == 0) selected
                                                            @endif>Inactive</option>
                                                    </select>
                                                </div>
                                                <button type="submit"
                                                    class="btn btn-success data-submit mr-1">Submit</button>
                                                <button type="reset" class="btn btn-outline-secondary"
                                                    data-dismiss="modal">Cancel</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                {{-- Status Edit Model End --}}
                            </td>
                        </tr>
                        @empty
                        <tr align="center">
                            <td class="text-danger" colspan="6"> Please Status Add First</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
                {{-- Status Add Model Start --}}
                <div class="modal modal-slide-in fade" id="status-add">
                    <div class="modal-dialog sidebar-sm">
                        <form class="add-new-record modal-content pt-0" action="{{route('status.store')}}"
                            method="POST">
                            @csrf
                            @method('post')
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">×</button>
                            <div class="modal-header mb-1">
                                <h5 class="modal-title" id="exampleModalLabel">Add New Unit</h5>
                            </div>
                            <div class="modal-body flex-grow-1">
                                <div class="form-group">
                                    <label for="property_id" class="form-label">Property</label>
                                    <select class="form-control select2" id="property_id" name="property_id" required>
                                        <option label="Please Select"></option>
                                        @foreach ($property as $item )
                                        <option value="{{$item->id}}">{{$item->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label class="form-label" for="name">Unit Name</label>
                                    <input type="text" class="form-control dt-full-name"
                                        id="basic-icon-default-fullname" placeholder="Unit Name Here" name="name"
                                        value="{{old('name')}}" />
                                </div>
                                <div class="form-group">
                                    <label for="color" class="form-label">Color </label>
                                    <input type="color" class="form-control form-control-color" id="color" name="color"
                                        title="Choose your color" value="{{old('color')}}">
                                </div>
                                <div class="form-group">
                                    <label class="form-label" for="status">Status</label>
                                    <select name="status" id="status" class="form-control select2">
                                        <option value="1">Active</option>
                                        <option value="0">Inactive</option>
                                    </select>
                                </div>
                                <button type="submit" class="btn btn-success data-submit mr-1">Submit</button>
                                <button type="reset" class="btn btn-outline-secondary"
                                    data-dismiss="modal">Cancel</button>
                            </div>
                        </form>
                    </div>
                </div>
                {{-- Status Add Model End --}}
            </div>
        </div>
    </div>
</div>
@endsection
