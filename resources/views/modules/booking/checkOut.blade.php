@extends('layouts.master')
@section('title', 'Check Out')
@section('content')
<div class="row" style="margin: 0px 3px">
    <div class="card mx-1" style="width: 100%">
        <div class="card-header">
            <div class="input-group justify-content-center">
                <div class="form-outline" style="width:50%">
                    <input type="search" id="form1" class="form-control" placeholder="Search By Room" />
                </div>
                <button type="button" class="btn btn-primary" style="width:80px">
                    <svg width="15" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                        <path
                            d="M500.3 443.7l-119.7-119.7c27.22-40.41 40.65-90.9 33.46-144.7C401.8 87.79 326.8 13.32 235.2 1.723C99.01-15.51-15.51 99.01 1.724 235.2c11.6 91.64 86.08 166.7 177.6 178.9c53.8 7.189 104.3-6.236 144.7-33.46l119.7 119.7c15.62 15.62 40.95 15.62 56.57 0C515.9 484.7 515.9 459.3 500.3 443.7zM79.1 208c0-70.58 57.42-128 128-128s128 57.42 128 128c0 70.58-57.42 128-128 128S79.1 278.6 79.1 208z" />
                    </svg>
                </button>
            </div>
        </div>
        <div class="card-body">
            <div class="text-center">
                <h2>Customer Details</h2>
            </div>
            <div>
                <table class="table table-hover">
                    <tr>
                        <th>Name</th>
                        <td>Tamara</td>
                    </tr>
                    <tr>
                        <th>Room No.</th>
                        <td>803,108</td>
                    </tr>
                    <tr>
                        <th>Booking No.</th>
                        <td>00000233</td>
                    </tr>
                    <tr>
                        <th>Email ID</th>
                        <td>test@gmail.com</td>
                    </tr>
                    <tr>
                        <th>Mobile No</th>
                        <td>6767567567</td>
                    </tr>
                    <tr>
                        <th>Address</th>
                        <td>Dolor fugiat possimu</td>
                    </tr>
                    <tr>
                        <th>Time Format</th>
                        <td>24hrs</td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
    <div class="card mx-1">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered table-sm">
                    <tr>
                        <th>Room No.</th>
                        <th>Date</th>
                        <th class="text-center">Room Rent Details</th>
                    </tr>
                    <tr>
                        <td>803,108 <br>
                            VIP ,VIP-Guest</td>
                        <td>
                            7th Feb 12:00 to
                            8th Feb 10:00
                            <hr> Adults : 2,3
                            <hr>
                            Children : 0,0
                        </td>
                        <td style="padding: 2px;">
                            <div class="table-responsive">
                                <table class="table table-bordered table-sm">
                                    <tr>
                                        <th>SL</th>
                                        <th>From Date</th>
                                        <th>To Date</th>
                                        <th>NoD</th>
                                        <th>($) Rent/ Day</th>
                                        <th>($) Rent Discount</th>
                                        <th>($) Dis./ Day</th>
                                        <th>($) Amt. Aft Dis.</th>
                                        <th>($) Tot. Rent</th>
                                        <th>($) Tax</th>
                                        <th>($) Tot. Amt.</th>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td>2022-02-07 12:00:00</td>
                                        <td>2022-02-08 10:00:00</td>
                                        <td>1</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>(RST3.00% )0 <br>
                                            (GST4.00% )0<br>
                                            (DST4.00% )0<br>
                                            (MSL3.50% )0
                                        </td>
                                        <td>0</td>
                                        <td>0</td>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td>2022-02-07 12:00:00</td>
                                        <td>2022-02-08 10:00:00</td>
                                        <td>1</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>(RST3.00% )0 <br>
                                            (GST4.00% )0<br>
                                            (DST4.00% )0<br>
                                            (MSL3.50% )0
                                        </td>
                                        <td>0</td>
                                        <td>0</td>
                                    </tr>
                                </table>
                            </div>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
    <div class="col-lg-4 pl-0 pr-0 mt-1">
        <div class="card mx-1" style="height:100%">
            <div class="card-header">
                <h3 class="fw-bolder">Billing Details</h3>
            </div>
            <div class="card-body">
                <table class="table table-borderless">
                    <tr>
                        <th class="pl-0">Room Rent Amt.</th>
                        <td>$4000</td>
                    </tr>
                    <tr>
                        <th class="pl-0" style="width: 60%">Discount (Max-100%) <br> <input class="form-control"
                                type="number" name="" id=""><label for="">(%)
                                (or)</label> <br> <input class="form-control" type="text" name="" id=""> (amount)

                        </th>
                        <td class="pl-0 pr-0">
                            <select class="form-control" name="" id="">
                                <option value="" selected>No Discount</option>
                                <option value="">Offer</option>
                                <option value="">Reduction</option>
                                <option value="">MD Guest</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <th class="pl-0 pr-0">Discount Amt.</th>
                        <td class="pl-0 pr-0 text-right">$0</td>
                    </tr>
                    <tr>
                        <th class="pl-0 pr-0">Service Charge Amt.</th>
                        <td class="pl-0 pr-0 text-right">$280</td>
                    </tr>
                    <tr>
                        <th class="pl-0 pr-0">Total Room Rent Amt.</th>
                        <td class="pl-0 pr-0 text-right">$4000</td>
                    </tr>
                    <tr>
                        <th class="pl-0 pr-0">Total Room Rent Amt. With Tax.</th>
                        <td class="pl-0 pr-0 text-right">$4860.00</td>
                    </tr>
                    <tr>
                        <th class="pl-0 pr-0">Complementary Amt.</th>
                        <td class="pl-0 pr-0 text-right">$0</td>
                    </tr>
                    <tr>
                        <th class="pl-0 pr-0" class="pl-0 pr-0">Ex. Bed /Per. /Ch. Amt.</th>
                        <td class="pl-0 pr-0 text-right" class="pl-0 pr-0">$450</td>
                    </tr>
                    <tr>
                        <th class="pl-0 pr-0">Advance Amt.</th>
                        <td class="pl-0 pr-0 text-right">$0</td>
                    </tr>
                    <tr>
                        <th class="pl-0 pr-0">Payable Rent Amt.</th>
                        <td class="pl-0 pr-0 text-right">$5310.00</td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
    <div class="col-lg-4 pr-0 pl-0 mt-1">
        <div class="card mx-1" style="height:100%">
            <div class="card-header">
                <h3 class="fw-bolder">Additional Charges</h3>
            </div>
            <div class="card-body">
                <table class="table table-borderless">
                    <tr>
                        <th class="pl-0">Additional Charges</th>
                        <td class="pl-0 pr-0 text-right"><input class="form-control" type="number" name="" id=""></td>
                    </tr>
                    <tr>
                        <th class="pl-0">Additional Charges comment</th>
                        <td class="pl-0 pr-0 text-right"><textarea class="form-control" type="number" name=""
                                id=""></textarea></td>
                    </tr>
                </table>
                <hr>
                <br><br>
                <div>
                    <h3 class="fw-bolder">Payments Details</h3>
                </div>
                <table class="table table-borderless">
                    <tr>
                        <th class="pl-0">Net Payable Amt</th>
                        <td class="pl-0 pr-0 text-right">$5310.00</td>
                    </tr>
                    <tr>
                        <th class="pl-0">Credit Amt.</th>
                        <td class="pl-0 pr-0 text-right">$00</td>
                    </tr>
                    <tr>
                        <th class="pl-0">Special Discount Amt</th>
                        <td class="pl-0 pr-0 text-right">$00</td>
                    </tr>
                    <tr>
                        <th class="pl-0">Payable Amt.</th>
                        <td class="pl-0 pr-0 text-right">$530</td>
                    </tr>
                </table>
            </div>

        </div>
    </div>
    <div class="col-lg-4 pl-0 pr-0 mt-1">
        <div class="card mx-1" style="height:100%">
            <div class="card-header">
                <h3 class="fw-bolder">Room Posted Bill</h3>
            </div>
            <div class="card-body">
                <table class="table table-bordered table-sm">
                    <tr>
                        <th>Bill Type</th>
                        <th>($)Total</th>
                        <th>Action</th>
                    </tr>
                    <tr>
                        <td>Swimming Pool</td>
                        <td>0</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Restaurant</td>
                        <td>0</td>
                        <td></td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
    <div class="col-lg-6 mt-1 pl-0 pr-0">
        <div class="card mx-1" style="height: 100%">
            <h4 class="card-header fw-bolder">Credit</h4>
            <hr>
            <div class="card-body">
                <table class="table table-borderless">
                    <tr>
                        <th class="pl-0">Type</th>
                        <td class="pr-0">
                            <select class="form-control" name="" id="">
                                <option value="" selected>No Credit</option>
                                <option value="">Admin</option>
                                <option value="">Regular Customar</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <th class="pl-0">($) Credit Amt.</th>
                        <td class="pr-0">
                            <input class="form-control" type="number" name="" id="">
                        </td>
                    </tr>
                    <tr>
                        <th class="pl-0">Remarks</th>
                        <td class="pr-0">
                            <textarea class="form-control" type="number" name="" id=""></textarea>
                        </td>
                    </tr>
                </table>
                <br><br>
                <h3 class="fw-bolder">Bill Settlement</h3>
                <hr>
                <table class="table table-borderless table-sm">
                    <tr>
                        <th>Payment Mode</th>
                        <th>Amount</th>
                        <th>Action</th>
                    </tr>
                    <tr>
                        <td class="p-0" style="width: 40%">
                            <select class="form-control" name="" id="">
                                <option value="" selected> Choose Payment Mode</option>
                                <option value=""> Bank Payment </option>
                                <option value=""> SSL Commerze </option>
                                <option value=""> Cash Payment </option>
                                <option value=""> Paypal </option>
                                <option value=""> Card Payment </option>
                            </select>
                        </td>
                        <td><input class="form-control" type="number" name="" id=""></td>
                        <td>
                            <svg width="20px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                <path
                                    d="M0 256C0 114.6 114.6 0 256 0C397.4 0 512 114.6 512 256C512 397.4 397.4 512 256 512C114.6 512 0 397.4 0 256zM175 208.1L222.1 255.1L175 303C165.7 312.4 165.7 327.6 175 336.1C184.4 346.3 199.6 346.3 208.1 336.1L255.1 289.9L303 336.1C312.4 346.3 327.6 346.3 336.1 336.1C346.3 327.6 346.3 312.4 336.1 303L289.9 255.1L336.1 208.1C346.3 199.6 346.3 184.4 336.1 175C327.6 165.7 312.4 165.7 303 175L255.1 222.1L208.1 175C199.6 165.7 184.4 165.7 175 175C165.7 184.4 165.7 199.6 175 208.1V208.1z" />
                            </svg>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
    <div class="col-lg-6 mt-1">
        <div class="card" style="height: 100%">
            <h4 class="card-header fw-bolder">Special Discount</h4>
            <hr>
            <div class="card-body">
                <table class="table table-borderless">
                    <tr>
                        <th class="pl-0">Type</th>
                        <td class="pr-0">
                            <select class="form-control" name="" id="">
                                <option value="" selected> No Discount</option>
                                <option value=""> MD's Friend</option>
                                <option value=""> Friend </option>
                                <option value=""> Regular Customer </option>
                                <option value=""> NC Order </option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <th class="pl-0">($)Discount Amt.</th>
                        <td class="pr-0">
                            <input class="form-control" type="number" name="" id="">
                        </td>
                    </tr>
                    <tr>
                        <th class="pl-0">Remarks</th>
                        <td class="pr-0">
                            <textarea class="form-control" type="number" name="" id=""></textarea>
                        </td>
                    </tr>
                </table>
                <br><br>
                <h3 class="fw-bolder">Balance Details</h3>
                <table class="table">
                    <tr>
                        <th>Remain Amt.</th>
                        <td>$5310</td>
                    </tr>
                    <tr>
                        <th>Collected Amt.</th>
                        <td>$0.00</td>
                    </tr>
                    <tr>
                        <th>Change Amt.</th>
                        <td>$0.00</td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</div>
<div class="d-flex flex-row justify-content-center">
    <div class="col-sm-6 mt-2 mb-">
        <button type="button" class="btn btn-primary btn-lg btn-block">Print</button>
    </div>
    <div class="col-sm-6 mt-2 mb-">
        <button type="button" class="btn btn-warning btn-lg btn-block">Check Out</button>
    </div>
</div>
@endsection