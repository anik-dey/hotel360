@extends('layouts.master')
@section('title', 'Add Asset')
@push('css')
<link rel="stylesheet" type="text/css" href="{{asset('backend/app-assets/css/components.css')}}">
@endpush
@section('content')
<form action="" method="">
    <div class="row justify-content-around">
        <div class="form-group position-relative col-md-4">
            <label for="assetName" class="form-label">Product Name</label>
            <input type="text" id="assetName" class="form-control date-mask" placeholder="Product Name">
        </div>
        <div class="form-group position-relative col-md-4">
            <label for="assetCategory" class="form-label">Asset Category</label>
            <select class="form-control select2" id="" name="">
                <option>Select</option>
                <option value="">AC</option>
                <option value="">Fan</option>
            </select>
        </div>
        <div class="form-group position-relative col-md-4">
            <label for="productCondition" class="form-label">Product Condition</label>
            <select class="form-control select" id="" name="">
                <option>Select</option>
                <option value="">New</option>
                <option value="">Recondition</option>
                <option value="">Used</option>
            </select>
        </div>
        <div class="form-group position-relative col-md-4">
            <label for="assetModel" class="form-label">Model Number</label>
            <input type="number" id="assetDescription" class="form-control date-mask" placeholder="Model Number">
        </div>
        <div class="form-group position-relative col-md-4">
            <label for="assetSerial" class="form-label">Serial Number</label>
            <input type="number" id="assetSerial" class="form-control date-mask" placeholder="Serial Number">
        </div>
        <div class="form-group position-relative col-md-4">
            <label for="assetManual" class="form-label">Manual Number</label>
            <input type="number" id="assetManual" class="form-control date-mask" placeholder="Manual Number">
        </div>
        <div class="form-group position-relative col-md-4">
            <label for="productHotel" class="form-label">Hotel</label>
            <select class="form-control select2" id="" name="">
                <option>Select</option>
                <option value="">Radisson</option>
                <option value="">Pan Pacific</option>
                <option value="">La meredian</option>
            </select>
        </div>
        <div class="form-group position-relative col-md-4">
            <label for="assetDescription" class="form-label">Product Description</label>
            <input type="text" id="assetDescription" class="form-control date-mask" placeholder="Product Description">
        </div>
        <div class="form-group position-relative col-md-4">
            <label for="assetSupplierName" class="form-label">Asset Supplier Name</label>
            <select class="form-control select2" id="assetSupplierName" name="">
                <option>Select</option>
            </select>
        </div>
        <div class="form-group position-relative col-md-4">
            <label for="assetCost" class="form-label">Product Cost</label>
            <input type="text" id="assetCost" class="form-control date-mask" placeholder="Product Cost">
        </div>
        <div class="form-group position-relative col-md-4">
            <label for="assetQuantity" class="form-label">Quantity</label>
            <input type="number" id="assetQuantity" class="form-control date-mask" placeholder="Asset Quantity">
        </div>
        <div class="form-group position-relative col-md-4">
            <label for="totalCost" class="form-label">Total Cost</label>
            <input type="text" id="totalCost" class="form-control date-mask" placeholder="Total Cost" readonly>
        </div>
         <div class="form-group position-relative col-md-4">
        <label for="assetGuarantyWarranty" class="form-label">Asset Guaranty/ Warranty</label>
        <div class="form-control date-mask"
            style="display: flex; background-color: rgb(40, 48, 70); border-radius: 10px">
            <div id="none" class="custom-control custom-radio">
                <input type="radio" id="gwRadio1" name="customRadio" class="custom-control-input" checked>
                <label class="custom-control-label" for="gwRadio1">None</label>
            </div>
            <div id="assetGuaranty" class="custom-control custom-radio ml-2">
                <input type="radio" id="gwRadio2" name="customRadio" class="custom-control-input">
                <label class="custom-control-label" for="gwRadio2">Guaranty</label>
            </div>
            <div id="assetWarranty" class="custom-control custom-radio ml-2">
                <input type="radio" id="gwRadio3" name="customRadio" class="custom-control-input">
                <label class="custom-control-label" for="gwRadio3">Warranty</label>
            </div>
        </div>
    </div>
    <div class="form-group position-relative col-md-4">
            <label for="fp-default">Date of Purchase</label>
            <input type="text" id="fp-default" class="form-control flatpickr-basic flatpickr-input"
                placeholder="YYYY-MM-DD" readonly="readonly">
    </div>
    <div class="form-group position-relative col-md-4">
        <label for="assetExpiredDate">Expired  Date</label>
            <input type="text" id="assetExpiredDate" class="form-control flatpickr-basic flatpickr-input"
                placeholder="YYYY-MM-DD" readonly="readonly">
    </div>
    <div class="form-group position-relative col-md-4">
        <div id="dateGuarantyWarranty" style="display: none">
            <input type="text" id="guarantyWarrantyDate" class="form-control flatpickr-basic flatpickr-input"
            placeholder="YYYY-MM-DD" readonly="readonly">
        </div>
    </div>
    <div class="form-group position-relative col-md-4"></div>
<div class="form-group position-relative col-md-4"></div> 
    <div class="form-group position-relative col-md-4">
        <label for="assetProductImage">Product Image</label>
                <input type="file" class="form-control date-mask" name="" id="assetProductImage">
    </div>
    <div class="form-group position-relative col-md-4">
        <label for="assetAttachment">Asset Attachment</label>
                <input type="file" class="form-control date-mask" name="" id="assetAttachment">
    </div>
    <div class="form-group position-relative col-md-4"></div>
    </div>
    <br>
      <div class="row justify-content-around">
            <div class="col-lg-6 col-sm-12">
                <div class="form-group">
            <button type="submit" class="btn btn-primary btn-block waves-effect waves-float waves-light">Submit</button>
                </div>
            </div>
        </div>
    </form>
<script>
    $(document).ready(function() {
         $("#gwRadio2").click(function() {
            $("#dateGuarantyWarranty").show("slow");
          });
    });
    $(document).ready(function() {
        $("#gwRadio3").click(function() {
            $("#dateGuarantyWarranty").show("slow");
            
        });
    });
    $(document).ready(function() {
        $("#gwRadio1").click(function() {
            $("#dateGuarantyWarranty").hide("slow");
          });
    });

    $('#assetCost, #assetQuantity').keyup(function(){
    var price = Number($('#assetCost').val());
    var qty = Number($('#assetQuantity').val());
    
    $('#totalCost').val(price * qty );
});
 </script>
@endsection

