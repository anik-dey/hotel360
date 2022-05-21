@extends('layouts.master')
@section('title', 'Create User')
@section('content')
<form action="{{route('panel-user-store')}}" method="POST">
    @csrf
    <div class="row">
        <div class="col-md-3 mb-1">
            <input type="text" name="employee_id" value="{{$employee_info->id}}" hidden>
            <input type="text" name="name" value="{{$employee_info->employee_name}}" hidden>
            <input type="text" name="userable_id" value="{{$employee_info->property_id}}" hidden>
            <input type="text" name="phone" value="{{$employee_info->mobile_number}}" hidden>
        </div>
        <div class="col-md-6 mb-1">
            <label class="form-label" for="username">Username</label>
            <input type="text" value="{{old('username')}}" name="username" id="username" class="form-control"
                placeholder="johndoe" />
        </div>
        <div class="col-md-3 mb-1">
        </div>
    </div>
    <div class="row">
        <div class="col-md-3 mb-1">
        </div>
        <div class="col-md-6 mb-1">
            <label class="form-label" for="username">Email</label>
            <input type="email" value="{{old('email')}}" name="email" id="email" class="form-control"
                placeholder="johndoe@gmail.com" />
        </div>
        <div class="col-md-3 mb-1">
        </div>
    </div>
    <div class="row">
        <div class="col-md-3 mb-1">
        </div>
        <div class="col-md-6 mb-1">
            <label class="form-label" for="password">Password</label>
            <div class="input-group input-group-merge form-password-toggle">
                <input type="password" name="password" id="password" class="form-control"
                    placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;" />
                <span class="input-group-text cursor-pointer"><i data-feather="eye"></i></span>
            </div>
        </div>
        <div class="col-md-3 mb-1">
        </div>
    </div>
    <div class="row">
        <div class="col-md-3 mb-1">
        </div>
        <div class="col-md-6 mb-1">
            <label class="form-label" for="confirm-password">Confirm Password</label>
            <div class="input-group input-group-merge form-password-toggle">
                <input type="password" name="password_confirmation" id="confirm-password" class="form-control"
                    placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;" />
                <span class="input-group-text cursor-pointer"><i data-feather="eye"></i></span>
            </div>
            <div>
                <span id='message'></span>
            </div>
        </div>
        <div class="col-md-3 mb-1">
        </div>
    </div>
    <br>
    <div class="row">
        <div class="form-group position-relative col-md-3">
        </div>
        <div class="form-group position-relative col-md-6">
            <button type="submit" class="btn btn-success btn-block waves-effect waves-float waves-light">Submit</button>
        </div>
        <div class="form-group position-relative col-md-3">
        </div>
    </div>
</form>
<script>
$('#password, #confirm-password').on('keyup', function() {
    if ($('#password').val() == $('#confirm-password').val()) {
        $('#message').html('Matching').css('color', 'green');
    } else
        $('#message').html('Not Matching').css('color', 'red');
});
</script>
@endsection