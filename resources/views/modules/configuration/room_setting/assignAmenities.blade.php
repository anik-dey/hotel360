@extends('layouts.contentLayoutHorizontal')
@section('content')
<div class="row">
    <div class="form-group col md-6">
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
    <div class="form-group col md-6">
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
</div>

<div class="col-md-12">
    <h3>Select Amenities</h3><br>
    <ul class="d-flex pl-0" style="list-style: none; margin-top:1rem">
        @forelse($amenities as $item)
            <li class="ml-2">
                <div class="custom-control custom-control-info custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="{{ $item->id }}" name="{{ $item->id }}"
                        value="{{ $item->id }}" />
                    <label class="custom-control-label" for="{{ $item->id }}">{{ $item->amenities }}</label>
                </div>
            </li>
        @empty
            <h3> Opps! No Amenities Are Found </h3><br>
        @endforelse
    </ul>
</div>
@endsection
