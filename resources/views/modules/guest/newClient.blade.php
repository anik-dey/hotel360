@extends('layouts.master')
@push('css')
<link rel="stylesheet" type="text/css" href="{{asset('backend/app-assets/css/components.css')}}">
@endpush
@section('content')

<div class="row">
    <div class="col-md-12">
        <form action="{{route('guest-search')}}" method="post">
            @csrf
            <div class="card">
                <div class="card-body">
                    <div class="row d-flex align-items-center">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for=""></label>
                                <select class="form-control" name="search_type" id="" style="height: 60px; margin-top:-5px">
                                    <option value="phone">Phone Number</option>
                                    <option value="nid">National Id</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="search"> <i class="fa fa-search"></i> <input type="text" class="form-control"
                                    placeholder="Search By Mobile Or National Id" name="search_value" required> <button type="submit"
                                    class="btn btn-primary">Search</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
<section id="input-mask-wrapper">
    <form action="{{route('guest.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method("POST")
        <div class="card">
            <div class="card-body">
                <div class="row">
                    @if ($setting->guest_image != '2')
                    <div class="col-md-12 d-flex flex-wrap align-items-center  smallQuery">
                        <div class="col-md-4 col-sm-12 mb-2 pl-3">
                            <div class="webcam" id="my_camera"></div>
                            <input type="text" name="image" class="image-tag" style="display:none" @if (
                                $setting->guest_image == '1') required
                            @endif>

                        </div>
                        <div class="col-md-6 col-sm-12 mb-2">
                            <div class="webImage" id="results">

                            </div>
                        </div>
                        <div class="col-md-2 col-sm-12 mb-2">
                            <input type="button" class="imageCapture" value="Capture" onClick="take_snapshot()" />
                        </div>
                    </div>
                    @endif
                    <div class="col-xl-4 col-md-6 col-sm-12 mb-2">
                        <label for="credit-card">Full Name</label>
                        <input type="text" class="form-control credit-card-mask" placeholder="Full Name"
                            id="credit-card" name="name" @if ($result)
                            value="{{$result->name}}"
                            @endif required>
                    </div>
                    <div class="col-xl-4 col-md-6 col-sm-12 mb-2">
                        <label for="phone-number">Phone Number</label>
                        <div class="input-group input-group-merge">
                            <input type="text" class="form-control phone-number-mask" name="phone" placeholder="Number"
                                id="phone-number" @if ($result)
                            value="{{$result->phone}}"
                            @endif required>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6 col-sm-12 mb-2">
                        <label for="date">Email</label>
                        <input type="email" class="form-control date-mask" placeholder="Email" name="email" id="date" @if ($result)
                            value="{{$result->email}}"
                            @endif>
                    </div>
                    <div class="col-xl-4 col-md-6 col-sm-12 mb-2">
                        <label for="time">Date Of Birth</label>
                        <input type="date" class="form-control time-mask" placeholder="" id="time" name="dob" @if ($result)
                            value="{{$result->dob}}"
                            @endif>
                    </div>
                    <div class="col-xl-4 col-md-6 col-sm-12 mb-2">
                        <label for="numeral-formatting">Profession</label>
                        <input type="text" class="form-control numeral-mask" placeholder="Profession" name="profession"
                            id="numeral-formatting" @if ($result)
                            value="{{$result->profession}}"
                            @endif>
                    </div>
                    @switch($setting)
                    @case($setting->nid =='0')
                    <div class="col-xl-4 col-md-6 col-sm-12 mb-2">
                        <label for="blocks">National ID</label>
                        <input type="text" class="form-control block-mask" placeholder="National ID" name="nid"
                            id="blocks"  @if ($result)
                            value="{{$result->nid}}"
                            @endif>
                    </div>
                    @break
                    @case($setting->nid =='1')
                    <div class="col-xl-4 col-md-6 col-sm-12 mb-2">
                        <label for="blocks">National ID</label>
                        <input type="text" class="form-control block-mask" placeholder="National ID" name="nid"
                            id="blocks" @if ($result)
                            value="{{$result->nid}}"
                            @endif required>
                    </div>
                    @break
                    @case($setting->nid =='2')
                    <div class="col-xl-4 col-md-6 col-sm-12 mb-2" style="display:none">
                        <label for="blocks">National ID</label>
                        <input type="text" class="form-control block-mask" placeholder="National ID" name="nid"
                            id="blocks" @if ($result)
                            value="{{$result->nid}}"
                            @endif>
                    </div>
                    @break
                    @case($setting->nid =='3')
                    @if (Auth()->user()->user_id =='')
                    <div class="col-xl-4 col-md-6 col-sm-12 mb-2">
                        <label for="blocks">National ID</label>
                        <input type="text" class="form-control block-mask" placeholder="National ID" name="nid"
                            id="blocks" @if ($result)
                            value="{{$result->nid}}"
                            @endif>
                    </div>
                    @else
                    <div class="col-xl-4 col-md-6 col-sm-12 mb-2">
                        <label for="blocks">National ID</label>
                        <input type="text" class="form-control block-mask" placeholder="National ID" name="nid"
                            id="blocks" @if ($result)
                            value="{{$result->nid}}"
                            @endif required>
                    </div>
                    @endif

                    @break

                    @default

                    @endswitch
                    <div class="col-xl-4 col-md-6 col-sm-12 mb-2">
                        <div><label for="delimiters">Nationality</label></div>
                        <div class="demo-inline-spacing">
                            <div class="custom-control custom-radio">
                                <input type="radio" id="customRadio1" name="is_native" class="custom-control-input"
                                    checked="" value="0">
                                <label class="custom-control-label" for="customRadio1">Native</label>
                            </div>
                            <div class="custom-control custom-radio">
                                <input type="radio" id="customRadio2" name="is_native" class="custom-control-input"
                                    value="1">
                                <label class="custom-control-label" for="customRadio2">Forienger</label>
                            </div>
                        </div>
                    </div>
                    <div id="div1" class="col-xl-4 col-md-6 col-sm-12 mb-2" style="display:none">
                        <label for="delimiters">Nationality</label>
                        <input type="text" class="form-control delimiter-mask" placeholder="Nationality"
                            name="nationality" id="" @if ($result)
                            value="{{$result->nationality}}"
                            @endif>
                    </div>
                    <div id="div2" class="col-xl-4 col-md-6 col-sm-12 mb-2" style="display:none">
                        <label for="custom-delimiters">Passport No</label>
                        <input type="text" class="form-control custom-delimiter-mask" name="passport_no"
                            placeholder="Passport No" id="" @if ($result)
                            value="{{$result->passport_no}}"
                            @endif>
                    </div>
                    <div id="passport_attach" class="col-xl-4 col-md-6 col-sm-12 mb-2" style="display:none">
                        <label for="custom-delimiters">Passport Attachment</label>
                        <input type="file" class="form-control custom-delimiter-mask" name="passport_attach" id="">
                    </div>
                    <div id="div3" class="col-xl-4 col-md-6 col-sm-12 mb-2" style="display:none">
                        <label for="prefix">Visa/Reg. No</label>
                        <input type="text" class="form-control prefix-mask" placeholder="Visa/Reg. No" name="visa_no"
                            id=""  @if ($result)
                            value="{{$result->visa_no}}"
                            @endif>
                    </div>
                    <div id="visa_attach" class="col-xl-4 col-md-6 col-sm-12 mb-2" style="display:none">
                        <label for="custom-delimiters">Visa Attachment</label>
                        <input type="file" class="form-control custom-delimiter-mask" name="visa_attach"
                            placeholder="Passport No" id="">
                    </div>
                    <div class="form-group col-xl-4 col-md-6 col-sm-12 mb-2">
                        <label>Country</label>
                        <select class=" select2 form-control form-control-lg" name="desh" id="desh" required>
                            <option value="">Select Value</option>
                            @foreach ($country as $item)
                            <option value="{{$item->id}}">{{$item->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group col-xl-4 col-md-6 col-sm-12 mb-2">
                        <label>State</label>
                        <select class="select2 form-control form-control-lg" name="state" id="state">
                            <option label=" "></option>
                        </select>
                    </div>
                    <div class="form-group col-xl-4 col-md-6 col-sm-12 mb-2">
                        <label>City</label>
                        <select class="select2 form-control form-control-lg" name="city" id="city">
                            <option label=" "></option>
                        </select>
                    </div>
                    <div class="form-group col-xl-4 col-md-6 col-sm-12 mb-2">
                        <label>Thana</label>
                        <select class="select2 form-control form-control-lg" name="zipcode" id="zipcode">
                            <option label=" "></option>
                        </select>
                    </div>
                    <div class="form-group col-xl-4 col-md-6 col-sm-12 mb-2">
                        <label class="form-label" for="landmark">Landmark</label>
                        <input type="text" name="landmark" id="landmark" class="form-control"
                            placeholder="house-5,road-9/B,sector-5" aria-describedby="landmark-error"
                            aria-invalid="false" @if ($result)
                            value="{{$result->landmark}}"
                            @endif><span id="landmark-error" class="error"></span>
                    </div>
                    @if (Auth()->user()->user_id == '')
                    <div class="form-group col-xl-4 col-md-6 col-sm-12 mb-2">
                        <label class="form-label" for="landmark">Property</label>
                        <select class="form-control select2" name="property_id" id="property_id"
                            onchange="location =this.value;" required>
                            @forelse($property as $item )
                            <option value="{{ $item->id }}" @if ($setting->property_id == $item->id) selected

                                @endif>{{ $item->name }}</option>
                            @empty
                            <option value="">Please Add Property First</option>
                            @endforelse
                        </select>
                    </div>
                    @else
                    <div class="form-group col-xl-4 col-md-6 col-sm-12 mb-2" style="display:none">
                        <label class="form-label" for="landmark">Property</label>
                        <select class="form-control select2" name="property_id" id="property_id"
                            onchange="location =this.value;" required>
                            @forelse($property as $item )
                            <option value="{{ $item->id }}" @if ($setting->property_id == $item->id) selected

                                @endif>{{ $item->name }}</option>
                            @empty
                            <option value="">Please Add Property First</option>
                            @endforelse
                        </select>
                    </div>
                    @endif
                    <div class="form-group col-xl-12 col-md-6 col-sm-12 mb-2 text-right"><button type="submit"
                            class="btn btn-success waves-effect waves-float waves-light btn btn-block">Add
                            Client</button></div>
                </div>
            </div>
        </div>
    </form>
</section>

@endsection
@push('js')
<script src="https://cdnjs.cloudflare.com/ajax/libs/webcamjs/1.0.25/webcam.min.js"></script>
<script>
    $(document).ready(function() {
    $("#customRadio2").click(function() {
        $("#div1").fadeIn("slow");
        $("#div2").fadeIn("slow");
        $("#passport_attach").fadeIn("slow");
        $("#div3").fadeIn("slow");
        $("#visa_attach").fadeIn("slow");
    });
});
$(document).ready(function() {
    $("#customRadio1").click(function() {
        $("#div1").fadeOut('slow');
        $("#div2").fadeOut("slow");
        $("#passport_attach").fadeOut("slow");
        $("#div3").fadeOut("slow");
        $("#visa_attach").fadeOut("slow");
    });
});
</script>

<script type="text/javascript">
    $(document).ready(function() {
    $('#desh').on('change', function() {
        var idCountry = this.value;
        $("#state").html('');
        $.ajax({
            url: "{{url('api/fetch-states')}}",
            type: "POST",
            data: {
                country_id: idCountry,
                _token: '{{csrf_token()}}'
            },
            dataType: 'json',
            success: function(result) {
                $('#state').html('<option value="">Select State</option>');
                $.each(result.states, function(key, value) {
                    $("#state").append('<option value="' + value
                        .id + '">' + value.name + ' ( ' + value.bn_name +
                        ' ) </option>');
                });
            }
        });
    });
    $('#state').on('change', function() {
        var idState = this.value;
        $("#city").html('');
        $.ajax({
            url: "{{url('api/fetch-cities')}}",
            type: "POST",
            data: {
                state_id: idState,
                _token: '{{csrf_token()}}'
            },
            dataType: 'json',
            success: function(res) {
                $('#city').html('<option value="">Select City</option>');
                $.each(res.cities, function(key, value) {
                    $("#city").append('<option value="' + value
                        .id + '">' + value.name + ' ( ' + value.bn_name +
                        ' ) </option>');
                });
            }
        });
    });
    $('#city').on('change', function() {
        var idState = this.value;
        $("#zipcode").html('');
        $.ajax({
            url: "{{url('api/fetch-thanas')}}",
            type: "POST",
            data: {
                city_id: idState,
                _token: '{{csrf_token()}}'
            },
            dataType: 'json',
            success: function(res) {
                $('#zipcode').html('<option value="">Select Thana</option>');
                $.each(res.thanas, function(key, value) {
                    $("#zipcode").append('<option value="' + value
                        .id + '">' + value.name + ' ( ' + value.bn_name +
                        ' ) </option>');
                });
            }
        });
    });
});
</script>
@if ($setting->guest_image != '2')
<script language="JavaScript">
    Webcam.set({
    width: 240,
    height: 180,
    image_format: 'jpeg',
    jpeg_quality: 90
});


Webcam.attach('#my_camera');

function take_snapshot() {
    Webcam.snap(function(data_uri) {
        $(".image-tag").val(data_uri);
        document.getElementById('results').innerHTML = '<img src="' + data_uri + '"/>';
    });
}
</script>
@endif
@endpush
