@extends('layouts.contentLayoutHorizontal')
@section('content')
<div class="card">
    <div class="card-body">
        <div class="row">
            <div class="col-md-3">
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label class="form-label" for="emailVerify">Select Property First</label>
                    <select class="form-control select2" id="property_id" name="property_id"
                        onchange="location =this.value;" required>
                        <option label="Please Select"></option>
                        @foreach($property as $item )
                            <option value="{{ $item->id }}">
                                {{ $item->name }}
                            </option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="col-md-3">
            </div>
        </div>
    </div>
</div>
@endsection
