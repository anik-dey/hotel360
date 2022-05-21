@extends('layouts.master')
@section('title', 'Appreciation & Depreciation')
@section('content')
<form action="" method="">
<div class="row" id="table-bordered">
    <div class="col-12">
        <div class="card">
            <div class="card-header d-flex flex-row justify-content-end">
                <div class="col-md-4  mt-2">
                    <h4 class="card-title">Appreciation & Depreciation</h4>
                </div>
                <div class="col-md-4"></div>
                <div class="col-md-4  mt-1 mobile_flex">
                    <label>Search :</label>
                    <input id="myInput" type="text" onkeyup="myFunction()" value="" class="form-control"
                        placeholder="Search Anythings...">
                </div>
            </div>
            <!-- <div class="card-body">
                <p class="card-text">

                </p>
            </div> -->
            <div class="table-responsive">
                <table class="table table-bordered table-sm" style="text-align:center">
                    <thead>
                        <tr>
                            <th>SL</th>
                            <th>Purchase Date</th>
                            <th>Product Name</th>
                            <th>Category</th>
                            <th>Hotel</th>
                            <th>Retired Date</th>
                            <th>Old Value</th>
                            <th>Dept Type</th>
                            <th>Dept%</th>
                            <th>Dept Total</th>
                            <th>New Value</th>
                            <th>Update</th>
                        </tr>
                    </thead>
                    <tbody id="myTable">
                        <tr>
                            <td>
                                <span class="font-weight-bold">1</span>
                            </td>
                            <td>
                                <span class="font-weight-bold">3-10-2022</span>
                            </td>
                            <td>
                                <span class="font-weight-bold">Samsung AC</span>
                            </td>
                            <td>
                                <span class="font-weight-bold">AC</span>
                            </td>
                            <td>
                                <span class="font-weight-bold">Radisson</span>
                            </td>
                            <td>
                                <span class="font-weight-bold">9-10-2024</span>
                            </td>
                            <td>
                                <span class="font-weight-bold">
                                    <input type="number" id="oldValue1" class="form-control date-mask">
                                </span>
                            </td>
                            <td>
                                <select class="form-control select" id="" name="">
                                        <option>Select</option>
                                        <option value="">Appreciation</option>
                                        <option value="">Depreciation</option>
                                </select>
                            </td>
                            <td>
                                <span class="font-weight-bold">
                                    <input type="number" id="deptP1" class="form-control date-mask">
                                </span>
                            </td>
                            <td>
                                <span class="font-weight-bold">
                                    <input type="number" id="deptTotal1" class="form-control date-mask" readonly>
                                </span>
                            </td>
                            <td>
                                <span class="font-weight-bold">
                                    <input type="number" id="newValue1" class="form-control date-mask" readonly>
                                </span>
                            </td>
                            <td>
                                <span class="font-weight-bold">
                                    <input type="checkbox" id="updateAD1">
                                </span>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <span class="font-weight-bold">2</span>
                            </td>
                            <td>
                                <span class="font-weight-bold">3-10-2022</span>
                            </td>
                            <td>
                                <span class="font-weight-bold">Samsung AC</span>
                            </td>
                            <td>
                                <span class="font-weight-bold">AC</span>
                            </td>
                            <td>
                                <span class="font-weight-bold">Radisson</span>
                            </td>
                            <td>
                                <span class="font-weight-bold">9-10-2024</span>
                            </td>
                            <td>
                                <span class="font-weight-bold">
                                    <input type="number" id="oldValue2" class="form-control date-mask">
                                </span>
                            </td>
                            <td>
                                <select class="form-control select" id="" name="">
                                        <option>Select</option>
                                        <option value="">Appreciation</option>
                                        <option value="">Depreciation</option>
                                </select>
                            </td>
                            <td>
                                <span class="font-weight-bold">
                                    <input type="number" id="deptP2" class="form-control date-mask">
                                </span>
                            </td>
                            <td>
                                <span class="font-weight-bold">
                                    <input type="number" id="deptTotal2" class="form-control date-mask" readonly>
                                </span>
                            </td>
                            <td>
                                <span class="font-weight-bold">
                                    <input type="number" id="newValue2" class="form-control date-mask" readonly>
                                </span>
                            </td>
                            <td>
                                <span class="font-weight-bold">
                                    <input type="checkbox" id="updateAD2">
                                </span>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <br><br>
                    <div class="row justify-content-around">
                        <div class="col-lg-6 col-sm-12">
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary btn-block waves-effect waves-float waves-light">Submit</button>
                             </div>
                        </div>
                     </div>
        </div>
    </div>
</div>
</form>
<script>

    $('#oldValue1, #deptP1').keyup(function(){
    var old = Number($('#oldValue1').val());
    var per = Number($('#deptP1').val());
    var total = Number($('#deptTotal1').val((per/100)*old));
    total = Number($('#deptTotal1').val());
    Number($('#newValue1').val(old+total));
    });

    $('#oldValue2, #deptP2').keyup(function(){
    var old = Number($('#oldValue2').val());
    var per = Number($('#deptP2').val());
    var total = Number($('#deptTotal2').val((per/100)*old));
    total = Number($('#deptTotal2').val());
    Number($('#newValue2').val(old+total));
    
    });


</script>
@endsection
