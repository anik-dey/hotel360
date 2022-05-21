@extends('layouts.contentLayoutHorizontal')
@section('content')
<form action="{{ route('common-settings.store') }}" method="POST">
    @csrf
    @method('POST')
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-md-3">
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="form-label" for="emailVerify">Property</label>
                        <select class="form-control select2" id="property_id" name="property_id"
                            onchange="location =this.value;" required>
                            <option label="Please Select"></option>
                            @foreach($property as $item )
                                <option value="{{ $item->id }}" @if($common_settings->property_id==$item->id)
                                    selected @endif>{{ $item->name }}
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
    <div class="card">
        <div class="card-body">
            <div class="form-wizard">
                <div class="navBox">
                    <div class="items" id="guest" tabindex="1">
                        <span>
                            <i data-feather='check-circle'></i>
                        </span>
                        <span class="item-text">
                            Guest Related
                        </span>
                    </div>
                    <div class="items" id="booking" tabindex="1">
                        <span>
                            <i data-feather='calendar'></i>
                        </span>
                        <span class="item-text">
                            Booking/Reservation Related
                        </span>
                    </div>
                    <div class="items" id="hr" tabindex="1">
                        <span>
                            <i data-feather='git-merge'></i>
                        </span>
                        <span class="item-text">
                            Human Resource Related
                        </span>
                    </div>
                    <div class="items" id="accounting" tabindex="1">
                        <span>
                            <i data-feather='dollar-sign'></i>
                        </span>
                        <span class="item-text">
                            Accounting Related
                        </span>
                    </div>
                    <div class="items" id="voucher" tabindex="1">
                        <span>
                            <i data-feather='file-minus'></i>
                        </span>
                        <span class="item-text">
                            Voucher Related
                        </span>
                    </div>
                    <div class="items" id="notification" tabindex="1">
                        <span>
                            <i data-feather='message-circle'></i>
                        </span>
                        <span class="item-text">
                            Notification/SMS/Email Related
                        </span>
                    </div>
                    <div class="items" id="report" tabindex="1">
                        <span>
                            <i data-feather='bar-chart-2'></i>
                        </span>
                        <span class="item-text">
                            Report Related
                        </span>
                    </div>
                    <div class="items" id="display" tabindex="1">
                        <span>
                            <i data-feather='cast'></i>
                        </span>
                        <span class="item-text">
                            Display Settings
                        </span>
                    </div>
                    <div class="items" id="printEmail" tabindex="1">
                        <span>
                            <i data-feather='printer'></i>
                        </span>
                        <span class="item-text">
                            Print And Email Settings
                        </span>
                    </div>
                    <div class="items" id="reservation" tabindex="1">
                        <span>
                            <i data-feather='check'></i>
                        </span>
                        <span class="item-text">
                            Check In/Reservation Settings
                        </span>
                    </div>
                    <div class="items" id="pagination" tabindex="1">
                        <span>
                            <i data-feather='chevrons-right'></i>
                        </span>
                        <span class="item-text">
                            Pagination Settings
                        </span>
                    </div>
                    <div class="items" id="document" tabindex="1">
                        <span>
                            <i data-feather='list'></i>
                        </span>
                        <span class="item-text">
                            Document Numbering Settings
                        </span>
                    </div>
                </div>
                <div class="formBox">
                    <div class="row" id="guest-form">
                        <div class="col-12 text-center mb-2">
                            <h3 class="border-bottom ml-1 mr-1 pb-1">Guest Related Form</h3>
                        </div>
                        <hr>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="form-label" for="emailVerify">Email Verification</label>
                                <select class="form-control select2" name="email_verification" id="emailVerify">
                                    <option value="0" @if($common_settings->email_verification=='0')
                                        selected @endif>Non-Mandatory
                                    </option>
                                    <option value="1" @if($common_settings->email_verification=='1')
                                        selected @endif>Mandatory</option>
                                    <option value="2" @if($common_settings->email_verification=='2')
                                        selected @endif>Hidden This Section</option>
                                    <option value="3" @if($common_settings ->email_verification=='3')
                                        selected @endif>Required For Staff</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="form-label" for="emailVerify">Phone Verification</label>
                                <select class="form-control select2" name="phone_verification" id="phoneVerify">
                                    <option value="0" @if($common_settings->phone_verification=='0')
                                        selected @endif>Non-Mandatory
                                    </option>
                                    <option value="1" @if($common_settings->phone_verification=='1')
                                        selected @endif>Mandatory</option>
                                    <option value="2" @if($common_settings->phone_verification=='2')
                                        selected @endif>Hidden This Section</option>
                                    <option value="3" @if($common_settings ->phone_verification=='3')
                                        selected @endif>Required For Staff</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="form-label" for="guestImage">Guest Image</label>
                                <select class="form-control select2" name="guest_image" id="guestImage">
                                    <option value="0" @if($common_settings ->guest_image=='0')
                                        selected @endif>Non-Mandatory</option>
                                    <option value="1" @if($common_settings ->guest_image=='1')
                                        selected @endif>Mandatory</option>
                                    <option value="2" @if($common_settings ->guest_image=='2')
                                        selected @endif>Hidden This Section</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="form-label" for="nid">National ID Number</label>
                                <select class="form-control select2" name="nid" id="nid">
                                    <option value="0" @if($common_settings ->nid=='0')
                                        selected @endif>Non-Mandatory</option>
                                    <option value="1" @if($common_settings ->nid=='1')
                                        selected @endif>Mandatory</option>
                                    <option value="2" @if($common_settings ->nid=='2')
                                        selected @endif>Hidden This Section</option>
                                    <option value="3" @if($common_settings ->nid=='3')
                                        selected @endif>Required For Staff</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="form-label" for="foreignerPassport">Foreigner Client Passport</label>
                                <select class="form-control select2" name="foreigner_client_passport"
                                    id="foreignerPassport">
                                    <option value="0" @if($common_settings ->foreigner_client_passport=='0')
                                        selected @endif>Non-Mandatory</option>
                                    <option value="1" @if($common_settings ->foreigner_client_passport=='1')
                                        selected @endif>Mandatory</option>
                                    <option value="2" @if($common_settings ->foreigner_client_passport=='2')
                                        selected @endif>Hidden This Section</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="form-label" for="foreignerPassportAttachment">Foreigner Client
                                    Passport Attachment</label>
                                <select class="form-control select2" name="foreigner_client_passport_attachment"
                                    id="foreignerPassportAttachment">
                                    <option value="0" @if($common_settings ->foreigner_client_passport_attachment=='0')
                                        selected @endif>Non-Mandatory</option>
                                    <option value="1" @if($common_settings ->foreigner_client_passport_attachment=='1')
                                        selected @endif>Mandatory</option>
                                    <option value="2" @if($common_settings ->foreigner_client_passport_attachment=='2')
                                        selected @endif>Hidden This Section</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="form-label" for="foreignerVisa">Foreigner Client
                                    Visa</label>
                                <select class="form-control select2" name="foreigner_client_visa" id="foreignerVisa">
                                    <option value="0" @if($common_settings ->foreigner_client_visa=='0')
                                        selected @endif>Non-Mandatory</option>
                                    <option value="1" @if($common_settings ->foreigner_client_visa=='1')
                                        selected @endif>Mandatory</option>
                                    <option value="2" @if($common_settings ->foreigner_client_visa=='2')
                                        selected @endif>Hidden This Section</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="form-label" for="foreignerVisaAttachment">Foreigner Client
                                    Visa Attachment</label>
                                <select class="form-control select2" name="foreigner_client_visa_attachment"
                                    id="foreignerVisaAttachment">
                                    <option value="0" @if($common_settings ->foreigner_client_visa_attachment=='0')
                                        selected @endif>Non-Mandatory</option>
                                    <option value="1" @if($common_settings ->foreigner_client_visa_attachment=='1')
                                        selected @endif>Mandatory</option>
                                    <option value="2" @if($common_settings ->foreigner_client_visa_attachment=='2')
                                        selected @endif>Hidden This Section</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div style="display: none" id="booking-form">
                        <p>Booking/Reservation Related Form</p>
                    </div>
                    <div style="display: none" id="hr-form">
                        <p>Human Resource Related Form</p>
                    </div>
                    <div style="display: none" id="accounting-form">
                        <p>Accounting Related Form</p>
                    </div>
                    <div style="display: none" id="voucher-form">
                        <p>Voucher Related Form</p>
                    </div>
                    <div style="display: none" id="notification-form">
                        <p>Notification/SMS/Email Related Form</p>
                    </div>
                    <div style="display: none" id="report-form">
                        <p>Report Related Form</p>
                    </div>
                    <div style="display: none" id="display-form">
                        <p>Display Related Form</p>
                    </div>
                    <div style="display: none" id="printEmail-form">
                        <p>Print And Email Related Form</p>
                    </div>
                    <div style="display: none" id="reservation-form">
                        <p>Check In/Reservation Related Form</p>
                    </div>
                    <div style="display: none" id="pagination-form">
                        <p>Pagination Related Form</p>
                    </div>
                    <div style="display: none" id="document-form">
                        <p>Document Numbering Related Form</p>
                    </div>
                </div>
            </div>
        </div>
        <button type="submit" class="btn btn-success"> Update Now</button>
    </div>
