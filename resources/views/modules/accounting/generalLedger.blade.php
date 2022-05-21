@extends('layouts.master')
@section('title', 'General Ledger')

@section('content')
<form>
    <div class="row">
        <div class="form-group position-relative col-md-6">
            <label for="customer-country" class="form-label">GL Head</label>
            <select class="form-control select2" id="customer-country" name="customer-country">
                <option>Select</option>
                <option value="Australia">Account Payable</option>
                <option value="Canada">Advance</option>
                <option value="Russia">Audit Fee</option>
                <option value="Saudi Arabia">Bank Interest</option>
                <option value="Singapore">Cash Sale</option>
                <option value="Russia">Credit Sale</option>
                <option value="Saudi Arabia">Devidend</option>
                <option value="Singapore">Entertainment</option>
            </select>
        </div>
        <div class="form-group position-relative col-md-6">
            <label for="customer-country" class="form-label">Transaction Head</label>
            <select class="form-control select2" id="" name="customer-country">
                <option>Select</option>
                <option value="Australia">EBISG-John</option>
                <option value="Canada">IMASH-MAria</option>
                <option value="Russia">ES6-IMHA</option>
                <option value="Saudi Arabia">AFTSR-KL</option>
                <option value="Singapore">IVSDOP-LK45</option>
            </select>
        </div>
    </div>
    <div class="row">
        <div class="form-group position-relative col-md-6">
            <label for="customer-country" class="form-label">From Date</label>
            <input type="date" id="check_in" name="check_in" value=""
                class="form-control flatpickr-basic flatpickr-input" placeholder="YYYY-MM-DD" readonly="readonly">
        </div>
        <div class="form-group position-relative col-md-6">
            <label for="customer-country" class="form-label">To Date</label>
            <input type="date" id="check_in" name="check_in" value=""
                class="form-control flatpickr-basic flatpickr-input" placeholder="YYYY-MM-DD" readonly="readonly">
        </div>
    </div>
    <div class="row">
        <div class="custom-control custom-checkbox">
            <input type="checkbox" class="custom-control-input" id="customCheck2">
            <label class="custom-control-label" for="customCheck2">With Details</label>
        </div>
    </div>
    <br>
    <div class="row">
        <div class="form-group position-relative col-md-12">
            <button class="btn btn-primary btn-block waves-effect waves-float waves-light">Find</button>
        </div>
    </div>
</form>
@endsection