@extends('layouts.master')
@section('content')
<section id="input-mask-wrapper">
    <div align="right">
        <a href="{{ route('guest.index') }}"><button
                class="btn btn-primary waves-effect waves-float waves-light">Previous Page</button></a>
    </div><br>
    <form>
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-xl-4 col-md-6 col-sm-12 mb-2">
                        <label for="credit-card">Full Name</label>
                        <input type="text" class="form-control credit-card-mask" id="credit-card" name="name"
                            value="{{ $guest->name }}" readonly>
                    </div>
                    <div class="col-xl-4 col-md-6 col-sm-12 mb-2">
                        <label for="phone-number">Phone Number</label>
                        <div class="input-group input-group-merge">
                            <input type="text" class="form-control phone-number-mask" name="phone"
                                value="{{ $guest->phone }}" id="phone-number" readonly>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6 col-sm-12 mb-2">
                        <label for="date">Email</label>
                        <input type="email" class="form-control date-mask" value="{{ $guest->email }}" name="email"
                            readonly>
                    </div>
                    <input type="hidden" name="is_email_verify" value="1">
                    <div class="col-xl-4 col-md-6 col-sm-12 mb-2">
                        <label for="time">Date Of Birth</label>
                        <input type="text" class="form-control time-mask" id="time" name="dob"
                            value="{{ $guest->dob }}" readonly>
                    </div>
                    <div class="col-xl-4 col-md-6 col-sm-12 mb-2">
                        <label for="numeral-formatting">Profession</label>
                        <input type="text" class="form-control numeral-mask" name="profession"
                            value="{{ $guest->profession }}" id="numeral-formatting" readonly>
                    </div>
                    <div class="col-xl-4 col-md-6 col-sm-12 mb-2">
                        <label for="blocks">National ID</label>
                        <input type="text" class="form-control block-mask" name="nid" value="{{ $guest->nid }}"
                            id="blocks" readonly>
                    </div>

                    <div class="col-xl-4 col-md-6 col-sm-12 mb-2">
                        <div><label for="delimiters">Nationality</label></div>
                        <div class="demo-inline-spacing">
                            <div class="custom-control custom-radio">
                                <input type="radio" id="customRadio1" name="customRadio" class="custom-control-input"
                                    {{ ($guest->is_native == 0 ? ' checked' : '') }}>
                                <label class="custom-control-label" for="customRadio1">Native</label>
                            </div>
                            <div class="custom-control custom-radio">
                                <input type="radio" id="customRadio2" name="customRadio" class="custom-control-input"
                                    value=""
                                    {{ ($guest->is_native == 1 ? ' checked' : '') }}>
                                <label class="custom-control-label" for="customRadio2">Forienger</label>
                            </div>
                        </div>
                    </div>
                    <div id="div1" class="col-xl-4 col-md-6 col-sm-12 mb-2" @if($guest->is_native==0)
                        style="display:none" @endif>
                        <label for="delimiters">Nationality</label>
                        <input type="text" class="form-control delimiter-mask" name="nationality"
                            value="{{ $guest->nationality }}" id="" readonly>
                    </div>
                    <div id="div2" class="col-xl-4 col-md-6 col-sm-12 mb-2" @if($guest->is_native==0)
                        style="display:none" @endif>
                        <label for="custom-delimiters">Passport No</label>
                        <input type="text" class="form-control custom-delimiter-mask" name="passport_no"
                            value="{{ $guest->passport_no }}" id="" readonly>
                    </div>
                    <div id="div3" class="col-xl-4 col-md-6 col-sm-12 mb-2" @if($guest->is_native==0)
                        style="display:none" @endif>
                        <label for="prefix">Visa/Reg. No</label>
                        <input type="text" class="form-control prefix-mask" name="visa_no"
                            value="{{ $guest->visa_no }}" id="" readonly>
                    </div>
                    <div class="form-group col-xl-4 col-md-6 col-sm-12 mb-2">
                        <label>Country</label>
                        <input type="text" class="form-control delimiter-mask" value="{{ $guest->country->name }}"
                            id="" readonly>
                    </div>
                    @if($state != '')
                        <div class="form-group col-xl-4 col-md-6 col-sm-12 mb-2">
                            <label>State</label>
                            <input type="text" class="form-control delimiter-mask" value="{{ $state->name }}" id=""
                                readonly>
                        </div>
                    @else
                        <div class="form-group col-xl-4 col-md-6 col-sm-12 mb-2">
                            <label>State</label>
                            <input type="text" class="form-control delimiter-mask" value="" id="" readonly>
                        </div>
                    @endif
                    <div class="form-group col-xl-4 col-md-6 col-sm-12 mb-2">
                        <label>City</label>
                        @if($city != '')
                            <input type="text" class="form-control delimiter-mask" value="{{ $city->name }}" id=""
                                readonly>
                        @else
                            <input type="text" class="form-control delimiter-mask" value="" id="" readonly>
                        @endif
                    </div>
                    <div class="form-group col-xl-4 col-md-6 col-sm-12 mb-2">
                        <label>Thana</label>
                        @if($thana != '')
                            <input type="text" class="form-control delimiter-mask" value="{{ $thana->name }}" id=""
                                readonly>
                        @else
                            <input type="text" class="form-control delimiter-mask" value="" id="" readonly>
                        @endif
                    </div>
                    <div class="form-group col-xl-4 col-md-6 col-sm-12 mb-2">
                        <label class="form-label" for="landmark">Landmark</label>
                        <input type="text" name="landmark" id="landmark" class="form-control"
                            value="{{ $guest->landmark }}" readonly />
                    </div>
                </div>
            </div>
        </div>
        <button type="submit"
            class=" btn btn-success waves-effect waves-float waves-light btn btn-block">Update</button>
    </form>
</section>
<script>
    $(document).ready(function () {
        $("#customRadio2").click(function () {
            $("#div1").fadeIn("slow");
            $("#div2").fadeIn("slow");
            $("#passport_attach").fadeIn("slow");
            $("#div3").fadeIn("slow");
            $("#visa_attach").fadeIn("slow");
        });
    });
    $(document).ready(function () {
        $("#customRadio1").click(function () {
            $("#div1").fadeOut('slow');
            $("#div2").fadeOut("slow");
            $("#passport_attach").fadeOut("slow");
            $("#div3").fadeOut("slow");
            $("#visa_attach").fadeOut("slow");
        });
    });

</script>
@endsection