</form>
@endsection
@push('js')
    <script>
        $(document).ready(function () {
            $('#guest').click(function () {
                $('#booking-form').hide();
                $('#hr-form').hide();
                $('#accounting-form').hide();
                $('#voucher-form').hide();
                $('#notification-form').hide();
                $('#report-form').hide();
                $('#display-form').hide();
                $('#printEmail-form').hide();
                $('#reservation-form').hide();
                $('#pagination-form').hide();
                $('#document-form').hide();
                $('#guest-form').show('slow');
            });
            $('#booking').click(function () {
                $('#guest-form').hide();
                $('#hr-form').hide();
                $('#accounting-form').hide();
                $('#voucher-form').hide();
                $('#notification-form').hide();
                $('#report-form').hide();
                $('#display-form').hide();
                $('#printEmail-form').hide();
                $('#reservation-form').hide();
                $('#pagination-form').hide();
                $('#document-form').hide();
                $('#booking-form').show('slow');
            });
            $('#hr').click(function () {
                $('#guest-form').hide();
                $('#booking-form').hide();
                $('#accounting-form').hide();
                $('#voucher-form').hide();
                $('#notification-form').hide();
                $('#report-form').hide();
                $('#display-form').hide();
                $('#printEmail-form').hide();
                $('#reservation-form').hide();
                $('#pagination-form').hide();
                $('#document-form').hide();
                $('#hr-form').show('slow');
            });
            $('#accounting').click(function () {
                $('#guest-form').hide();
                $('#booking-form').hide();
                $('#hr-form').hide();
                $('#voucher-form').hide();
                $('#notification-form').hide();
                $('#report-form').hide();
                $('#display-form').hide();
                $('#printEmail-form').hide();
                $('#reservation-form').hide();
                $('#pagination-form').hide();
                $('#document-form').hide();
                $('#accounting-form').show('slow');
            });
            $('#voucher').click(function () {
                $('#guest-form').hide();
                $('#booking-form').hide();
                $('#hr-form').hide();
                $('#accounting-form').hide();
                $('#notification-form').hide();
                $('#report-form').hide();
                $('#display-form').hide();
                $('#printEmail-form').hide();
                $('#reservation-form').hide();
                $('#pagination-form').hide();
                $('#document-form').hide();
                $('#voucher-form').show('slow');
            });
            $('#notification').click(function () {
                $('#guest-form').hide();
                $('#booking-form').hide();
                $('#hr-form').hide();
                $('#hr-form').hide();
                $('#voucher-form').hide();
                $('#report-form').hide();
                $('#display-form').hide();
                $('#printEmail-form').hide();
                $('#reservation-form').hide();
                $('#pagination-form').hide();
                $('#document-form').hide();
                $('#notification-form').show('slow');
            });
            $('#report').click(function () {
                $('#guest-form').hide();
                $('#booking-form').hide();
                $('#hr-form').hide();
                $('#hr-form').hide();
                $('#voucher-form').hide();
                $('#notification-form').hide();
                $('#display-form').hide();
                $('#printEmail-form').hide();
                $('#reservation-form').hide();
                $('#pagination-form').hide();
                $('#document-form').hide();
                $('#report-form').show('slow');
            });
            $('#display').click(function () {
                $('#guest-form').hide();
                $('#booking-form').hide();
                $('#hr-form').hide();
                $('#hr-form').hide();
                $('#voucher-form').hide();
                $('#notification-form').hide();
                $('#report-form').hide();
                $('#printEmail-form').hide();
                $('#reservation-form').hide();
                $('#pagination-form').hide();
                $('#document-form').hide();
                $('#display-form').show('slow');
            });
            $('#printEmail').click(function () {
                $('#guest-form').hide();
                $('#booking-form').hide();
                $('#hr-form').hide();
                $('#hr-form').hide();
                $('#voucher-form').hide();
                $('#notification-form').hide();
                $('#report-form').hide();
                $('#display-form').hide();
                $('#reservation-form').hide();
                $('#pagination-form').hide();
                $('#document-form').hide();
                $('#printEmail-form').show('show');
            });
            $('#reservation').click(function () {
                $('#guest-form').hide();
                $('#booking-form').hide();
                $('#hr-form').hide();
                $('#hr-form').hide();
                $('#voucher-form').hide();
                $('#notification-form').hide();
                $('#report-form').hide();
                $('#display-form').hide();
                $('#printEmail-form').hide();
                $('#pagination-form').hide();
                $('#document-form').hide();
                $('#reservation-form').show('show');
            });
            $('#pagination').click(function () {
                $('#guest-form').hide();
                $('#booking-form').hide();
                $('#hr-form').hide();
                $('#hr-form').hide();
                $('#voucher-form').hide();
                $('#notification-form').hide();
                $('#report-form').hide();
                $('#display-form').hide();
                $('#printEmail-form').hide();
                $('#reservation-form').hide();
                $('#document-form').hide();
                $('#pagination-form').show('show');
            });
            $('#document').click(function () {
                $('#guest-form').hide();
                $('#booking-form').hide();
                $('#hr-form').hide();
                $('#hr-form').hide();
                $('#voucher-form').hide();
                $('#notification-form').hide();
                $('#report-form').hide();
                $('#display-form').hide();
                $('#printEmail-form').hide();
                $('#reservation-form').hide();
                $('#pagination-form').hide();
                $('#document-form').show('show');
            });

        })

    </script>
@endpush
