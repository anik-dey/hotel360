@extends('layouts.master')
@section('title', 'Send Bulk Sms')
@push('css')
<script src="http://demo.oslbd.org/fox/bower_components/jquery/dist/jquery.min.js"></script>
<link rel="stylesheet" type="text/css" href="{{asset('backend/app-assets/css/components.css')}}">
@endpush
@section('content')
<form>
    <div class="row">
        <div class="col-md-3 mb-1"></div>
        <div class="col-md-6 mb-1" data-select2-id="52">
            <label>Bulk Sms Filter</label>
            <div class="position-relative" data-select2-id="51"><select
                    class="select2 form-control form-control-lg select2-hidden-accessible" data-select2-id="1"
                    tabindex="-1" aria-hidden="true">
                    <option value="AK" data-select2-id="3">All Members</option>
                    <option value="HI" data-select2-id="59">Guest</option>
                    <option value="CA" data-select2-id="60">Client</option>
                    <option value="CA" data-select2-id="60">Reservasion Members</option>
                </select></div>
        </div>
        <div class="col-md-3 mb-1"></div>
    </div>
    <div class="row">
        <div class="col-md-3 mb-1"></div>
        <div class="col-md-6 mb-1">
            <button type="submit" class="btn btn-primary btn-block waves-effect waves-float waves-light">Filter</button>
        </div>
        <div class="col-md-3 mb-1"></div>
    </div>
