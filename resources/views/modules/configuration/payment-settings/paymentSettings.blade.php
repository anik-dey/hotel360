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
                <label><button class="dt-button create-new btn btn-primary" tabindex="0"
                        aria-controls="DataTables_Table_0" type="button" data-toggle="modal"
                        data-target="#modals-add-bed"><span><i class="fa fa-plus"></i> Add New Payment</span></button>
                </label>
            </div>
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th class="text-center">SL</th>
                            <th>Property</th>
                            <th>
                                <span class="font-weight-bold">name</span>
                            </th>
                            <th>
                                <span class="font-weight-bold">description</span>
                            </th>
                            <th>
                                <span class="font-weight-bold">API Link</span>
                            </th>
                            <th>
                                <span class="font-weight-bold">User Name</span>
                            </th>
                            <th>
                                <span class="font-weight-bold">API Key</span>
                            </th>
                            <th class="text-center">Status</th>
                            <th class="text-center">Actions</th>
                        </tr>
                    </thead>
                    <tbody id="myTable">
                        @forelse ($paymentSetting as $key => $item)
                        <tr>
                            <td align="center">
                                <span class="font-weight-bold">{{++$key}}</span>
                            </td>
                            <td>
                                <span class=" font-weight-bold">{{$item->property->name}}</span>
                            </td>
                            <td>
                                <span class="font-weight-bold">{{$item->name}}</span>
                            </td>
                            <td>
                                <span class="font-weight-bold">{{$item->description}}</span>
                            </td>
                            <td>
                                <span class="font-weight-bold">{{$item->api}}</span>
                            </td>
                            <td>
                                <span class="font-weight-bold">{{$item->username}}</span>
                            </td>
                            <td>
                                <span class="font-weight-bold">{{$item->key}}</span>
                            </td>
                            <td align="center">
                                @if ($item->status == 1)
                                <span class="badge badge-pill badge-light-primary mr-1">Active</span>
                                @elseif ($item->status == 0)
                                <span class="badge badge-pill badge-light-danger mr-1">Inactive</span>
                                @endif
                            </td>
                            <td>
                                <div class="d-flex justify-content-center">
                                    <div style="margin-left: 7px">
                                        <button type="button" class="btn btn-primary btn-sm" data-toggle="modal"
                                            data-target="#modals-payment-edit{{$item->id}}">
                                            <i class="fa fa-edit"></i>
                                        </button>
                                    </div>
                                    <div>
                                        <div style="margin-left: 7px">
                                            <button onclick="deleteData({{$item->id}})" class="btn btn-danger btn-sm">
                                                <i class="fa fa-trash"></i>
                                            </button>
                                            <form style="display: none" id="delete-form-{{ $item->id }}"
                                                action="{{ route('payment-settings.destroy',$item->id) }}"
                                                method="POST">
                                                @method('delete')
                                                @csrf
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                {{-- Payment Settings Edit Model Start --}}
                                <div class="modal modal-slide-in fade" id="modals-payment-edit{{$item->id}}">
                                    <div class="modal-dialog sidebar-sm">
                                        <form class="add-new-record modal-content pt-0"
                                            action="{{route('payment-settings.update', $item->id)}}" method="POST">
                                            @csrf
                                            @method('put')
                                            <button type="button" class="close" data-dismiss="modal"
                                                aria-label="Close">×</button>
                                            <div class="modal-header mb-1">
                                                <h5 class="modal-title" id="exampleModalLabel">Edit Unit</h5>
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
                                                    <label class="form-label" for="name">Payment Name</label>
                                                    <input type="text" class="form-control dt-full-name"
                                                        id="basic-icon-default-fullname" placeholder="Payment Name Here"
                                                        name="name" value="{{$item->name}}" required />
                                                </div>
                                                <div class="form-group">
                                                    <label class="form-label" for="description">Description</label>
                                                    <textarea class="form-control" name="description" id="description"
                                                        cols="10" rows="10">{{$item->description}}</textarea>
                                                </div>
                                                <div class="form-group">
                                                    <label class="form-label" for="api">API Link</label>
                                                    <input type="text" class="form-control dt-full-name" id="api"
                                                        placeholder="Unit Name Here" name="api" value="{{$item->api}}"
                                                        required />
                                                </div>
                                                <div class="form-group">
                                                    <label class="form-label" for="username">Username</label>
                                                    <input type="text" class="form-control dt-full-name" id="username"
                                                        placeholder="Username Here" name="username"
                                                        value="{{$item->username}}" />
                                                </div>
                                                <div class="form-group">
                                                    <label class="form-label" for="password">Password</label>
                                                    <input type="password" class="form-control dt-full-name"
                                                        id="password" placeholder="Password Here" name="password" />
                                                </div>
                                                <div class="form-group">
                                                    <label class="form-label" for="key">API Key</label>
                                                    <input type="text" class="form-control dt-full-name" id="key"
                                                        placeholder="Api Key Here" name="key" value="{{$item->key}}" />
                                                </div>
                                                <div class="form-group">
                                                    <label class="form-label" for="status">Status</label>
                                                    <select name="status" id="" class="form-control select2">
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
                                {{-- Unit Edit Model End --}}
                            </td>
                        </tr>
                        @empty
                        <tr align="center">
                            <td class="text-danger" colspan="9">Please Add Payment Settings First</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
                {{-- Payment Add Model Start --}}
                <div class="modal modal-slide-in fade" id="modals-add-bed">
                    <div class="modal-dialog sidebar-sm">
                        <form class="add-new-record modal-content pt-0" action="{{route('payment-settings.store')}}"
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
                                    <label class="form-label" for="name">Payment Name</label>
                                    <input type="text" class="form-control dt-full-name"
                                        id="basic-icon-default-fullname" placeholder="Payment Name Here" name="name"
                                        value="{{old('name')}}" required />
                                </div>
                                <div class="form-group">
                                    <label class="form-label" for="description">Description</label>
                                    <textarea class="form-control" name="description" id="description" cols="10"
                                        rows="10">{{old('description')}}</textarea>
                                </div>
                                <div class="form-group">
                                    <label class="form-label" for="api">API Link</label>
                                    <input type="text" class="form-control dt-full-name" id="api"
                                        placeholder="Unit Name Here" name="api" value="{{old('api')}}" required />
                                </div>
                                <div class="form-group">
                                    <label class="form-label" for="username">Username</label>
                                    <input type="text" class="form-control dt-full-name" id="username"
                                        placeholder="Username Here" name="username" value="{{old('username')}}" />
                                </div>
                                <div class="form-group">
                                    <label class="form-label" for="password">Password</label>
                                    <input type="password" class="form-control dt-full-name" id="password"
                                        placeholder="Password Here" name="password" />
                                </div>
                                <div class="form-group">
                                    <label class="form-label" for="key">API Key</label>
                                    <input type="text" class="form-control dt-full-name" id="key"
                                        placeholder="Api Key Here" name="key" value="{{old('key')}}" />
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
                {{-- Unit Add Model End --}}
            </div>
        </div>
    </div>
</div>
@endsection
