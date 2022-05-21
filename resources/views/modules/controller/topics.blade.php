@extends('layouts.controllerlayout')
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
                <label><button class="dt-button create-new btn btn-primary" tabindex="0"
                        aria-controls="DataTables_Table_0" type="button" data-toggle="modal"
                        data-target="#modals-add-topics"><span><i class="fa fa-plus"></i> Add New Topics</span></button>
                </label>
            </div>
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th class="text-center">SL</th>
                            <th>Title</th>
                            <th>Details</th>
                            <th>Image</th>
                            <th class="text-center">Status</th>
                            <th class="text-center">Actions</th>
                        </tr>
                    </thead>
                    <tbody id="myTable">
                        <tr>
                            <td class="text-center">
                                <span class="font-weight-bold">1</span>
                            </td>
                            <td>
                                <span class="mr-1">Reservation</span>
                            </td>
                            <td>
                                <span class="mr-1">Details</span>
                            </td>
                            <td>
                                <img src="" alt="">
                            </td>
                            <td align="center"><span class="badge badge-pill badge-light-primary mr-1">Active</span>
                            </td>
                            <td class="text-center">
                                <div class="d-flex justify-content-center">
                                    <div style="margin-left: 7px">
                                        <button type="button" class="btn btn-primary btn-sm" data-toggle="modal"
                                            data-target="#modals-edit-extra_charge">
                                            <i class="fa fa-edit"></i>
                                        </button>
                                    </div>
                                    <div>
                                        <div style="margin-left: 7px">
                                            <button onclick="deleteData()" class="btn btn-danger btn-sm">
                                                <i class="fa fa-trash"></i>
                                            </button>
                                            <form style="display: none" id="delete-form-" action="" method="POST">
                                                @method('delete')
                                                @csrf
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                {{-- Extra Charge edit Modal Start --}}
                                <div class="modal modal-slide-in fade text-left" id="modals-edit-extra_charge">
                                    <div class="modal-dialog sidebar-sm">
                                        <form class="add-new-record modal-content pt-0" method="POST" action="">
                                            @csrf
                                            @method('put')
                                            <button type="button" class="close" data-dismiss="modal"
                                                aria-label="Close">×</button>
                                            <div class="modal-header mb-1">
                                                <h5 class="modal-title" id="exampleModalLabel">Extra Charge</h5>
                                            </div>

                                            <div class="modal-body flex-grow-1">
                                                <div class="form-group">
                                                    <label for="">Extra Charge Name</label>
                                                    <input class="form-control" type="text" name="name" value=""
                                                        required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="charge-name">Rate</label>
                                                    <input class="form-control" type="text" name="rate" value=""
                                                        required>
                                                </div>
                                                <div>
                                                    <label for="charge-name">Note</label>
                                                    <textarea class="form-control" id="exampleFormControlTextarea1"
                                                        rows="5" placeholder="Note" name="note"></textarea>
                                                </div>
                                                <div class="form-group">
                                                    <label class="form-label" for="status">Status</label>
                                                    <select class="form-control select2" name="status" id="">
                                                        <option value="1">Active
                                                        </option>
                                                        <option value="0">Inactive</option>
                                                    </select>
                                                </div>
                                                {{-- <div class="form-group">
                                                    <label class="form-label" for="status">Property</label>
                                                    <select class="form-control select2" name="property_id" id="">
                                                        @forelse ($property as $item1 )
                                                        <option value="{{$item1->id}}" @if ($item1->
                                                id==$item->property_id)selected @endif>
                                                {{$item1->name}}</option>
                                                @empty
                                                <option value="">Please Add Property First</option>
                                                @endforelse
                                                </select>
                                            </div> --}}
                                            <button type="submit"
                                                class="btn btn-success data-submit mr-1">Update</button>
                                            <button type="reset" class="btn btn-outline-secondary"
                                                data-dismiss="modal">Cancel</button>
                                    </div>
                                    </form>
                                </div>
            </div>
            {{-- Extra Charge edit Modal End --}}
            </td>
            </tr>
            </tbody>
            </table>
            {!! $topics->links() !!}
            {{-- Topics Add Modal Start --}}
            <div class="modal modal-slide-in fade" id="modals-add-topics">
                <div class="modal-dialog sidebar-sm">
                    <form class="add-new-record modal-content pt-0" action="{{route('guidelines-topic.store')}}"
                        method="POST" enctype="multipart/form-data">
                        @csrf
                        @method("POST")
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">×</button>
                        <div class="modal-header mb-1">
                            <h5 class="modal-title" id="exampleModalLabel">Add New Topic</h5>
                        </div>
                        <div class="modal-body flex-grow-1">
                            <div class="form-group">
                                <label for="title">Title</label>
                                <input class="form-control" type="text" name="title" value="{{old('title')}}"
                                    placeholder="Title Here" required>
                            </div>
                            <div class="form-group">
                                <label for="details">Details</label>
                                <textarea class="form-control" name="details" cols="10" rows="5"
                                    value="{{old('details')}}" placeholder="Details Here" required></textarea>

                            </div>
                            <div class="form-group">
                                <label for="image">Image</label> <br> <input class="form-control" type="file"
                                    name="image" id="image">
                            </div>
                            <div class="form-group">
                                <label class="form-label" for="status">Status</label>
                                <select class="form-control select2" name="status" id="status">
                                    <option value="1">Active</option>
                                    <option value="0">Inactive</option>
                                </select>
                            </div>
                            <button type="submit" class="btn btn-success data-submit mr-1">Submit</button>
                            <button type="reset" class="btn btn-outline-secondary" data-dismiss="modal">Cancel</button>
                        </div>
                    </form>
                </div>
            </div>
            {{-- Topic Add Modal End --}}
        </div>
    </div>
</div>
@endsection