</form>
<br>
<div class="row" id="table-bordered">
    <div class="col-12">
        <div class="card">
            <div class="card-header d-flex flex-row justify-content-end">
                <div class="col-lg-4 col-sm-12 mt-1">
                    <label>Select Template</label>
                    <div class="position-relative" data-select2-id="51"><select
                            class="select2 form-control form-control-lg select2-hidden-accessible" data-select2-id="1"
                            tabindex="-1" aria-hidden="true">
                            <option value="AK" data-select2-id="3">All Members</option>
                            <option value="HI" data-select2-id="59">Guest</option>
                            <option value="CA" data-select2-id="60">Client</option>
                            <option value="CA" data-select2-id="60">Reservasion Members</option>
                        </select>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-12 mt-1">
                    <label for="customer-contact" class="form-label">Sms Body Text Content</label>
                    <textarea data-length="160" class="form-control char-textarea active" id="textarea-counter" rows="1"
                        placeholder="Message Body" style="color: rgb(78, 81, 84);"></textarea>
                    <small class="textarea-counter-value float-right"
                        style="background-color: rgb(115, 103, 240);"><span class="char-count">0</span> / 160 <span> |
                        </span> <span id="demo">1</span></small>
                </div>

                <div class="col-lg-1 col-sm-12 mt-1">
                    <label for="customer-country" class="form-label">Members Count</label>
                    <input type="text" name="count" id="count" class="form-control date-mask" placeholder="" value="0"
                        readonly>
                </div>

                <div class="col-lg-2 col-sm-12 mt-1">
                    <button class="btn btn-primary btn-block waves-effect waves-float waves-light">Send
                        Sms</button>
                </div>

                <div class="col-lg-2 col-sm-12 mt-1">
                    <button class="btn btn-primary btn-block waves-effect waves-float waves-light">Export</button>
                </div>
            </div>
            <div class="card-body">
                <p class="card-text">
                    Fill up and select memebr to send
                </p>
            </div>
            <div class="table-responsive">
                <table class="table table-bordered" id="myTableId">
                    <thead>
                        <tr>
                            <th><input class="mr-1" type="checkbox" name="checkAll" id="checkAll"
                                    onclick="toggle(this)"></th>
                            <th>SL</th>
                            <th>Member Name</th>
                            <th>Member Phone</th>
                        </tr>
                    </thead>
                    <tbody id="Table">
                        <tr>
                            <td>
                                <input type="checkbox" class="check" name="send[]" id="send[]">
                            </td>
                            <td>
                                <span class="font-weight-bold">1</span>
                            </td>
                            <td>
                                <span class="font-weight-bold">Din ISlam</span>
                            </td>
                            <td>
                                <span class="font-weight-bold">0177256982</span>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input type="checkbox" class="check" name="send[]" id="send[]">
                            </td>
                            <td>
                                <span class="font-weight-bold">1</span>
                            </td>
                            <td>
                                <span class="font-weight-bold">Din ISlam</span>
                            </td>
                            <td>
                                <span class="font-weight-bold">0177256982</span>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input type="checkbox" class="check" name="send[]" id="send[]">
                            </td>
                            <td>
                                <span class="font-weight-bold">1</span>
                            </td>
                            <td>
                                <span class="font-weight-bold">Din ISlam</span>
                            </td>
                            <td>
                                <span class="font-weight-bold">0177256982</span>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input type="checkbox" class="check" name="send[]" id="send[]">
                            </td>
                            <td>
                                <span class="font-weight-bold">1</span>
                            </td>
                            <td>
                                <span class="font-weight-bold">Din ISlam</span>
                            </td>
                            <td>
                                <span class="font-weight-bold">0177256982</span>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input type="checkbox" class="check" name="send[]" id="send[]">
                            </td>
                            <td>
                                <span class="font-weight-bold">1</span>
                            </td>
                            <td>
                                <span class="font-weight-bold">Din ISlam</span>
                            </td>
                            <td>
                                <span class="font-weight-bold">0177256982</span>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input type="checkbox" class="check" name="send[]" id="send[]">
                            </td>
                            <td>
                                <span class="font-weight-bold">1</span>
                            </td>
                            <td>
                                <span class="font-weight-bold">Din ISlam</span>
                            </td>
                            <td>
                                <span class="font-weight-bold">0177256982</span>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input type="checkbox" class="check" name="send[]" id="send[]">
                            </td>
                            <td>
                                <span class="font-weight-bold">1</span>
                            </td>
                            <td>
                                <span class="font-weight-bold">Din ISlam</span>
                            </td>
                            <td>
                                <span class="font-weight-bold">0177256982</span>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input type="checkbox" class="check" name="send[]" id="send[]">
                            </td>
                            <td>
                                <span class="font-weight-bold">1</span>
                            </td>
                            <td>
                                <span class="font-weight-bold">Din ISlam</span>
                            </td>
                            <td>
                                <span class="font-weight-bold">0177256982</span>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input type="checkbox" class="check" name="send[]" id="send[]">
                            </td>
                            <td>
                                <span class="font-weight-bold">1</span>
                            </td>
                            <td>
                                <span class="font-weight-bold">Din ISlam</span>
                            </td>
                            <td>
                                <span class="font-weight-bold">0177256982</span>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<script>
// Checked All Checkbox
function toggle(source) {
    checkboxes = document.getElementsByName('send[]');
    for (var i = 0, n = checkboxes.length; i < n; i++) {
        checkboxes[i].checked = source.checked;
    }
}
</script>
<script>
$("#checkAll").click(function() {
    if ($(this).prop('checked')) {
        $(".check").attr('checked', true);
    } else {
        $(".check").attr('checked', false);
    }
    counter();
});

$(".check").change(function() {
    counter();
});

function counter() {
    var len = $(".check:checked").length;
    console.log(len);
    if (len > 0) {
        $("#count").val(len);
    } else {
        $("#count").val("");
    }
}
</script>
<script>
function exportTasks(_this) {
    let _url = $(_this).data('href');
    window.location.href = _url;
}
</script>
<script>
$(document).ready(function() {
    $("#textarea-counter").on("keyup", function() {
        var value = $("#textarea-counter").val();
        if (value.length == 10000) {
            var x = value.length / 160;
            document.getElementById("demo").innerHTML = x;
        } else {

            var x = value.length / 160;
            document.getElementById("demo").innerHTML = Math.ceil(x);
        }
    });
});
</script>
@endsection
