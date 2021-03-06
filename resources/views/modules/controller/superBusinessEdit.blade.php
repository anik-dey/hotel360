@extends('layouts.controllerlayout')
@section('content')
<form action="">
    <div class="card">
        <div class="col-md-12">
            <div class="card-header">
                <h4 class="card-title"><b>Edit Business</b> </h4>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-6 col-sm-12">
                        <div class="form-group">
                            <label for="businessName">Business Name:</label>
                            <input type="text" class="form-control" id="businessName"
                                placeholder="Enter your business name" />
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-12">
                        <div class="form-group">
                            <label for="basicInput">Start Date:</label>
                            <input type="text" id="fp-default" class="form-control flatpickr-basic"
                                placeholder="YYYY-MM-DD" />
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-12">
                        <div class="form-group">
                            <label for="basicInput">Currency:</label>
                            <select class="select2 form-control form-control-lg">
                                <option>Select currency</option>
                                <option value="AFN">AFN - Afghan Afghani</option>
                                <option value="ALL">ALL - Albanian Lek</option>
                                <option value="DZD">DZD - Algerian Dinar</option>
                                <option value="AOA">AOA - Angolan Kwanza</option>
                                <option value="ARS">ARS - Argentine Peso</option>
                                <option value="AMD">AMD - Armenian Dram</option>
                                <option value="AWG">AWG - Aruban Florin</option>
                                <option value="AUD">AUD - Australian Dollar</option>
                                <option value="AZN">AZN - Azerbaijani Manat</option>
                                <option value="BSD">BSD - Bahamian Dollar</option>
                                <option value="BHD">BHD - Bahraini Dinar</option>
                                <option value="BDT">BDT - Bangladeshi Taka</option>
                                <option value="BBD">BBD - Barbadian Dollar</option>
                                <option value="BYR">BYR - Belarusian Ruble</option>
                                <option value="BEF">BEF - Belgian Franc</option>
                                <option value="BZD">BZD - Belize Dollar</option>
                                <option value="BMD">BMD - Bermudan Dollar</option>
                                <option value="BTN">BTN - Bhutanese Ngultrum</option>
                                <option value="BTC">BTC - Bitcoin</option>
                                <option value="BOB">BOB - Bolivian Boliviano</option>
                                <option value="BAM">BAM - Bosnia-Herzegovina</option>
                                <option value="BWP">BWP - Botswanan Pula</option>
                                <option value="BRL">BRL - Brazilian Real</option>
                                <option value="GBP">GBP - British Pound Sterling</option>
                                <option value="BND">BND - Brunei Dollar</option>
                                <option value="BGN">BGN - Bulgarian Lev</option>
                                <option value="BIF">BIF - Burundian Franc</option>
                                <option value="KHR">KHR - Cambodian Riel</option>
                                <option value="CAD">CAD - Canadian Dollar</option>
                                <option value="CVE">CVE - Cape Verdean Escudo</option>
                                <option value="KYD">KYD - Cayman Islands Dollar</option>
                                <option value="XOF">XOF - CFA Franc BCEAO</option>
                                <option value="XAF">XAF - CFA Franc BEAC</option>
                                <option value="XPF">XPF - CFP Franc</option>
                                <option value="CLP">CLP - Chilean Peso</option>
                                <option value="CNY">CNY - Chinese Yuan</option>
                                <option value="COP">COP - Colombian Peso</option>
                                <option value="KMF">KMF - Comorian Franc</option>
                                <option value="CDF">CDF - Congolese Franc</option>
                                <option value="CRC">CRC - Costa Rican Col????n</option>
                                <option value="HRK">HRK - Croatian Kuna</option>
                                <option value="CUC">CUC - Cuban Convertible Peso</option>
                                <option value="CZK">CZK - Czech Republic Koruna</option>
                                <option value="DKK">DKK - Danish Krone</option>
                                <option value="DJF">DJF - Djiboutian Franc</option>
                                <option value="DOP">DOP - Dominican Peso</option>
                                <option value="XCD">XCD - East Caribbean Dollar</option>
                                <option value="EGP">EGP - Egyptian Pound</option>
                                <option value="ERN">ERN - Eritrean Nakfa</option>
                                <option value="EEK">EEK - Estonian Kroon</option>
                                <option value="ETB">ETB - Ethiopian Birr</option>
                                <option value="EUR">EUR - Euro</option>
                                <option value="FKP">FKP - Falkland Islands Pound</option>
                                <option value="FJD">FJD - Fijian Dollar</option>
                                <option value="GMD">GMD - Gambian Dalasi</option>
                                <option value="GEL">GEL - Georgian Lari</option>
                                <option value="DEM">DEM - German Mark</option>
                                <option value="GHS">GHS - Ghanaian Cedi</option>
                                <option value="GIP">GIP - Gibraltar Pound</option>
                                <option value="GRD">GRD - Greek Drachma</option>
                                <option value="GTQ">GTQ - Guatemalan Quetzal</option>
                                <option value="GNF">GNF - Guinean Franc</option>
                                <option value="GYD">GYD - Guyanaese Dollar</option>
                                <option value="HTG">HTG - Haitian Gourde</option>
                                <option value="HNL">HNL - Honduran Lempira</option>
                                <option value="HKD">HKD - Hong Kong Dollar</option>
                                <option value="HUF">HUF - Hungarian Forint</option>
                                <option value="ISK">ISK - Icelandic Kr????na</option>
                                <option value="INR">INR - Indian Rupee</option>
                                <option value="IDR">IDR - Indonesian Rupiah</option>
                                <option value="IRR">IRR - Iranian Rial</option>
                                <option value="IQD">IQD - Iraqi Dinar</option>
                                <option value="ILS">ILS - Israeli New Sheqel</option>
                                <option value="ITL">ITL - Italian Lira</option>
                                <option value="JMD">JMD - Jamaican Dollar</option>
                                <option value="JPY">JPY - Japanese Yen</option>
                                <option value="JOD">JOD - Jordanian Dinar</option>
                                <option value="KZT">KZT - Kazakhstani Tenge</option>
                                <option value="KES">KES - Kenyan Shilling</option>
                                <option value="KWD">KWD - Kuwaiti Dinar</option>
                                <option value="KGS">KGS - Kyrgystani Som</option>
                                <option value="LAK">LAK - Laotian Kip</option>
                                <option value="LVL">LVL - Latvian Lats</option>
                                <option value="LBP">LBP - Lebanese Pound</option>
                                <option value="LSL">LSL - Lesotho Loti</option>
                                <option value="LRD">LRD - Liberian Dollar</option>
                                <option value="LYD">LYD - Libyan Dinar</option>
                                <option value="LTL">LTL - Lithuanian Litas</option>
                                <option value="MOP">MOP - Macanese Pataca</option>
                                <option value="MKD">MKD - Macedonian Denar</option>
                                <option value="MGA">MGA - Malagasy Ariary</option>
                                <option value="MWK">MWK - Malawian Kwacha</option>
                                <option value="MYR">MYR - Malaysian Ringgit</option>
                                <option value="MVR">MVR - Maldivian Rufiyaa</option>
                                <option value="MRO">MRO - Mauritanian Ouguiya</option>
                                <option value="MUR">MUR - Mauritian Rupee</option>
                                <option value="MXN">MXN - Mexican Peso</option>
                                <option value="MDL">MDL - Moldovan Leu</option>
                                <option value="MNT">MNT - Mongolian Tugrik</option>
                                <option value="MAD">MAD - Moroccan Dirham</option>
                                <option value="MZM">MZM - Mozambican Metical</option>
                                <option value="MMK">MMK - Myanmar Kyat</option>
                                <option value="NAD">NAD - Namibian Dollar</option>
                                <option value="NPR">NPR - Nepalese Rupee</option>
                                <option value="ANG">ANG - Netherlands Antillean Guilder</option>
                                <option value="TWD">TWD - New Taiwan Dollar</option>
                                <option value="NZD">NZD - New Zealand Dollar</option>
                                <option value="NIO">NIO - Nicaraguan C????rdoba</option>
                                <option value="NGN">NGN - Nigerian Naira</option>
                                <option value="KPW">KPW - North Korean Won</option>
                                <option value="NOK">NOK - Norwegian Krone</option>
                                <option value="OMR">OMR - Omani Rial</option>
                                <option value="PKR">PKR - Pakistani Rupee</option>
                                <option value="PAB">PAB - Panamanian Balboa</option>
                                <option value="PGK">PGK - Papua New Guinean Kina</option>
                                <option value="PYG">PYG - Paraguayan Guarani</option>
                                <option value="PEN">PEN - Peruvian Nuevo Sol</option>
                                <option value="PHP">PHP - Philippine Peso</option>
                                <option value="PLN">PLN - Polish Zloty</option>
                                <option value="QAR">QAR - Qatari Rial</option>
                                <option value="RON">RON - Romanian Leu</option>
                                <option value="RUB">RUB - Russian Ruble</option>
                                <option value="RWF">RWF - Rwandan Franc</option>
                                <option value="SVC">SVC - Salvadoran Col????n</option>
                                <option value="WST">WST - Samoan Tala</option>
                                <option value="SAR">SAR - Saudi Riyal</option>
                                <option value="RSD">RSD - Serbian Dinar</option>
                                <option value="SCR">SCR - Seychellois Rupee</option>
                                <option value="SLL">SLL - Sierra Leonean Leone</option>
                                <option value="SGD">SGD - Singapore Dollar</option>
                                <option value="SKK">SKK - Slovak Koruna</option>
                                <option value="SBD">SBD - Solomon Islands Dollar</option>
                                <option value="SOS">SOS - Somali Shilling</option>
                                <option value="ZAR">ZAR - South African Rand</option>
                                <option value="KRW">KRW - South Korean Won</option>
                                <option value="XDR">XDR - Special Drawing Rights</option>
                                <option value="LKR">LKR - Sri Lankan Rupee</option>
                                <option value="SHP">SHP - St. Helena Pound</option>
                                <option value="SDG">SDG - Sudanese Pound</option>
                                <option value="SRD">SRD - Surinamese Dollar</option>
                                <option value="SZL">SZL - Swazi Lilangeni</option>
                                <option value="SEK">SEK - Swedish Krona</option>
                                <option value="CHF">CHF - Swiss Franc</option>
                                <option value="SYP">SYP - Syrian Pound</option>
                                <option value="STD">STD - S??o Tom?? and Pr??ncipe Dobra</option>
                                <option value="TJS">TJS - Tajikistani Somoni</option>
                                <option value="TZS">TZS - Tanzanian Shilling</option>
                                <option value="THB">THB - Thai Baht</option>
                                <option value="TOP">TOP - Tongan pa'anga</option>
                                <option value="TTD">TTD - Trinidad & Tobago Dollar</option>
                                <option value="TND">TND - Tunisian Dinar</option>
                                <option value="TRY">TRY - Turkish Lira</option>
                                <option value="TMT">TMT - Turkmenistani Manat</option>
                                <option value="UGX">UGX - Ugandan Shilling</option>
                                <option value="UAH">UAH - Ukrainian Hryvnia</option>
                                <option value="AED">AED - United Arab Emirates Dirham</option>
                                <option value="UYU">UYU - Uruguayan Peso</option>
                                <option value="USD">USD - US Dollar</option>
                                <option value="UZS">UZS - Uzbekistan Som</option>
                                <option value="VUV">VUV - Vanuatu Vatu</option>
                                <option value="VEF">VEF - Venezuelan Bol????var</option>
                                <option value="VND">VND - Vietnamese Dong</option>
                                <option value="YER">YER - Yemeni Rial</option>
                                <option value="ZMK">ZMK - Zambian Kwacha</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-12">
                        <div class="form-group">
                            <label for="website">Website:</label>
                            <input type="text" id="website" class="form-control" placeholder="www.hetel360.in" />
                        </div>
                    </div>
                    <div class="col-lg-12 col-sm-12">
                        <div class="form-group d-flex justify-content-between align-items-center">
                            <label for="basicInput">Upload Logo:</label>
                            <button style="width:30%" id="clear-dropzone mr-1" class="btn btn-outline-primary">
                                <i data-feather="trash" class="mr-25"></i>
                                <span class="align-middle">Clear Dropzone</span>
                            </button>
                            <div style="min-height: 30px !important;width:50%" action="#"
                                class="dropzone dropzone-area rounded" id="dpz-remove-all-thumb">
                                <div class="dz-message"><small>Drop files here or click to
                                        upload.</small></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-12">
                        <div class="form-group">
                            <label for="businessNumber">Business contact number:</label>
                            <input type="number" id="businessNumber" class="form-control" placeholder="+99000000000" />
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-12">
                        <div class="form-group">
                            <label for="altBusinessNumber">Alternate contact number:</label>
                            <input type="number" id="altBusinessNumber" class="form-control"
                                placeholder="+99000000000" />
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-12">
                        <div class="form-group">
                            <label for="country">Country:</label>
                            <select class="select2 form-control form-control-lg" name="desh" id="country">
                                <option>Select Your Country</option>
                                <option value="">Bangladesh</option>
                                <option value="">India</option>
                                <option value="">Nepal</option>
                                <option value="">Mayanmar</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-12">
                        <div class="form-group">
                            <label for="state">State:</label>
                            <select class="select2 form-control form-control-lg" name="desh" id="state">
                                <option>Select Your State</option>
                                <option value="">Dhaka</option>
                                <option value="">Chittagong</option>
                                <option value="">Barisal</option>
                                <option value="">Cumilla</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-12">
                        <div class="form-group">
                            <label for="city">City:</label>
                            <select class="select2 form-control form-control-lg" name="desh" id="city">
                                <option>Select Your City</option>
                                <option value="">Dhaka</option>
                                <option value="">Narayongonj</option>
                                <option value="">Gazipur</option>
                                <option value="">Chandpur</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-12">
                        <div class="form-group">
                            <label for="zipcode">ZIP Code:</label>
                            <input type="number" id="zipcode" class="form-control" placeholder="6573" />
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-12">
                        <div class="form-group">
                            <label for="prefix">Prfix:</label>
                            <input type="text" id="prefix" class="form-control" placeholder="Mr/Mrs/Miss" />
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-12">
                        <div class="form-group">
                            <label for="fName">First Name:</label>
                            <input type="text" id="fName" class="form-control" placeholder="John" />
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-12">
                        <div class="form-group">
                            <label for="lName">Last Name:</label>
                            <input type="text" id="lName" class="form-control" placeholder="Doe" />
                        </div>
                    </div>
                </div>
                <hr>
                {{-- user --}}
                <div class="row">
                    <div class="col-lg-6 col-sm-12">
                        <div class="form-group">
                            <label for="username">Username:</label>
                            <input type="text" id="username" class="form-control" placeholder=" johndoe" />
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-12">
                        <div class="form-group">
                            <label for="email">Email:</label>
                            <input type="email" class="form-control" placeholder=" hotel360@gmail.com" />
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-12">
                        <div class="form-group">
                            <label for="password">Password:</label>
                            <input type="password" class="form-control" placeholder=" ********" />
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-12">
                        <div class="form-group">
                            <label for="confirmPassword">Confirm Password:</label>
                            <input type="password" class="form-control" placeholder=" ********" />
                        </div>
                    </div>
                </div>
                {{-- package and payment --}}
                <div class="row">
                    <div class="col-md-4">
                        <label>Packages:</label>
                        <select class="select2 form-control form-control-lg">
                            <option selected> Please Select Package</option>
                            <option value="1">Package 1</option>
                            <option value="2">Package 2</option>
                            <option value="3">Package 3</option>
                        </select>
                    </div>
                    <div class="col-md-4">
                        <label>Paid Via:</label>
                        <select class="select2 form-control form-control-lg">
                            <option selected> Please Select</option>
                            <option value="1">Bank</option>
                            <option value="2">Card</option>
                            <option value="3">Offline</option>
                        </select>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="confirmPassword">Transaction ID:</label>
                            <input type="text" class="form-control" placeholder="27HSG384HD" />
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <button type="button" class="btn btn-primary btn-block">Submit</button>
                </div>
            </div>
        </div>
    </div>
</form>
@endsection