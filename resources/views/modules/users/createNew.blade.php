@extends('layouts.master')
@section('title', 'Create New')
@section('content')
<form action="" method="">
    <div style="height: 850px">
        <div class="row justify-content-around">
            <div class="col-lg-4 col-sm-12">
                <div class="form-group">
                    <label for="fp-default">Joining date</label>
                    <input type="text" id="fp-default" class="form-control flatpickr-basic flatpickr-input"
                        placeholder="YYYY-MM-DD" readonly="readonly">
                </div>
            </div>
            <div class="col-lg-4 col-sm-12">
                <div class="form-group">
                    <label for="staffName">Staff Name</label>
                    <input type="text" class="form-control date-mask" placeholder="Input Satff Name" id="staffName">
                </div>
            </div>
            <div class="col-lg-4 col-sm-12">
                <div class="form-group">
                    <label for="fp-default">Date of Birth</label>
                    <input type="text" id="fp-default" class="form-control flatpickr-basic flatpickr-input"
                        placeholder="YYYY-MM-DD" readonly="readonly">
                </div>
            </div>
            <div class="col-lg-4 col-sm-12">
                <div class="form-group">
                    <label id="staffFatherName">Father Name</label>
                    <input type="text" class="form-control date-mask" placeholder="Name of Father" id="staffFatherName">

                </div>
            </div>
            <div class="col-lg-4 col-sm-12">
                <div class="form-group">
                    <label for="staffMotherName">Mother Name</label>
                    <input type="text" class="form-control date-mask" placeholder="Name of Mother" id="staffMotherName">

                </div>
            </div>
            <div class="col-lg-4 col-sm-12">
                <div class="form-group">
                    <label for="voterIdNumber">National Id Number</label>
                    <input type="number" class="form-control date-mask" placeholder="Voter Id Number"
                        id="voterIdNumber">

                </div>
            </div>
            <div class="col-lg-4 col-sm-12">
                <div class="form-group">
                    <label for="staffGender">Gender</label>
                    <select class="form-control" id="staffGender" name="">
                        <option value="">Select</option>
                        <option value="">Male</option>
                        <option value="">Female</option>
                        <option value="">Other</option>
                    </select>
                </div>
            </div>
            <div class="col-lg-4 col-sm-12">
                <div class="form-group">
                    <label for="activeMobileNumber">Mobile Number</label>
                    <input type="text" class="form-control date-mask" placeholder="Active Mobile Number"
                        id="activeMobileNumber">
                </div>
            </div>
            <div class="col-lg-4 col-sm-12">
                <div class="form-group">
                    <label for="staffAddress">Location Number</label>
                    <textarea name="" id="staffAddress" cols="2" rows="2" class="form-control date-mask"
                        placeholder="Write Down Full Address"></textarea>
                </div>
            </div>

        </div>

        <br>

        <span>
            <h5>Uplaod Files</h5>
            <hr>
        </span>

        <div class="row justify-content-around">

            <div class="col-lg-3 col-sm-12">
                <div class="form-group">
                    <label for="designation">Designation</label>
                    <input type="text" class="form-control date-mask" placeholder="Ex. Chairman, President"
                        id="designation">
                </div>
            </div>

            <div class="col-lg-3 col-sm-12">
                <div class="form-group">
                    <label for="profilePicture">Profile Picture (450 x 570 pixel )</label>
                    <input type="file" class="form-control date-mask" name="" id="profilePicture">
                </div>
            </div>

            <div class="col-lg-3 col-sm-12">
                <div class="form-group">
                    <label for="signature">Signature</label>
                    <input type="file" class="form-control date-mask" name="" id="signature">
                </div>
            </div>

            <div class="col-lg-3 col-sm-12">
                <div class="form-group">
                    <label for="publish">Publish</label>
                    <select class="form-control" id="publish" name="">
                        <option value="">Select</option>
                        <option value="">Private</option>
                        <option value="">Public</option>
                    </select>
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
                    <select class="form-control" id="userRole" name="">
                        <option value="">Select</option>
                        <option value="">Others</option>
                        <option value="">Admin</option>
                        <option value="">Manager</option>
                        <option value="">Field Officer</option>
                        <option value="">Owener</option>
                    </select>
                </div>
            </div>

            <div class="col-lg-2 col-sm-12">
                <div class="form-group">
                    <label for="selectBranch">Select Branch</label>
                    <select class="form-control" id="selectBranch" name="">
                        <option value="">Select</option>
                        <option value="">Main Branch</option>
                        <option value="">Uttara</option>
                        <option value="">Gulshan</option>
                        <option value="">Banani</option>
                        <option value="">Dhanmondi</option>
                    </select>
                </div>
            </div>

            <div class="col-lg-2 col-sm-12">
                <div class="form-group">
                    <label for="staffStatus">Staff Status</label>
                    <select class="form-control" id="staffStatus" name="">
                        <option value="">Select</option>
                        <option value="">Active</option>
                        <option value="">Inactive</option>
                    </select>
                </div>
            </div>

            <div class="col-lg-2 col-sm-12">
                <div class="form-group">
                    <label for="fp-default">Interview date</label>
                    <input type="text" id="fp-default" class="form-control flatpickr-basic flatpickr-input"
                        placeholder="YYYY-MM-DD" readonly="readonly">
                </div>
            </div>

            <div class="col-lg-3 col-sm-12">
                <div class="form-group">
                    <label for="securityMoney">Security Money</label>
                    <input type="number" class="form-control date-mask" name="" id="securityMoney"
                        placeholder="Amount of security Money">

                </div>
            </div>

        </div>

        <br><br>

        <span>
            <h5>Staff Salary Information</h5>
            <hr>
        </span>

        <div class="row justify-content-around">

            <div class="col-lg-2 col-sm-12">
                <div class="form-group">
                    <label for="basicSalary">Basic Salary</label>
                    <input type="number" class="form-control date-mask" placeholder="Basic Amount" id="basicSalary">
                </div>
            </div>
            <div class="col-lg-2 col-sm-12">
                <div class="form-group">
                    <label for="houseRent">House Rent</label>
                    <input type="number" class="form-control date-mask" placeholder="0" id="houseRent">
                </div>
            </div>
            <div class="col-lg-2 col-sm-12">
                <div class="form-group">
                    <label for="mediaclAllowance">Medical Allowance</label>
                    <input type="number" class="form-control date-mask" placeholder="0" id="mediaclAllowance">
                </div>
            </div>
            <div class="col-lg-2 col-sm-12">
                <div class="form-group">
                    <label for="convenience">Convenience</label>
                    <input type="number" class="form-control date-mask" placeholder="0" id="convenience">

                </div>
            </div>
            <div class="col-lg-2 col-sm-12">
                <div class="form-group">
                    <label for="transportAllowance">Transport Allowance</label>
                    <input type="number" class="form-control date-mask" placeholder="0" id="transportAllowance">
                </div>
            </div>
            <div class="col-lg-2 col-sm-12">
                <div class="form-group">
                    <label for="mobileAllowance">Mobile Allowance</label>
                    <input type="number" class="form-control date-mask" placeholder="0" id="mobileAllowance">

                </div>
            </div>
        </div>

        <br><br>

        <div class="row justify-content-around">
            <div class="col-lg-6 col-sm-12">
                <div class="form-group">
            <button type="submit" class="btn btn-primary btn-block waves-effect waves-float waves-light">Submit</button>
                </div>
            </div>
        </div>

    </div>
</form>
@endsection
