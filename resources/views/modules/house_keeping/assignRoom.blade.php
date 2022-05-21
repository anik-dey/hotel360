@extends('layouts.master')
@section('title', 'Housekeeper')
@push('css')
<link rel="stylesheet" type="text/css" href="{{asset('backend/app-assets/css/components.css')}}">
@endpush
@section('content')
<div class="row" id="table-border roundeded">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <label>
                    <h4 class="card-title">Assign Room Cleaning</h4><span class="text-danger"><small>To assign room
                            first select
                            room from table</small></span>
                </label>
            </div>

            {{-- Room Filter for assgin to housekeeper --}}
            <div class="row mx-1">
                <div class="col-md-3">
                    <div class="input-group mb-3 form-group">
                        <select class="select2 form-select form-control">
                            <option selected>Select Housekeeper</option>
                            <option value="1">Eslam</option>
                            <option value="2">Abdullah</option>
                            <option value="3">Rahim</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="input-group mb-3 form-group">
                        <select class="select2 form-select form-control">
                            <option selected>Select Roome Type</option>
                            <option value="1">Single</option>
                            <option value="2">Double</option>
                            <option value="3">Couple</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="input-group mb-3 form-group">
                        <select class="form-select form-control" id="inputGroupSelect01">
                            <option selected>Select Status</option>
                            <option value="1">Ready</option>
                            <option value="2">Booked</option>
                            <option value="3">Block</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-3">
                    <label for="checkAll">Check All</label>
                    <input class="mr-1" type="checkbox" name="checkAll" id="checkAll" onclick="toggle(this)">
                    <label><button class="dt-button create-new btn btn-primary" tabindex="0"
                            aria-controls="DataTables_Table_0" type="button" data-toggle="modal"
                            data-target="#modals-add-bed"><span><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                    height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="feather feather-plus mr-50 font-small-4">
                                    <line x1="12" y1="5" x2="12" y2="19"></line>
                                    <line x1="5" y1="12" x2="19" y2="12"></line>
                                </svg>Assign Room</span></button>
                    </label>
                </div>
            </div>
            <div class="row mb-5 mx-1">
                <div class="col-lg-2  mt-2">
                    <div class="border rounded d-flex flex-column text-center pt-2">
                        <div>
                            <input type="checkbox" name="room-assign" id="ready">
                        </div>
                        <div>
                            <label for="room-assign">Room No. 101</label>
                            <p>Ready</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2  mt-2">
                    <div class="border rounded d-flex flex-column text-center pt-2">
                        <div>
                            <input type="checkbox" name="room-assign" id="booked">
                        </div>
                        <div>
                            <label for="room-assign">Room No. 102</label>
                            <p>Booked</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 mt-2">
                    <div class="border rounded d-flex flex-column text-center pt-2">
                        <div>
                            <input type="checkbox" name="room-assign" id="ready">
                        </div>
                        <div>
                            <label for="room-assign">Room No. 103</label>
                            <p>Ready</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 mt-2">
                    <div class="border rounded d-flex flex-column text-center pt-2">
                        <div>
                            <input type="checkbox" name="room-assign" id="booked">
                        </div>
                        <div>
                            <label for="room-assign">Room No. 104</label>
                            <p>Booked</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2  mt-2">
                    <div class="border rounded d-flex flex-column text-center pt-2">
                        <div>
                            <input type="checkbox" name="room-assign" id="ready">
                        </div>
                        <div>
                            <label for="room-assign">Room No. 105</label>
                            <p>Ready</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-sm-4 mt-2">
                    <div class="border rounded d-flex flex-column text-center pt-2">
                        <div>
                            <input type="checkbox" name="room-assign" id="ready">
                        </div>
                        <div>
                            <label for="room-assign">Room No. 106</label>
                            <p>Ready</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2  mt-2">
                    <div class="border rounded d-flex flex-column text-center pt-2">
                        <div>
                            <input type="checkbox" name="room-assign" id="ready">
                        </div>
                        <div>
                            <label for="room-assign">Room No. 101</label>
                            <p>Ready</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2  mt-2">
                    <div class="border rounded d-flex flex-column text-center pt-2">
                        <div>
                            <input type="checkbox" name="room-assign" id="booked">
                        </div>
                        <div>
                            <label for="room-assign">Room No. 102</label>
                            <p>Booked</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 mt-2">
                    <div class="border rounded d-flex flex-column text-center pt-2">
                        <div>
                            <input type="checkbox" name="room-assign" id="ready">
                        </div>
                        <div>
                            <label for="room-assign">Room No. 103</label>
                            <p>Ready</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 mt-2">
                    <div class="border rounded d-flex flex-column text-center pt-2">
                        <div>
                            <input type="checkbox" name="room-assign" id="booked">
                        </div>
                        <div>
                            <label for="room-assign">Room No. 104</label>
                            <p>Booked</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2  mt-2">
                    <div class="border rounded d-flex flex-column text-center pt-2">
                        <div>
                            <input type="checkbox" name="room-assign" id="ready">
                        </div>
                        <div>
                            <label for="room-assign">Room No. 105</label>
                            <p>Ready</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-sm-4 mt-2">
                    <div class="border rounded d-flex flex-column text-center pt-2">
                        <div>
                            <input type="checkbox" name="room-assign" id="ready">
                        </div>
                        <div>
                            <label for="room-assign">Room No. 106</label>
                            <p>Ready</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    // Checked All Checkbox
function toggle(source) {
    checkboxes = document.getElementsByName('room-assign');
    for (var i = 0, n = checkboxes.length; i < n; i++) {
        checkboxes[i].checked = source.checked;
    }
}
</script>
@endsection