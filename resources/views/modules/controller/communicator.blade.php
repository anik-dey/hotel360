@extends('layouts.controllerlayout')
@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h3>Communicator <sub><small>Compose Your Message</small></sub></h3>
            </div>
            <form action="">
                <div class="card-body">
                    <div class="row d-flex justify-content-center">
                        <div class="col-md-8">
                            <div class="form-group">
                                <label for="recipient">Recipients:</label>
                                <label><button type="button" class="btn btn-primary btn-sm" id="select">Select
                                        All</button>
                                </label>
                                <label><button type="button" class="btn btn-danger btn-sm" id="deselect">Deselect
                                        All</button>
                                </label>
                                <div data-select2-id="145">
                                    <div class="position-relative" data-select2-id="144"><select
                                            class="form-control form-control-lg select2-hidden-accessible select2"
                                            data-select2-id="1" tabindex="-1" aria-hidden="true" id="recipients"
                                            name="recipients[]" multiple>
                                            <option value="AK" data-select2-id="3">Alaska</option>
                                            <option value="HI" data-select2-id="146">Hawaii</option>
                                            <option value="CA" data-select2-id="147">California</option>
                                            <option value="CA" data-select2-id="148">Nevada</option>
                                            <option value="OR" data-select2-id="149">Oregon</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="form-group">
                                <label for="communication">Communication Via:</label>
                                <select class="form-control" name="communication" id="communication">
                                    <option label="Please Select"></option>
                                    <option value="sms">SMS</option>
                                    <option value="email">Email</option>
                                    <option value="notification">System Notification</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="form-group">
                                <label for="subject">Subject:</label>
                                <input type="text" class="form-control" id="" placeholder="Promotion business">
                            </div>
                        </div>
                        <div class="col-md-8" id="showSMS" style="display: none;">
                            <div class="form-group" id="sms">
                                <label for="mytextarea">Message:</label>
                                <textarea class="form-control" rows="3"
                                    placeholder="Hi there, This is Dinislam from Hotel360"></textarea>
                            </div>
                        </div>
                        <div class="col-md-8" id="showEmail" style="display: none;">
                            <div class=" form-group">
                                <label for="mytextarea">Message:</label>
                                <textarea class="form-control" id="mytextarea" rows="3"
                                    placeholder="Hi there, This is Dinislam from Hotel360"></textarea>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="form-group d-flex justify-content-center">
                                <button class="btn btn-primary btn-block w-50">Send</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<script>
    $(document).ready(function() {
    $("#select").click(function() {
        $('.select2').val(["AK", "HI", "CA", "NV", "OR"]).trigger("change");;
    });
});
$(document).ready(function() {
    $("#deselect").click(function() {
        $('.select2').val(null).trigger("change");;
    });
});
</script>
<script>
    $(document).ready(function() {
    $('#communication').on('change', function() {
        var communicator = this.value;
        if (communicator == "sms") {
            document.getElementById("showSMS").style.display = ""
            document.getElementById("showEmail").style.display = "none"
        } else if (communicator == "email" || communicator == "notification") {
            document.getElementById("showEmail").style.display = ""
            document.getElementById("showSMS").style.display = "none"
        } else {
            alert("Please Select One");
        }
    });
});
</script>
@endsection