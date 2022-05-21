@extends('layouts.contentLayoutHorizontal')
@section('content')
<h3>Update Form</h3> <br>
<form action="{{ route('room-list.update',$room_lists->id) }}" method="post">
    @csrf
    @method('put')
    <div class="row">
        <input type="text" name="property_id" value="{{ $room_lists->property_id }}" style="display: none;">
        <input type="text" name="id" id="id" value="{{ $room_lists->id }}" style="display: none;">
        <div class="form-group col md-3">
            <label for="floor_id" class="form-label">Floor</label>
            <select class="form-control select2" name="floor_id" id="floor_id" required>
                @forelse($floors as $key => $item)
                    <option value="{{ $item->id }}">{{ $item->floor_name }}</option>
                @empty

                @endforelse
            </select>
        </div>
        <div class="form-group col md-3">
            <label for="room_type" class="form-label">Room Type</label>
            <select class="form-control select2" id="room_type" name="room_type" required>
                <option value="Single" @if ($room_lists->room_type=='Single') selected
                    @endif>Single</option>
                <option value="Double" @if ($room_lists->room_type=='Double') selected
                    @endif>Double</option>
                <option value="Twin beds" @if ($room_lists->room_type=='Twin beds') selected
                    @endif>Twin beds</option>
                <option value="Quad" @if ($room_lists->room_type=='Quad') selected
                    @endif>Quad</option>
                <option value="Queen" @if ($room_lists->room_type=='Queen') selected
                    @endif>Queen</option>
                <option value="King" @if ($room_lists->room_type=='King') selected
                    @endif>King</option>
                <option value="Triple" @if ($room_lists->room_type=='Triple') selected
                    @endif>Triple</option>
                <option value="Double Twin" @if ($room_lists->room_type=='Double Twin') selected
                    @endif">Double Twin</option>
                <option value="Murphy bed" @if ($room_lists->room_type=='Murphy bed') selected
                    @endif>Murphy bed</option>
                <option value="Adjoining rooms" @if ($room_lists->room_type=='Adjoining rooms') selected
                    @endif>Adjoining rooms</option>
            </select>
        </div>
        <div class="form-group col md-3">
            <label for="rate" class="form-label">Room Number</label>
            <input type="number" class="form-control" id="room_number" placeholder="Room Number" name="room_number"
                value="{{ $room_lists->room_number }}" required />
            <div align="right" id="check_room_exit"><label></label></div>
        </div>
        <div class="form-group col md-3">
            <label for="rate" class="form-label">Rate</label>
            <input type="number" class="form-control" id="rate" placeholder="Rate" name="rate"
                value="{{ $room_lists->rate }}" required />
        </div>
    </div>
    <div class="row">
        <div class="form-group col md-3">
            <label for="bed_ex_charge" class="form-label">Bed Extra Charge</label>
            <input type="number" class="form-control" id="bed_ex_charge" name="bed_ex_charge"
                placeholder="Bed Extra Charge" value="{{ $room_lists->bed_ex_charge }}" />
        </div>
        <div class="form-group col md-3">
            <label for="extra_person_charge" class="form-label">Extra Person Charge</label>
            <input type="number" class="form-control" id="" name="ex_person_charge" placeholder="Extra Person Charge"
                value="{{ $room_lists->ex_person_charge }}" />
        </div>
        <div class="form-group col md-3">
            <label for="capacity" class="form-label">Capacity</label>
            <input type="number" class="form-control" id="capacity" name="capacity" placeholder="Capacity"
                value="{{ $room_lists->capacity }}" required />
        </div>
        <div class="form-group col-md-3">
            <label for="extra_capacity" class="form-label">Extra Capacity</label>
            <select class="form-control select2" name="extra_capacity" id="extra_capacity">
                <option value="1" @if ($room_lists->extra_capacity=='1') selected
                    @endif>Yes</option>
                <option value="0" @if ($room_lists->extra_capacity=='0') selected
                    @endif>No</option>
            </select>
        </div>
    </div>
    <div class="row">
        <div class="form-group col md-6">
            <label for="customer-contact" class="form-label">Room Drescription</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Room Drescription"
                name="room_description">{{ $room_lists->room_description }}</textarea>
        </div>
        <div class="form-group col md-6">
            <label for="customer-contact" class="form-label">Reserve Condition</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Reservasion Condition"
                name="reseeve_condition">{{ $room_lists->reseeve_condition }}</textarea>
        </div>
    </div><br>
    <div class="row">
        <div class="form-group col md-12">
            <button type="submit" class="btn btn-success btn-block">Update</button>
        </div>
    </div>
</form>
<script type="text/javascript">
    $(document).ready(function () {
        $('#property_id').on('change', function () {
            var idCountry = this.value;
            $("#floor_id").html('');
            $.ajax({
                url: "{{ url('configuration/api/fetch-floor') }}",
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
            var id = $('#id').val()
            $.ajax({
                url: "{{ url('configuration/room-settings/api/fetch-room-update') }}",
                type: "POST",
                data: {
                    property_id: property_id,
                    room_number: room_number,
                    id: id,
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
