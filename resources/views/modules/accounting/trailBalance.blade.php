@extends('layouts.master')
@section('title', 'Trail Balance')

@section('content')
<form>
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
    <br>
    <div class="row">
        <div class="form-group position-relative col-md-12">
            <button class="btn btn-primary btn-block waves-effect waves-float waves-light">Find</button>
        </div>
    </div>
</form>

@endsection
