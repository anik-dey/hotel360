@extends('layouts.master')
@section('title', 'Wake Up List')
@section('content')
<div class="row" id="table-bordered">
    <div class="col-12">
        <div class="card">
            <div class="card-header d-flex flex-row justify-content-end">

                <div class="col-lg-6 col-sm-12 mt-1 mobile_flex">
                    <label>Search :</label>
                    <input id="myInput" type="text" onkeyup="myFunction()" value="" class="form-control"
                        placeholder="Search Anythings...">
                </div>
                <div class="col-lg-4 col-sm-12 mt-1">
                    <button class="dt-button create-new btn btn-primary mt-2" tabindex="0"
                        aria-controls="DataTables_Table_0" type="button" data-toggle="modal"
                        data-target="#modals-wakeup"><span><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round"
                                class="feather feather-plus mr-50 font-small-4">
                                <line x1="12" y1="5" x2="12" y2="19"></line>
                                <line x1="5" y1="12" x2="19" y2="12"></line>
                            </svg>Add Wake Up</span>
                    </button>
                </div>
            </div>
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th class="text-center">SL</th>
                            <th class="text-center">Date</th>
                            <th class="text-center">Time</th>
                            <th>Remarks</th>
                            <th class="text-center">Privacy</th>
                            <th class="text-center">Status</th>
                            <th class="text-center">Actions</th>
                        </tr>
                    </thead>
                    <tbody id="myTable">
                        @forelse($wakeup as $key => $item)
                            <tr>
                                <td align="center">
                                    <span class="font-weight-bold">{{ ++$key }}</span>
                                </td>
                                <td align="center">
                                    <span
                                        class="font-weight-bold">{{ Carbon\Carbon::parse($item->date)->format('d-M-Y') }}</span>
                                </td>
                                <td align="center">
                                    <span
                                        class="font-weight-bold">{{ \Carbon\Carbon::createFromFormat('H:i:s',$item->time)->format('h:i A') }}</span>
                                </td>
                                <td>
                                    <span class="font-weight-bold">
                                        {{ substr($item->remark, 0, 30) }}..</span>
                                </td>
                                @if($item->is_public=='0')
                                    <td align="center">
                                        <span class="font-weight-bold">Private</span>
                                    </td>
                                @else
                                    <td align="center">
                                        <span class="font-weight-bold">Public</span>
                                    </td>
                                @endif
                                @if($item->status=='0')
                                    <td align="center">
                                        <a href="{{ route('wakeup-list.edit',$item->id ) }}"><span
                                                class="badge badge-pill badge-light-danger mr-1"
                                                title="click to complete">Pending</span></a>
                                    </td>
                                @else
                                    <td align="center">
                                        <a href="{{ route('wakeup-list.edit',$item->id ) }}"><span
                                                class="badge badge-pill badge-light-success mr-1"
                                                title="click to pending">Complete</span></a>
                                    </td>
                                @endif
                                <td class="text-center">
                                    <div class="d-flex justify-content-center">
                                        <div style="margin-left: 7px">
                                            <button type="button" class="btn btn-primary btn-sm" data-toggle="modal"
                                                data-target="#modals-edit-wakeup{{ $item->id }}">
                                                <i class="fa fa-edit"></i>
                                            </button>
                                        </div>
                                        <div>
                                            <div style="margin-left: 7px">
                                                <button onclick="deleteData({{ $item->id }})"
                                                    class="btn btn-danger btn-sm">
                                                    <i class="fa fa-trash"></i>
                                                </button>
                                                <form style="display: none" id="delete-form-{{ $item->id }}"
                                                    action="{{ route('wakeup-list.destroy',$item->id) }}"
                                                    method="POST">
                                                    @method('delete')
                                                    @csrf
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    {{-- Wake Up edit Modal Start --}}
                                    <div class="modal modal-slide-in fade text-left"
                                        id="modals-edit-wakeup{{ $item->id }}">
                                        <div class="modal-dialog sidebar-sm">
                                            <form class="add-new-record modal-content pt-0" method="POST"
                                                action="{{ route('wakeup-list.update',$item->id) }}">
                                                @csrf
                                                @method('put')
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">×</button>
                                                <div class="modal-header mb-1">
                                                    <h5 class="modal-title" id="exampleModalLabel">Wake Up</h5>
                                                </div>
                                                <div>
                                                    <div class="modal-body flex-grow-1">
                                                        <div class="form-group">
                                                            <label class="form-label" for="status">Property</label>
                                                            <select class="form-control " name="property_id" id="">
                                                                @forelse($property as $item1 )
                                                                    <option value="{{ $item1->id }}" @if ($item1->
                                                                        id==$item->property_id)selected @endif>
                                                                        {{ $item1->name }}</option>
                                                                @empty
                                                                    <option value="">Please Add Property First</option>
                                                                @endforelse
                                                            </select>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="customer-contact" class="form-label">Wake Up
                                                                Date</label>
                                                            <input type="date" class="form-control" id=""
                                                                value="{{ $item->date }}" name="date"
                                                                placeholder="" />
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="customer-contact" class="form-label">Wake Up
                                                                Time</label>
                                                            <input type="time" class="form-control"
                                                                id="customer-contact" value="{{ $item->time }}"
                                                                name="time" placeholder="" />
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="customer-contact"
                                                                class="form-label">Remarks</label>
                                                            <textarea class="form-control"
                                                                id="exampleFormControlTextarea1" rows="5" name="remark"
                                                                placeholder="">{{ $item->remark }}</textarea>
                                                        </div>

                                                        <label>
                                                            <div class="demo-inline-spacing">
                                                                <div class="custom-control custom-radio">
                                                                    <input type="radio" id="customRadio1"
                                                                        name="is_public" value="1"
                                                                        class="custom-control-input" {{
                                                                    $item->is_public == 1 ? 'checked': ''}}>
                                                                    <label class="custom-control-label"
                                                                        for="customRadio1">Public</label>
                                                                </div>
                                                            </div>
                                                        </label>
                                                        <label>
                                                            <div class="demo-inline-spacing">
                                                                <div class="custom-control custom-radio">
                                                                    <input type="radio" id="customRadio2"
                                                                        name="is_public" value="0"
                                                                        class="custom-control-input" {{
                                                                    $item->is_public == 0 ? 'checked': ''}} />
                                                                    <label class="custom-control-label"
                                                                        for="customRadio2">Private</label>
                                                                </div>
                                                            </div>
                                                        </label>
                                                    </div>
                                                    <div class="form-group d-flex flex-wrap mt-2">
                                                        <button type="submit"
                                                            class="btn btn-success data-submit mr-1">Update</button>
                                                        <button type="reset" class="btn btn-outline-secondary"
                                                            data-dismiss="modal">Cancel</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    {{-- Wake edit Modal End --}}
                                </td>
                            </tr>
                        @empty
                            <tr align="center">
                                <td colspan="7" class="text-danger">Opps!! No Data Found</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
                {!! $wakeup->links() !!}
                <div class="modal modal-slide-in fade" id="modals-wakeup" aria-hidden="true">
                    <div class="modal-dialog sidebar-lg">
                        <div class="modal-content p-0">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">×</button>
                            <div class="modal-header mb-1">
                                <h5 class="modal-title">
                                    <span class="align-middle">Add Wake Up</span>
                                </h5>
                            </div>
                            <div class="modal-body flex-grow-1">
                                <form action="{{ route('wakeup-list.store') }}" method="post">
                                    @csrf
                                    @method('POST')
                                    <div class="form-group">
                                        <label class="form-label" for="status">Property</label>
                                        <select class="form-control" name="property_id" id="property_id" required>
                                            @forelse($property as $item )
                                                <option value="{{ $item->id }}">{{ $item->name }}</option>
                                            @empty
                                                <option value="">Please Add Property First</option>
                                            @endforelse
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="customer-contact" class="form-label">Wake Up Date</label>
                                        <input type="date" class="form-control" id="customer-contact"
                                            value="{{ old('date') }}" name="date" placeholder=""
                                            required />
                                    </div>
                                    <div class="form-group">
                                        <label for="customer-contact" class="form-label">Wake Up Time</label>
                                        <input type="time" class="form-control" id="customer-contact"
                                            value="{{ old('time') }}" name="time" placeholder=""
                                            required />
                                    </div>
                                    <div class="form-group">
                                        <label for="customer-contact" class="form-label">Remarks</label>
                                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="5"
                                            name="remark" placeholder="">{{ old('remak') }}</textarea>
                                    </div>
                                    <label>
                                        <div class="demo-inline-spacing">
                                            <div class="custom-control custom-radio">
                                                <input type="radio" id="customRadio1" name="is_public" value="1"
                                                    class="custom-control-input" checked="">
                                                <label class="custom-control-label" for="customRadio1">Public</label>
                                            </div>
                                        </div>
                                    </label>
                                    <label>
                                        <div class="demo-inline-spacing">
                                            <div class="custom-control custom-radio">
                                                <input type="radio" id="customRadio2" name="is_public" value="0"
                                                    class="custom-control-input">
                                                <label class="custom-control-label" for="customRadio2">Private</label>
                                            </div>
                                        </div>
                                    </label>
                                    <div class="form-group d-flex flex-wrap mt-2">
                                        <button type="submit" class="btn btn-success mr-1">Submit</button>
                                        <button type="button" class="btn btn-outline-secondary"
                                            data-dismiss="modal">Cancel</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
