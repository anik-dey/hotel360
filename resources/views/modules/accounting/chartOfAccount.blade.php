@extends('layouts.master')
@section('title', 'Chart of Account')
@section('content')
<div class="row" id="table-bordered">
    <div class="col-12">
        <div class="card">
            <div class="card-header d-flex flex-row justify-content-around align-items-center">
                <span>Search :</span>
                <div class="col-lg-4 col-sm-12 mt-1 mobile_flex">
                    <input id="myInput" type="text" onkeyup="myFunction()" value="" class="form-control"
                        placeholder="Search Anythings...">
                </div>
                <div class="col-lg-4 col-sm-12 mt-1">
                    <button class="dt-button create-new btn btn-primary" tabindex="0" aria-controls="DataTables_Table_0"
                        type="button" data-toggle="modal" data-target="#modals-add-chartOfAccount"><span><i
                                class="fa fa-plus"></i> Add New
                            Account</span>
                    </button>
                </div>
            </div>
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>SL</th>
                            <th>AC No</th>
                            <th>Name</th>
                            <th>Property</th>
                            <th>Opening Balance</th>
                            <th>Deposit</th>
                            <th>Withdraw</th>
                            <th>Balance</th>
                            <th class="text-center">Actions</th>
                        </tr>
                    </thead>
                    <tbody id="myTable">
                        @forelse ($chartOfAccount as $key => $item)
                        <tr>
                            <td>
                                <span class="font-weight-bold">{{++$key}}</span>
                            </td>
                            <td>
                                <span class="font-weight-bold">{{$item->account_no}}</span>
                            </td>
                            <td>
                                <span class="font-weight-bold">{{$item->name}}</span>
                            </td>
                            <td>
                                <span class="font-weight-bold">{{$item->property->name}}</span>
                            </td>
                            <td>
                                <span class="font-weight-bold">{{$item->opening_balance}}</span>
                            </td>
                            <td>
                                <span class="font-weight-bold">{{$item->deposit}}</span>
                            </td>
                            <td>
                                <span class="font-weight-bold">{{$item->withdraw}}</span>
                            </td>
                            <td>
                                <span class="font-weight-bold">{{$item->balance}}</span>
                            </td>
                            <td>
                                <div class="d-flex justify-content-center">
                                    <div style="margin-left: 7px">
                                        <button type="button" class="btn btn-primary btn-sm" data-toggle="modal"
                                            data-target="#modals-edit-chartOfAccount-{{$item->id}}">
                                            <i class="fa fa-edit"></i>
                                        </button>
                                    </div>
                                    <div>
                                        <div style="margin-left: 7px">
                                            <button onclick="deleteData({{ $item->id }})" class="btn btn-danger btn-sm">
                                                <i class="fa fa-trash"></i>
                                            </button>
                                            <form style="display: none" id="delete-form-{{ $item->id }}"
                                                action="{{route('chart-of-account.destroy',$item->id)}}" method="POST">
                                                @method('delete')
                                                @csrf
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                {{-- Chart Of Account Edit Modal Start --}}
                                <div class="modal modal-slide-in fade" id="modals-edit-chartOfAccount-{{$item->id}}">
                                    <div class="modal-dialog sidebar-sm">
                                        <form class="add-new-record modal-content pt-0"
                                            action="{{route('chart-of-account.update', $item->id)}}" method="POST">
                                            @csrf
                                            @method('put')
                                            <button type="button" class="close" data-dismiss="modal"
                                                aria-label="Close">×</button>
                                            <div class="modal-header mb-1">
                                                <h5 class="modal-title" id="exampleModalLabel">Add New Account</h5>
                                            </div>
                                            <div class="modal-body flex-grow-1">
                                                <div class="form-group">
                                                    <label for="account_no">Account No</label>
                                                    <input class="form-control" type="number" name="account_no"
                                                        id="account_no" placeholder="Account number"
                                                        value="{{$item->account_no}}" required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="name">Account Name</label>
                                                    <input class="form-control" type="text" name="name" id="name"
                                                        placeholder="Account name" value="{{$item->name}}" required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="opening_balance">Opening Balance</label>
                                                    <input class="form-control" type="number" name="opening_balance"
                                                        id="opening_balance" placeholder="Opening Balance"
                                                        value="{{$item->opening_balance}}">
                                                </div>
                                                <div class="form-group">
                                                    <label for="parent_ac_id">Parent Account</label>
                                                    <select class="form-control select2" name="parent_ac_id"
                                                        id="parent_ac_id">
                                                        <option label="Please Select"></option>
                                                        @forelse ($parent_account as $acc)
                                                        @if ($item->parent_ac_id != '')
                                                        <option value="{{$acc->id}}" @if ($acc->id==$item->parent_ac_id)
                                                            selected
                                                            @endif>{{$acc->name}}</option>
                                                        @else
                                                        @endif
                                                        @empty
                                                        <option value="">Please Add Account First</option>
                                                        @endforelse
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label for="status">Status</label>
                                                    <select class="form-control select2" name="status" id="status">
                                                        <option value="1" @if ($item->status === '1') selected
                                                            @endif>Active</option>
                                                        <option value="0" @if ($item->status === '0') selected
                                                            @endif>Inactive</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label class="form-label" for="status">Property</label>
                                                    <select class="form-control select2" name="property_id"
                                                        id="property_id" required>
                                                        @forelse ($property as $prop )
                                                        <option value="{{$prop->id}}" @if ($item->property_id ===
                                                            $prop->id) selected @endif>{{$prop->name}}</option>
                                                        @empty
                                                        <option value="">Please Add Property First</option>
                                                        @endforelse
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
                                {{-- Chart Of Account Edit Modal End --}}
                            </td>
                        </tr>
                        @empty
                        <tr align="center">
                            <td class="text-danger" colspan="9">Please Add Account First</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>

            {{-- Chart Of Account Add Modal Start --}}
            <div class="modal modal-slide-in fade" id="modals-add-chartOfAccount">
                <div class="modal-dialog sidebar-sm">
                    <form class="add-new-record modal-content pt-0" action="{{route('chart-of-account.store')}}"
                        method="POST">
                        @csrf
                        @method('POST')
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">×</button>
                        <div class="modal-header mb-1">
                            <h5 class="modal-title" id="exampleModalLabel">Add New Account</h5>
                        </div>
                        <div class="modal-body flex-grow-1">
                            <div class="form-group">
                                <label for="account_no">Account No</label>
                                <input class="form-control" type="number" name="account_no" id="account_no"
                                    placeholder="Account number" value="{{old('account_no')}}" required>
                            </div>
                            <div class="form-group">
                                <label for="name">Account Name</label>
                                <input class="form-control" type="text" name="name" id="name" placeholder="Account name"
                                    value="{{old('name')}}" required>
                            </div>
                            <div class="form-group">
                                <label for="opening_balance">Opening Balance</label>
                                <input class="form-control" type="number" name="opening_balance" id="opening_balance"
                                    placeholder="Opening Balance" value="{{0}}">
                            </div>
                            @if ($chartOfAccount->count()>0)
                            <div class="form-group">
                                <label for="parent_ac_id">Parent Account</label>
                                <select class="form-control select2" name="parent_ac_id" id="parent_ac_id">
                                    <option label="Please Select"></option>
                                    @forelse ($chartOfAccount as $item)
                                    <option value="{{$item->id}}">{{$item->name}}</option>
                                    @empty
                                    <option value="">Please Add Account First</option>
                                    @endforelse
                                </select>
                            </div>
                            @endif
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
                            <button type="reset" class="btn btn-outline-secondary" data-dismiss="modal">Cancel</button>
                        </div>
                    </form>
                </div>
            </div>
            {{-- Chart Of Account Add Modal End --}}
        </div>
    </div>
</div>
@endsection
