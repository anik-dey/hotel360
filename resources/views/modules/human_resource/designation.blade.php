@extends('layouts.master')
@section('title', 'Designation')
@section('content')
<form action="{{ route('designations.store') }}" method="POST" id="div1" enctype="multipart/form-data"
    style="display: none">
    @csrf
    @method('post')
    <div class="row d-flex justify-content-center">
        <div class="form-group position-relative col-md-5">
            <label for="name" class="form-label">Designation Name</label>
            <input type="text" name="name" class="form-control date-mask" placeholder="Designation Name" id="name">
        </div>
        <div class="form-group position-relative col-md-5">
            <div class="form-group">
                <label for="property_id">Select Property</label>
                <select name="property_id" id="property_id" class="form-control select2">
                    <option label="Please Select"></option>
                    @foreach ($property as $item)
                    <option value="{{$item->id}}">{{$item->name}}</option>
                    @endforeach
                </select>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="form-group position-relative col-md-3"></div>
        <div class="form-group position-relative col-md-3">
            <button type="button" id="hide_btn"
                class="btn btn-primary btn-block waves-effect waves-float waves-light">Hide</button>
        </div>
        <div class="form-group position-relative col-md-3">
            <button type="submit" class="btn btn-success btn-block waves-effect waves-float waves-light">Submit</button>
        </div>
        <div class="form-group position-relative col-md-3"></div>
    </div>
    <input type="hidden" id="tableId" name="id">
</form>
<input type="hidden" id="prevClick" value="add">
<div class="row" id="table-bordered">
    <div class="col-12">
        <div class="card">
            <div class="card-header d-flex flex-row justify-content-end">
                <div class="col-md-4 mt-2">
                    <h4 class="card-title">List of Designation</h4>
                </div>
                <div class="col-md-4 mt-1 mobile_flex">
                    <label>Search :</label>
                    <input id="myInput" type="text" onkeyup="myFunction()" value="" class="form-control"
                        placeholder="Search Anythings...">
                </div>
                <div class="col-md-4 mt-1">
                    <button class="dt-button create-new btn btn-primary mt-2" onclick="addDesignation()" type="button"
                        id="income_list"><i class="fa fa-plus"></i> Add
                        Designation</span>
                    </button>
                </div>
            </div>

            <div class="table-responsive">
                <table class="table table-bordered table-sn" style="text-align: center">
                    <thead>
                        <tr>
                            <th>SL</th>
                            <th>Name</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody id="myTable">
                        @forelse($designation as $key => $item)
                        <tr>
                            <td>
                                <span class="font-weigth-bold">{{ ++$key }}</span>
                            </td>
                            <td>
                                <span class="font-weigth-bold">{{ $item->name }}</span>
                            </td>
                            <td>
                                <div style="display: flex">
                                    <div style="margin-left: 7px">
                                        <button onclick="editData({{ json_encode($item) }})" type="button"
                                            class="btn btn-primary btn-sm" type="button">
                                            <i class="fa fa-edit"></i>
                                        </button>
                                    </div>
                                    <div style="margin-left: 7px">
                                        <button onclick="deleteData({{ $item->id }})" class="btn btn-danger btn-sm">
                                            <i class="fa fa-trash"></i>
                                        </button>
                                        <form style="display: none" id="delete-form-{{ $item->id }}"
                                            action="{{ route('designations.destroy',$item->id) }}" method="POST">
                                            @method('delete')
                                            @csrf
                                        </form>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="3" class="text-danger">Please Add Designation</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection

@push('js')
<script>
    function addDesignation(params) {
        $('#div1').show();
        if($('#prevClick').val() != 'add'){
            $('#name').val('');
            $('#property_id').val('');
            $('#tableId').val('');
            $('.select2').select2();
        }
        $('#prevClick').val('add');
    }

    function editData(value) {
        $('#prevClick').val('edit');
        $('#div1').show();
        $('#name').val(value.name);
        $('#property_id').val(value.property_id);
        $('#tableId').val(value.id);
        $('.select2').select2();
    }

</script>
@endpush