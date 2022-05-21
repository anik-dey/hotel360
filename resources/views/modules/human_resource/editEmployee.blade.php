@extends('layouts.master')
@section('title', 'New Employee')
@push('css')
    <link rel="stylesheet" type="text/css"
        href="{{ asset('backend/app-assets/css/components.css') }}">
@endpush
@section('content')
<form action="{{ route('employee.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div style="height: 850px">
        <div class="row justify-content-around">
            <div class="col-lg-4 col-sm-12">
                <input type='text' name="id" value="{{ $employee->id }}" hidden>
                <div class="form-group">
                    <label for="fp-default">Joining date</label>
                    <input type="text" id="fp-default" name="joining_date"
                        class="form-control flatpickr-basic flatpickr-input" placeholder="YYYY-MM-DD"
                        value="{{ $employee->joining_date }}" readonly="readonly">
                </div>
            </div>
            <div class="col-lg-4 col-sm-12">
                <div class="form-group">
                    <label for="EmployeeName">Employee Name</label>
                    <input type="text" class="form-control date-mask" placeholder="Employee Name"
                        value="{{ $employee->employee_name }}" name="employee_name" id="employee_name" required>
                </div>
            </div>
            <div class="col-lg-4 col-sm-12">
                <div class="form-group">
                    <label for="fp-default">Date of Birth</label>
                    <input type="text" name="dob" id="fp-default" class="form-control flatpickr-basic flatpickr-input"
                        placeholder="YYYY-MM-DD" value="{{ $employee->dob }}" readonly="readonly">
                </div>
            </div>
            <div class="col-lg-4 col-sm-12">
                <div class="form-group">
                    <label id="EmployeeFatherName">Father Name</label>
                    <input type="text" class="form-control date-mask" placeholder="Name of Father"
                        value="{{ $employee->father_name }}" name="father_name" id="father_name">

                </div>
            </div>
            <div class="col-lg-4 col-sm-12">
                <div class="form-group">
                    <label for="EmployeeMotherName">Mother Name</label>
                    <input type="text" class="form-control date-mask" placeholder="Name of Mother"
                        value="{{ $employee->mother_name }}" name="mother_name" id="mother_name">

                </div>
            </div>
            <div class="col-lg-4 col-sm-12">
                <div class="form-group">
                    <label for="voterIdNumber">National Id Number</label>
                    <input type="number" class="form-control date-mask" placeholder="Voter Id Number"
                        value="{{ $employee->nid }}" name="nid" id="voterIdNumber">

                </div>
            </div>
            <div class="col-lg-4 col-sm-12">
                <div class="form-group">
                    <label for="EmployeeGender">Gender</label>
                    <select class="form-control" id="gender" name="gender" required>
                        <?php $dash = ''; ?>
                        <option value="Male" @if ($employee->gender=='Male') selected
                            @endif>Male</option>
                        <option value="Female" @if ($employee->gender=='Female') selected
                            @endif>Female</option>
                        <option value="Other" @if ($employee->gender=='Other') selected
                            @endif>Other</option>
                    </select>
                </div>
            </div>
            <div class="col-lg-4 col-sm-12">
                <div class="form-group">
                    <label for="activeMobileNumber">Mobile Number</label>
                    <input type="text" class="form-control date-mask" placeholder="Active Mobile Number"
                        name="mobile_number" id="mobile_number" value="{{ $employee->mobile_number }}" required>
                </div>
            </div>
            <div class="col-lg-4 col-sm-12">
                <div class="form-group">
                    <label for="EmployeeAddress">Address</label>
                    <textarea name="address" id="address" cols="2" rows="2" class="form-control date-mask"
                        placeholder="Write Down Full Address">{{ $employee->address }}</textarea>
                </div>
            </div>

        </div>

        <br>

        <span>
            <h5>Uplaod Files</h5>
            <hr>
        </span>

        <div class="row justify-content-around">

            <div class="col-lg-4 col-sm-12">
                <div class="form-group">
                    <label for="designation">Designation</label>
                    <input type="text" class="form-control date-mask" placeholder="Ex. Chairman, President"
                        name="designation" id="designation" value="{{ $employee->designation }}">
                </div>
            </div>

            <div class="col-lg-4 col-sm-12">
                <div class="form-group">
                    <label for="profilePicture">Profile Picture (450 x 570 pixel )</label>
                    <input type="file" class="form-control date-mask" name="profile_pic" id="profile_pic">
                </div>
                <div class="form-group">
                    <img src="{{ asset('employee_picture/' . $employee->profile_pic) }}"
                        class="img-fluid" style=" min-width: 120px; max-width: 120px; max-height: 150px;" />
                </div>
            </div>

            <div class="col-lg-4 col-sm-12">
                <div class="form-group">
                    <label for="signature">Signature</label>
                    <input type="file" class="form-control date-mask" name="signature" id="signature">
                </div>
                <div class="form-group">
                    <img src="{{ asset('employee_signature/' . $employee->signature) }}"
                        class="img-fluid" style=" min-width: 120px; max-width: 120px; max-height: 150px;" />
                </div>
            </div>
        </div>

        <br><br>

        <span>
            <h5>Office Information</h5>
            <hr>
        </span>

        <div class="row justify-content-around">

            <div class="col-lg-3 col-sm-12">
                <div class="form-group">
                    <label for="userRole">User Role</label>
                    <select class="form-control select2" id="user_role" name="user_role"
                        value="{{ old('user_role') }}">
                        <option value="1">Admin</option>
                        <option value="2">Manager</option>
                        <option value="3">Officer</option>
                        <option value="4">Others</option>
                    </select>
                </div>
            </div>

            <div class="col-lg-3 col-sm-12">
                <div class="form-group">
                    <label for="selectBranch">Select Property</label>
                    <select class="form-control select2" name="property_id" id="property_id"
                        value="{{ old('property_id') }}">
                        @forelse($property as $item )
                            <option value="{{ $item->id }}" @if ($item->id==$employee->properties->id) selected
                        @endif>{{ $item->name }}</option>
                    @empty
                        <option value="">Please Add Property First</option>
                        @endforelse
                    </select>
                </div>
            </div>

            <div class="col-lg-2 col-sm-12">
                <div class="form-group">
                    <label for="EmployeeStatus">Employee Status</label>
                    <select class="form-control" id="employee_status" name="employee_status"
                        value="{{ old('employee_status') }}" required>
                        <option value="1" @if ($employee->employee_status==1) selected
                            @endif>Active</option>
                        <option value="0" @if ($employee->employee_status==0) selected
                            @endif>Inactive</option>
                    </select>
                </div>
            </div>

            <div class="col-lg-2 col-sm-12">
                <div class="form-group">
                    <label for="fp-default">Interview date</label>
                    <input type="text" name="interview_date" id="fp-default"
                        class="form-control flatpickr-basic flatpickr-input" placeholder="YYYY-MM-DD"
                        value="{{ $employee->interview_date }}" readonly="readonly">
                </div>
            </div>

            <div class="col-lg-2 col-sm-12">
                <div class="form-group">
                    <label for="securityMoney">Security Money</label>
                    <input type="number" class="form-control date-mask" name="security_money" id="security_money"
                        placeholder="Amount of security Money" value="{{ $employee->security_money }}">

                </div>
            </div>

        </div>

        <br><br>

        <span>
            <h5>Employee Salary Information</h5>
            <hr>
        </span>

        <div class="row justify-content-around">

            <div class="col-lg-2 col-sm-12">
                <div class="form-group">
                    <label for="basicSalary">Basic Salary</label>
                    <input type="number" class="form-control date-mask" placeholder="Basic Amount" name="basic_salary"
                        id="basic_salary" value="{{ $employee->basic_salary }}">
                </div>
            </div>
            <div class="col-lg-2 col-sm-12">
                <div class="form-group">
                    <label for="houseRent">House Rent</label>
                    <input type="number" class="form-control date-mask" placeholder="0" name="house_rent"
                        id="house_rent" value="{{ $employee->house_rent }}">
                </div>
            </div>
            <div class="col-lg-2 col-sm-12">
                <div class="form-group">
                    <label for="mediaclAllowance">Medical Allowance</label>
                    <input type="number" class="form-control date-mask" placeholder="0" name="medical_allowance"
                        id="mediaclAllowance" value="{{ $employee->medical_allowance }}">
                </div>
            </div>
            <div class="col-lg-2 col-sm-12">
                <div class="form-group">
                    <label for="convenience">Convenience</label>
                    <input type="number" class="form-control date-mask" placeholder="0" name="convenience"
                        id="convenience" value="{{ $employee->convenience }}">

                </div>
            </div>
            <div class="col-lg-2 col-sm-12">
                <div class="form-group">
                    <label for="transportAllowance">Transport Allowance</label>
                    <input type="number" class="form-control date-mask" placeholder="0" name="transport_allowance"
                        id="transport_allowance" value="{{ $employee->transport_allowance }}">
                </div>
            </div>
            <div class="col-lg-2 col-sm-12">
                <div class="form-group">
                    <label for="mobileAllowance">Mobile Allowance</label>
                    <input type="number" class="form-control date-mask" placeholder="0" name="mobile_allowance"
                        id="mobileAllowance" value="{{ $employee->mobile_allowance }}">

                </div>
            </div>
        </div>

        <br><br>

        <div class="row justify-content-around">
            <div class="col-lg-6 col-sm-12">
                <div class="form-group">
                    <button type="submit"
                        class="btn btn-primary btn-block waves-effect waves-float waves-light">Submit</button>
                </div>
            </div>
        </div>

    </div>
</form>
@endsection
