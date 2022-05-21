@extends('layouts.contentLayoutHorizontal')
@yield('title')
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
                <label>
                    <button class="dt-button create-new btn btn-primary" tabindex="0" aria-controls="DataTables_Table_0"
                        type="button" data-toggle="modal" data-target="#modals-add-notice"><span> <i class="fa fa-plus">
                            </i> Add New Notice</span>
                    </button>
                </label>
            </div>
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th class="text-center">SL</th>
                            <th class="text-center">Property</th>
                            <th>Notice Title</th>
                            <th>Body</th>
                            <th>Notice For</th>
                            <th>Publish Date</th>
                            <th>Expire Date</th>
                            <th class="text-center">Actions</th>
                        </tr>
                    </thead>
                    <tbody id="myTable">
                        @forelse ($notice as $key => $item)
                        <tr>
                            <td class="text-center">
                                <span class="font-weight-bold">{{++$key}}</span>
                            </td>
                            <td class="text-center">
                                <span class="font-weight-bold">{{$item->property->name}}</span>
                            </td>
                            <td>
                                <span class="mr-1">{{$item->title}}</span>
                            </td>
                            <td>
                                <span class="mr-1">{{$item->body}}</span>
                            </td>
                            <td>
                                @if ($item->user_role == 1)
                                <span class="mr-1">Admin</span>
                                @elseif ($item->user_role == 2)
                                <span class="mr-1">Manager</span>
                                @else
                                <span class="mr-1">Officer</span>
                                @endif
                            </td>
                            <td>
                                <span class="mr-1">{{date('d-M-y', strtotime($item->start_date))}}</span>
                            </td>
                            <td>
                                @if ($item->expire_date <= Carbon\carbon::yesterday()) <span class="mr-1 text-danger">
                                    {{date('d-M-y', strtotime($item->expire_date))}} | {{('Expired')}}</span>
                                    @else
                                    <span class="mr-1">
                                        {{date('d-M-y', strtotime($item->expire_date))}}</span>
                                    @endif
                            </td>
                            <td class="text-center">
                                <div class="d-flex justify-content-center">
                                    <div style="margin-left: 7px">
                                        <button type="button" class="btn btn-primary btn-sm" data-toggle="modal"
                                            data-target="#modals-edit-notice{{$item->id}}">
                                            <i class="fa fa-edit"></i>
                                        </button>
                                    </div>
                                    <div>
                                        <div style="margin-left: 7px">
                                            <button onclick="deleteData({{$item->id}})" class="btn btn-danger btn-sm">
                                                <i class="fa fa-trash"></i>
                                            </button>
                                            <form style="display: none" id="delete-form-{{$item->id}}"
                                                action="{{route('notice.destroy', $item->id)}}" method="POST">
                                                @method('delete')
                                                @csrf
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                {{-- Notice edit Modal Start --}}
                                <div class="modal modal-slide-in fade" id="modals-edit-notice{{$item->id}}">
                                    <div class="modal-dialog sidebar-sm">
                                        <form class="add-new-record modal-content pt-0"
                                            action="{{route('notice.update', $item->id)}}" method="POST">
                                            @csrf
                                            @method('put')
                                            <button type="button" class="close" data-dismiss="modal"
                                                aria-label="Close">×</button>
                                            <div class="modal-header mb-1">
                                                <h5 class="modal-title" id="exampleModalLabel">Edit Notice</h5>
                                            </div>
                                            <div class="modal-body flex-grow-1 text-left">
                                                <div class="form-group">
                                                    <label for="title">Notice Title</label>
                                                    <input class="form-control" type="text" name="title" id="title"
                                                        placeholder="Notice Title " value="{{$item->title}}">
                                                </div>
                                                <div class="form-group">
                                                    <label for="body">Notice Body</label>
                                                    <textarea class="form-control" name="body" id="body" cols="30"
                                                        rows="2" required
                                                        placeholder="Write SMS Here">{{$item->body}}</textarea>
                                                </div>
                                                <div class="form-group">
                                                    <label for="start_date">Start Date:</label>
                                                    <input type="text" id="start_date" name="start_date"
                                                        class="form-control flatpickr-basic" placeholder="YYYY-MM-DD"
                                                        value="{{$item->start_date}}" />
                                                </div>
                                                <div class="form-group">
                                                    <label for="expire_date">End Date:</label>
                                                    <input type="text" id="expire_date" name="expire_date"
                                                        class="form-control flatpickr-basic" placeholder="YYYY-MM-DD"
                                                        value="{{$item->expire_date}}" />
                                                </div>
                                                <div class="form-group">
                                                    <label class="form-label" for="user_role">Notice For</label>
                                                    <select class="form-control select2" name="user_role" id="user_role"
                                                        required>
                                                        <option value="1">Admin</option>
                                                        <option value="2">Manager</option>
                                                        <option value="3">Officer</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label class="form-label" for="status">Property</label>
                                                    <select class="form-control select2" name="property_id"
                                                        id="property_id" required>
                                                        @forelse ($property as $prop )
                                                        <option value="{{$prop->id}}" @if ($prop->id ==
                                                            $item->country_id) selected @endif >{{$prop->name}}</option>
                                                        @empty
                                                        <option value="">Please Add Property First</option>
                                                        @endforelse
                                                    </select>
                                                </div>
                                                <button type="submit"
                                                    class="btn btn-success data-submit mr-1">Update</button>
                                                <button type="reset" class="btn btn-outline-secondary"
                                                    data-dismiss="modal">Cancel</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                {{-- Notice edit Modal End --}}
                            </td>
                        </tr>
                        @empty
                        <tr align="center">
                            <td class="text-danger" colspan="8"> Please Notice Add First</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
                {!! $notice->links() !!}
                {{-- Notice Add Modal Start --}}
                <div class="modal modal-slide-in fade" id="modals-add-notice">
                    <div class="modal-dialog sidebar-sm">
                        <form class="add-new-record modal-content pt-0" action="{{route('notice.store')}}"
                            method="POST">
                            @csrf
                            @method('POST')
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">×</button>
                            <div class="modal-header mb-1">
                                <h5 class="modal-title" id="exampleModalLabel">Add New Notice</h5>
                            </div>
                            <div class="modal-body flex-grow-1">
                                <div class="form-group">
                                    <label for="title">Notice Title</label>
                                    <input class="form-control" type="text" name="title" id="title"
                                        placeholder="Notice Title " value="{{old('title')}}">
                                </div>
                                <div class="form-group">
                                    <label for="body">Notice Body</label>
                                    <textarea class="form-control" name="body" id="body" cols="30" rows="2" required
                                        placeholder="Write SMS Here">{{old('body')}}</textarea>
                                </div>
                                <div class="form-group">
                                    <label for="start_date">Start Date:</label>
                                    <input type="text" id="start_date" name="start_date"
                                        class="form-control flatpickr-basic" placeholder="YYYY-MM-DD"
                                        value="{{Carbon\carbon::now()}}" />
                                </div>
                                <div class="form-group">
                                    <label for="expire_date">End Date:</label>
                                    <input type="text" id="expire_date" name="expire_date"
                                        class="form-control flatpickr-basic" placeholder="YYYY-MM-DD"
                                        value="{{Carbon\carbon::now()}}" />
                                </div>
                                <div class="form-group">
                                    <label class="form-label" for="user_role">Notice For</label>
                                    <select class="form-control select2" name="user_role" id="user_role" required>
                                        <option value="1">Admin</option>
                                        <option value="2">Manager</option>
                                        <option value="3">Officer</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label class="form-label" for="status">Property</label>
                                    <select class="form-control select2" name="property_id" id="property_id" required>
                                        @forelse ($property as $item )
                                        <option value="{{$item->id}}">{{$item->name}}</option>
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
                {{-- Notice Type Add Modal End --}}
            </div>
        </div>
    </div>
</div>
<script>
    function myFunction() {
$(document).ready(function() {
$("#myInput").on("keyup", function() {
var value = $(this).val().toLowerCase();
$("#myTable tr").filter(function() {
$(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
});
});
});
}

</script>

@endsection
