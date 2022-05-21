@extends('layouts.master')
@section('title', 'New-Booking')
@push('js')
<script src="http://code.jquery.com/ui/1.11.0/jquery-ui.js"></script>
</script>
<script>
//More Options Click JQuery
$(document).ready(function() {
    $("#more").click(function() {
        $("#div1").fadeIn("slow");
        $("#div2").fadeIn("slow");
        $("#div3").fadeIn("slow");
        $("#div4").fadeIn("slow");
        $("#div5").fadeIn("slow");
        $("#div6").fadeIn("slow");
        $("#btn_check").fadeIn("slow");
        $("#more").hide();
    });
});
</script>
<script type="text/javascript">
//Dynamicallty Dropdown For County State
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
<script>
//Night Calculation JS Depend on Check In And Check Out
$(document).ready(function() {
    $('#check_out').on('change', function() {
        var start = $('#check_in').val();
        var end = $('#check_out').val();
        var d1 = new Date(start);
        var d2 = new Date(end);
        // end - start returns difference in milliseconds
        var diff = (d2 - d1);
        // get days
        var days = diff / 1000 / 60 / 60 / 24;
        if (isNaN(days)) {
            alert("Please Input Check In Date first");
        }
        if (days < 1) {
            alert("Check Out Date Must be Grater than Check In ");
        }
        if (!isNaN(days) && days > 0) {
            var night = (Math.round(days));
            document.getElementById('night').innerHTML = night;
        }

    });
});
</script>
<script>
$(document).ready(function() {
    $('#bookingType').on('change', function() {
        var bookingType = $('#bookingType').val();
        if (bookingType != 'confirm') {
            document.getElementById('btn_check').disabled = true;
            document.getElementById('btn_Reserv').disabled = false;
            document.getElementById('card_title').innerHTML = "Quick Reservasion";
        }
        if (bookingType == 'confirm') {
            document.getElementById('btn_Reserv').disabled = true;
            document.getElementById('btn_check').disabled = false;
            document.getElementById('card_title').innerHTML = "Check In";
        }
    });
});
</script>
@endpush
@section('content')
<section id="input-mask-wrapper">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title" id="card_title">Quick Reservation</h4>
                </div>
                <div class="card-body">
                    <form action="" method="">
                        <div class="row">
                            <div class="col-xl-2 col-md-3 col-sm-4 mb-2">
                                <label for="credit-card">Check-In </label>
                                <input type="date" id="check_in" name="check_in" value=""
                                    class="form-control flatpickr-basic flatpickr-input" placeholder="YYYY-MM-DD"
                                    readonly="readonly">
                            </div>
                            <div class="col-xl-2 col-md-3 col-sm-4 mb-2">
                                <label for="credit-card">Time </label>
                                <input type="text" id="pt-default" class="form-control pickatime picker__input"
                                    placeholder="8:00 AM" readonly="" aria-haspopup="true" aria-readonly="false"
                                    aria-owns="pt-default_root">
                            </div>
                            <div class="col-xl-1 col-md-3 col-sm-4 mb-2">
                                <label for="credit-card">Nights</label>
                                <p class="badge badge-pill badge-light-success mr-1" id="night">0</p>
                            </div>
                            <div class="col-xl-2 col-md-3 col-sm-4 mb-2">
                                <label for="credit-card">Check-Out </label>
                                <input type="date" id="check_out" name="check_out"
                                    class="form-control flatpickr-basic flatpickr-input" placeholder="YYYY-MM-DD"
                                    readonly="readonly">
                            </div>
                            <div class="col-xl-2 col-md-3 col-sm-4 mb-2">
                                <label for="credit-card">Time</label>
                                <input type="text" id="pt-default" class="form-control pickatime picker__input"
                                    placeholder="8:00 AM" readonly="" aria-haspopup="true" aria-readonly="false"
                                    aria-owns="pt-default_root">
                            </div>
                            <div class="col-xl-2 col-md-3 col-sm-4 mb-2">
                                <label for="credit-card">Room(s)</label>
                                <input type="number" class="form-control numeral-mask" placeholder=""
                                    id="numeral-formatting">
                            </div>
                            <div class="col-xl-2 col-md-3 col-sm-4 mb-2">
                                <label for="credit-card">Booking Type</label>
                                <select class="form-control" id="bookingType" name="bookingType">
                                    <option label="Select"></option>
                                    <option value="confirm">Confirm</option>
                                    <option value="inquery">Inquiry</option>
                                    <option value="hold">Hold</option>
                                </select>
                            </div>
                            <div class="col-xl-3 col-md-3 col-sm-4 mb-2">
                                <label for="credit-card">Business Source</label>
                                <select class="form-control select2" id="customer-country" name="customer-country">
                                    <option>Select</option>
                                    <option value="Australia">Booking.com</option>
                                    <option value="Canada">Direct Booking</option>
                                    <option value="Russia">Baz Com</option>
                                    <option value="Saudi Arabia">Hotel Manager</option>
                                    <option value="Singapore">Telephone</option>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-3 col-md-3 col-sm-4 mb-2">
                                <label for="credit-card">Room Type</label>
                                <select class="form-control" id="firstname1" name="customer-country">
                                    <option label="Select"></option>
                                    <option value="Australia">Deluxe Double Room</option>
                                    <option value="Canada">Love Family</option>

                                    <option value="Russia">Double Room</option>
                                    <option value="Russia">Single Room</option>
                                </select>
                            </div>
                            <div class="col-xl-3 col-md-3 col-sm-4 mb-2">
                                <label for="credit-card">Room Rate</label>
                                <select class="form-control" id="lastname1" name="customer-country">
                                    <option label="Select"></option>
                                    <option value="Australia">ABC</option>
                                    <option value="Canada">CBC</option>
                                    <option value="Russia">XYZ</option>
                                </select>
                            </div>
                            <div class="col-xl-2 col-md-3 col-sm-4 mb-2">
                                <label for="credit-card">Room No</label>
                                <select class="form-control select2" id="middlename1" name="customer-country">
                                    <option>Select</option>
                                    <option value="Australia">150</option>
                                    <option value="Canada">245</option>
                                    <option value="Russia">265</option>
                                    <option value="Canada">456</option>
                                    <option value="Russia">496</option>
                                </select>
                            </div>
                            <div class="col-xl-2 col-md-3 col-sm-4 mb-2">
                                <label for="credit-card">Adult</label>
                                <select class="form-control" id="customer-country" name="customer-country">
                                    <option label="Select"></option>
                                    <option value="Australia">1</option>
                                    <option value="Canada">2</option>
                                    <option value="Russia">3</option>
                                </select>
                            </div>
                            <div class="col-xl-2 col-md-3 col-sm-4 mb-2">
                                <label for="credit-card">Child</label>
                                <select class="form-control" id="customer-country" name="customer-country">
                                    <option label="Select"></option>
                                    <option value="Australia">0</option>
                                    <option value="Canada">1</option>
                                    <option value="Russia">2</option>
                                </select>
                            </div>
                            <div>
                                <div><label for="credit-card">Action</label></div>
                                <button type="button" class="btn btn-primary" name="add" id="add">Add row</button>
                                <button type="button" class="btn btn-danger" id="deleteRow">Delete row</button>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-4 col-md-6 col-sm-12 mb-2">
                                <label for="date">Guest Name</label>
                                <input type="text" class="form-control date-mask" placeholder="Full Name" id="date">
                            </div>
                            <div class="col-xl-4 col-md-6 col-sm-12 mb-2">
                                <label for="date">Phone</label>
                                <input type="text" class="form-control date-mask" placeholder="Phone Number" id="date">
                            </div>
                            <div class="col-xl-4 col-md-6 col-sm-12 mb-2">
                                <label for="date">Email</label>
                                <input type="email" class="form-control date-mask" placeholder="Email" id="date">
                            </div>
                        </div>
                        <div class="row">
                            <div id="div1" class="form-group col-xl-4 col-md-6 col-sm-12 mb-2" style="display:none">
                                <label>Country</label>
                                <select class=" select2 form-control form-control-lg" name="desh" id="desh" required>
                                    <option>Select Value</option>
                                    @foreach ($country as $item)
                                    <option value="{{$item->id}}">{{$item->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div id="div2" class="form-group col-xl-4 col-md-6 col-sm-12 mb-2" style="display:none">
                                <label>State</label>
                                <select class="select2 form-control form-control-lg" name="state" id="state" required>
                                    <option label=" "></option>
                                </select>
                            </div>
                            <div id="div3" class="form-group col-xl-4 col-md-6 col-sm-12 mb-2" style="display:none">
                                <label>City</label>
                                <select class="select2 form-control form-control-lg" name="city" id="city" required>
                                    <option label=" "></option>
                                </select>
                            </div>
                            <div id="div4" class="form-group col-xl-4 col-md-6 col-sm-12 mb-2" style="display:none">
                                <label>Thana</label>
                                <select class="select2 form-control form-control-lg" name="zipcode" id="zipcode"
                                    required>
                                    <option label=" "></option>
                                </select>
                            </div>
                            <div id="div5" class="form-group col-xl-4 col-md-6 col-sm-12 mb-2" style="display:none">
                                <label class="form-label" for="landmark">Landmark</label>
                                <input type="text" name="landmark" id="landmark" class="form-control"
                                    placeholder="house-5,road-9/B,sector-5" aria-describedby="landmark-error"
                                    aria-invalid="false" required><span id="landmark-error" class="error"
                                    style="display: none;"></span>
                            </div>
                        </div>
                        <div class="row" id="div6" style="display: none;">
                            <div class="col-xl-3 col-md-3 col-sm-4 mb-2">
                                <label for="credit-card">Payment Method</label>
                                <select class="form-control" id="firstname1" name="customer-country">
                                    <option label="Select"></option>
                                    <option value="Australia">Bank Payment</option>
                                    <option value="Canada">SSL Commerz</option>

                                    <option value="Russia">Cash Payment</option>
                                    <option value="Russia">Paypal</option>
                                    <option value="Russia">Card Paymnet</option>
                                </select>
                            </div>
                            <div class="col-xl-2 col-md-3 col-sm-4 mb-2">
                                <label for="credit-card">Total Amount</label>
                                <input type="number" class="form-control numeral-mask" placeholder=""
                                    id="numeral-formatting" readonly>
                            </div>
                            <div class="col-xl-2 col-md-3 col-sm-4 mb-2">
                                <label for="credit-card">Advance Amount</label>
                                <input type="number" class="form-control numeral-mask" placeholder=""
                                    id="numeral-formatting">
                            </div>
                            <div class="col-xl-4 col-md-6 col-sm-12 mb-2">
                                <label for="date">Remarks</label>
                                <input type="text" class="form-control date-mask" placeholder="Remarks" id="date">
                            </div>
                            <div>
                                <div><label for="credit-card">Action</label></div>
                                <button type="button" class="btn btn-primary" name="add" id="add">Add
                                    Discout</button>
                            </div>
                        </div>
                        <!-- <div class="col-xl-4 col-md-6 col-sm-12 mb-2">
                            <label for="phone-number">Phone Number</label>
                            <div class="input-group input-group-merge">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">US (+1)</span>
                                </div>
                                <input type="text" class="form-control phone-number-mask" placeholder="1 234 567 8900"
                                    id="phone-number">
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-6 col-sm-12 mb-2">
                            <label for="date">Date</label>
                            <input type="text" class="form-control date-mask" placeholder="YYYY-MM-DD" id="date">
                        </div>
                        <div class="col-xl-4 col-md-6 col-sm-12 mb-2">
                            <label for="time">Time</label>
                            <input type="text" class="form-control time-mask" placeholder="hh:mm:ss" id="time">
                        </div>
                        <div class="col-xl-4 col-md-6 col-sm-12 mb-2">
                            <label for="numeral-formatting">Numeral formatting</label>
                            <input type="text" class="form-control numeral-mask" placeholder="10,000"
                                id="numeral-formatting">
                        </div>
                        <div class="col-xl-4 col-md-6 col-sm-12 mb-2">
                            <label for="blocks">Blocks</label>
                            <input type="text" class="form-control block-mask" placeholder="Blocks [4, 3, 3]"
                                id="blocks">
                        </div>
                        <div class="col-xl-4 col-md-6 col-sm-12 mb-2">
                            <label for="delimiters">Delimiters</label>
                            <input type="text" class="form-control delimiter-mask" placeholder="Delimiter: '.'"
                                id="delimiters">
                        </div>
                        <div class="col-xl-4 col-md-6 col-sm-12 mb-2">
                            <label for="custom-delimiters">Custom Delimiters</label>
                            <input type="text" class="form-control custom-delimiter-mask"
                                placeholder="Delimiter: ['.', '.', '-']" id="custom-delimiters">
                        </div>
                        <div class="col-xl-4 col-md-6 col-sm-12 mb-2">
                            <label for="prefix">Prefix</label>
                            <input type="text" class="form-control prefix-mask" id="prefix">
                        </div> -->
                        <div align="left" id="more"><button type="button" class="btn btn-primary">More
                                Options</button></div>
                        <div class="row"></div>
                        <div align="right">
                            <button type="submit" class="btn btn-success" style="display: none;" id="btn_check">Check
                                In</button>
                            <button type="submit" class="btn btn-success" id="btn_Reserv">Reserve</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
</section>
@endsection
