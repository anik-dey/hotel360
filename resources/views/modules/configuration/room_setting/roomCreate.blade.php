@extends('layouts.contentLayoutHorizontal')
@section('content')
<h3>{{ $title }}</h3> <br>
<form action="{{ route('room-list.store') }}" method="post">
    @csrf
    @method('POST')
    <div class="row">
        <div class="form-group col md-3">
            <label for="property_id" class="form-label">Property</label>
            <select class="form-control select2" name="property_id" id="property_id" required>
                <option label=" "></option>
                @forelse($property as $item )
                    <option value="{{ $item->id }}">{{ $item->name }}</option>
                @empty
                    <option value="">Please Add Property First</option>
                @endforelse
            </select>
        </div>
        <div class="form-group col md-3">
            <label for="floor_id" class="form-label">Floor</label>
            <select class="form-control select2" name="floor_id" id="floor_id"
                value="{{ old('floor_id') }}" required>
                <option label=" "></option>
            </select>
        </div>
        <div class="form-group col md-3">
            <label for="room_type" class="form-label">Room Type</label>
            <select class="form-control select2" id="room_type" name="room_type" required>
                <option label="Select Size"></option>
                <option value="Single">Single</option>
                <option value="Double">Double</option>
                <option value="Twin beds">Twin beds</option>
                <option value="Quad">Quad</option>
                <option value="Queen">Queen</option>
                <option value="King">King</option>
                <option value="Triple">Triple</option>
                <option value="Double Twin">Double Twin</option>
                <option value="Murphy bed">Murphy bed</option>
                <option value="Adjoining rooms">Adjoining rooms</option>
            </select>
        </div>
        <div class="form-group col md-3">
            <label for="rate" class="form-label">Room Number</label>
            <input type="number" class="form-control" id="room_number"
                value="{{ old('room_number') }}" placeholder="Room Number" name="room_number"
                required />
            <div align="right" id="check_room_exit"><label></label></div>
        </div>
    </div>
    <div class="row">
        <div class="form-group col md-3">
            <label for="rate" class="form-label">Rate</label>
            <input type="number" class="form-control" id="rate" placeholder="Rate" name="rate"
                value="{{ old('rate') }}" required />
        </div>
        <div class="form-group col md-3">
            <label for="bed_ex_charge" class="form-label">Bed Extra Charge</label>
            <input type="number" class="form-control" id="bed_ex_charge" name="bed_ex_charge"
                placeholder="Bed Extra Charge" value="{{ old('bed_ex_charge') }}" />
        </div>
        <div class="form-group col md-3">
            <label for="extra_person_charge" class="form-label">Extra Person Charge</label>
            <input type="number" class="form-control" id="" name="ex_person_charge" placeholder="Extra Person Charge"
                value="{{ old('extra_person_charge') }}" />
        </div>
        <div class="form-group col md-3">
            <label for="capacity" class="form-label">Capacity</label>
            <input type="number" class="form-control" id="capacity" name="capacity" placeholder="Capacity"
                value="{{ old('capacity') }}" required />
        </div>
    </div>
    <div class="row">
        <div class="form-group col-md-3">
            <label for="extra_capacity" class="form-label">Extra Capacity</label>
            <select class="form-control" name="extra_capacity" id="extra_capacity">
                <option value="1">Yes</option>
                <option value="0">No</option>
            </select>
        </div>
    </div>
    <div class="row">
        <div class="form-group col md-6">
            <label for="customer-contact" class="form-label">Room Drescription</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Room Drescription"
                name="room_description" value="{{ old('room_description') }}"></textarea>
        </div>
        <div class="form-group col md-6">
            <label for="customer-contact" class="form-label">Reservasion Condition</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Reservasion Condition"
                name="reseeve_condition" value="{{ old('reseeve_condition') }}"></textarea>
        </div>
    </div>
    <div class="row">
        <div class="form-group col md-12">
            <button type="submit" class="btn btn-success btn-block">Add</button>
        </div>
    </div>
</form>
<script type="text/javascript">
    $(document).ready(function () {
        $('#property_id').on('change', function () {
            var idCountry = this.value;
            $("#floor_id").html('');
            $.ajax({
                url: "{{ url('configuration/room-settings/api/fetch-floor') }}",
                type: "POST",
                data: {
                    country_id: idCountry,
                    _token: '{{ csrf_token() }}'
                },
                dataType: 'json',
                success: function (result) {
                    $('#floor_id').html('<option value="">Select Floor</option>');
                    $.each(result.floor, function (key, value) {
                        $("#floor_id").append('<option value="' + value
                            .id + '">' + value.floor_name + ' </option>');
                    });
                }
            });
        });
    });

</script>
<script>
    $(document).ready(function () {
        $('#room_number').keyup(function () {
            var property_id = $('#property_id').val()
            var room_number = $(this).val()
            $.ajax({
                url: "{{ url('configuration/room-settings/api/fetch-room') }}",
                type: "POST",
                data: {
                    property_id: property_id,
                    room_number: room_number,
                    _token: '{{ csrf_token() }}'
                },
                dataType: 'json',
                success: function (result) {
                    $('#check_room_exit').html(result.room_number);
                },
                error: (error) => {
                    console.log("error", error);
                }
            });
        });
    });

</script>
@endsection
