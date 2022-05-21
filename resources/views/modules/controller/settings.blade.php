@extends('layouts.controllerlayout')
@section('content')
<form action="">
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header">
                    <h2>Super Admin Settings <sub><small>Edit Settings</small></sub> </h2>
                </div>
                <div class="card-body">
                    <div class="row">
                        {{-- Admin Setting Start --}}
                        <div class="col-12 text-center">
                            <hr>
                            <h3>Admin Settings</h3>
                        </div>
                        <div class="col-md-4 col-sm-12">
                            <div class="form-group">
                                <label for="businessName">Business Name:</label>
                                <input type="text" id="businessName" class="form-control" placeholder="Dhaka Hotel" />
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-12">
                            <div class="form-group">
                                <label for="email">Email:</label>
                                <input type="email" id="email" class="form-control" placeholder="hetel360@gmail.com" />
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-12">
                            <div class="form-group">
                                <label for="currency">Currency:</label>
                                <select class="select2 form-control form-control-lg" id="currency">
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
                                    <option value="CRC">CRC - Costa Rican ColÃ³n</option>
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
                                    <option value="ISK">ISK - Icelandic KrÃ³na</option>
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
                                    <option value="NIO">NIO - Nicaraguan CÃ³rdoba</option>
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
                                    <option value="SVC">SVC - Salvadoran ColÃ³n</option>
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
                                    <option value="STD">STD - São Tomé and Príncipe Dobra</option>
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
                                    <option value="VEF">VEF - Venezuelan BolÃ­var</option>
                                    <option value="VND">VND - Vietnamese Dong</option>
                                    <option value="YER">YER - Yemeni Rial</option>
                                    <option value="ZMK">ZMK - Zambian Kwacha</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-12">
                            <div class="form-group">
                                <label for="country">Country:</label>
                                <select class="select2 form-control form-control-lg" name="desh" id="country">
                                    <option label="Select Your Country"></option>
                                    <option value="ban">Bangladesh</option>
                                    <option value="ind">India</option>
                                    <option value="nep">Nepal</option>
                                    <option value="may">Mayanmar</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-12">
                            <div class="form-group">
                                <label for="state">State:</label>
                                <select class="select2 form-control form-control-lg" name="desh" id="state">
                                    <option>Select Your State</option>
                                    <option value="dha">Dhaka</option>
                                    <option value="chi">Chittagong</option>
                                    <option value="bar">Barisal</option>
                                    <option value="cum">Cumilla</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-12">
                            <div class="form-group">
                                <label for="city">City:</label>
                                <select class="select2 form-control form-control-lg" name="desh" id="city">
                                    <option>Select Your City</option>
                                    <option value="dha">Dhaka</option>
                                    <option value="nar">Narayongonj</option>
                                    <option value="gaz">Gazipur</option>
                                    <option value="cha">Chandpur</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-12">
                            <div class="form-group">
                                <label for="zipcode">ZIP Code:</label>
                                <input type="number" id="zipcode" class="form-control" placeholder="6573" />
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-12">
                            <div class="form-group">
                                <label for="alert">Min days for subscription expiry alert:</label>
                                <input type="number" id="alert" class="form-control" placeholder="30 days" />
                            </div>
                        </div>
                        {{-- Application Settings Start --}}
                        <div class="col-12 text-center">
                            <hr>
                            <h3>Application Settings</h3>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <div class="form-group">
                                <label for="appName">App Name:</label>
                                <input type="text" id="appName" class="form-control" placeholder="Hotel360" />
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <div class="form-group">
                                <label for="appTitle">App Title:</label>
                                <input type="text" id="appTitle" class="form-control"
                                    placeholder="Make Your Hote Easy" />
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-6">
                            <div class="form-group">
                                <div class="custom-control custom-control-info custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="register" />
                                    <label class="custom-control-label" for="register">Allow Registration</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-6">
                            <div class="form-group">
                                <div class="custom-control custom-control-info custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="t&c" />
                                    <label class="custom-control-label" for="t&c">Enable Terms & Conditions
                                        in Registration</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label for="t&cText">Registration Terms & Conditions: </label>
                                <textarea class="form-control" id="mytextarea" rows="3"
                                    placeholder="Write Terms and Conditions"></textarea>
                            </div>
                        </div>
                        {{-- Email And Settings Start --}}
                        <div class="col-12 text-center">
                            <hr>
                            <h3>Email/SMTP Settings</h3>
                        </div>
                        <div class="col-md-4 col-sm-12">
                            <div class="form-group">
                                <label for="mailDriver">Mail Driver: </label>
                                <select class="select2 form-control form-control-lg" id="mailDriver">
                                    <option value="smtp">SMTP</option>
                                    <option value="sendmail">Send Mail</option>
                                    <option value="mailgun">Mailgun</option>
                                    <option value="mandrill">Mandrill</option>
                                    <option value="ses">SES</option>
                                    <option value="sparkpost">Spark Post</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-12">
                            <div class="form-group">
                                <label for="host">Host:</label>
                                <input type="text" id="host" class="form-control" placeholder="mail.hotel360.in" />
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-12">
                            <div class="form-group">
                                <label for="port">Port:</label>
                                <input type="number" id="port" class="form-control" placeholder="360" />
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-12">
                            <div class="form-group">
                                <label for="username">Username:</label>
                                <input type="text" id="username" class="form-control" placeholder="username" />
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-12">
                            <div class="form-group">
                                <label for="password">Password:</label>
                                <input type="password" id="password" class="form-control" placeholder="password" />
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-12">
                            <div class="form-group">
                                <label for="encrypt">Encryption:</label>
                                <input type="text" id="encrypt" class="form-control" placeholder="write encryption" />
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-12">
                            <div class="form-group">
                                <label for="fromAddress">From Address:</label>
                                <input type="text" id="fromAddress" class="form-control"
                                    placeholder="app@hotel360.in" />
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-12">
                            <div class="form-group">
                                <label for="fromName">From Name:</label>
                                <input type="text" id="fromName" class="form-control" placeholder="Hotel360" />
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-6">
                            <div class="form-group">
                                <div class="custom-control custom-control-info custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="emailConfig" />
                                    <span class="px-1" data-toggle="tooltip"
                                        data-original-title="If enabled, all businesses can use this email configuration. Email configurations will not be visible to them."
                                        data-trigger="click"><svg style="fill: blue" width="18"
                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                            <path
                                                d="M256 0C114.6 0 0 114.6 0 256s114.6 256 256 256s256-114.6 256-256S397.4 0 256 0zM256 400c-18 0-32-14-32-32s13.1-32 32-32c17.1 0 32 14 32 32S273.1 400 256 400zM325.1 258L280 286V288c0 13-11 24-24 24S232 301 232 288V272c0-8 4-16 12-21l57-34C308 213 312 206 312 198C312 186 301.1 176 289.1 176h-51.1C225.1 176 216 186 216 198c0 13-11 24-24 24s-24-11-24-24C168 159 199 128 237.1 128h51.1C329 128 360 159 360 198C360 222 347 245 325.1 258z" />
                                        </svg>
                                    </span>
                                    <label class="custom-control-label" for="emailConfig">Allow businesses to use
                                        Superadmin
                                        email configuration</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-6">
                            <div class="form-group">
                                <div class="custom-control custom-control-info custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="newReg" />
                                    <span class="px-1" data-toggle="tooltip"
                                        data-original-title="An email will be sent to The Superadmin if a new business is created."
                                        data-trigger="click"><svg style="fill: blue" width="18"
                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                            <path
                                                d="M256 0C114.6 0 0 114.6 0 256s114.6 256 256 256s256-114.6 256-256S397.4 0 256 0zM256 400c-18 0-32-14-32-32s13.1-32 32-32c17.1 0 32 14 32 32S273.1 400 256 400zM325.1 258L280 286V288c0 13-11 24-24 24S232 301 232 288V272c0-8 4-16 12-21l57-34C308 213 312 206 312 198C312 186 301.1 176 289.1 176h-51.1C225.1 176 216 186 216 198c0 13-11 24-24 24s-24-11-24-24C168 159 199 128 237.1 128h51.1C329 128 360 159 360 198C360 222 347 245 325.1 258z" />
                                        </svg>
                                    </span>
                                    <label class="custom-control-label" for="newReg">Enable new business
                                        registration email</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-6">
                            <div class="form-group">
                                <div class="custom-control custom-control-info custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="newSubs" />
                                    <span class="px-1" data-toggle="tooltip"
                                        data-original-title="An email will be sent to the superadmin if a subscription is added."
                                        data-trigger="click"><svg style="fill: blue" width="18"
                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                            <path
                                                d="M256 0C114.6 0 0 114.6 0 256s114.6 256 256 256s256-114.6 256-256S397.4 0 256 0zM256 400c-18 0-32-14-32-32s13.1-32 32-32c17.1 0 32 14 32 32S273.1 400 256 400zM325.1 258L280 286V288c0 13-11 24-24 24S232 301 232 288V272c0-8 4-16 12-21l57-34C308 213 312 206 312 198C312 186 301.1 176 289.1 176h-51.1C225.1 176 216 186 216 198c0 13-11 24-24 24s-24-11-24-24C168 159 199 128 237.1 128h51.1C329 128 360 159 360 198C360 222 347 245 325.1 258z" />
                                        </svg>
                                    </span>
                                    <label class="custom-control-label" for="newSubs">Enable new subscription
                                        email</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-6">
                            <div class="form-group">
                                <div class="custom-control custom-control-info custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="welcome" />
                                    <span class="px-1" data-toggle="tooltip"
                                        data-original-title="An email will be sent to the owner of the business if a new business is created."
                                        data-trigger="click"><svg style="fill: blue" width="18"
                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                            <path
                                                d="M256 0C114.6 0 0 114.6 0 256s114.6 256 256 256s256-114.6 256-256S397.4 0 256 0zM256 400c-18 0-32-14-32-32s13.1-32 32-32c17.1 0 32 14 32 32S273.1 400 256 400zM325.1 258L280 286V288c0 13-11 24-24 24S232 301 232 288V272c0-8 4-16 12-21l57-34C308 213 312 206 312 198C312 186 301.1 176 289.1 176h-51.1C225.1 176 216 186 216 198c0 13-11 24-24 24s-24-11-24-24C168 159 199 128 237.1 128h51.1C329 128 360 159 360 198C360 222 347 245 325.1 258z" />
                                        </svg>
                                    </span>
                                    <label class="custom-control-label" for="welcome">Enable welcome email to new
                                        business</label>
                                </div>
                            </div>
                        </div>
                        {{-- Payment Gateway Start --}}
                        <div class="col-12 text-center">
                            <hr>
                            <h3>Payment Gateway</h3>
                        </div>
                        <div class="col-lg-6 col-sm-6">
                            <div class="form-group">
                                <div class="custom-control custom-control-info custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="offline" />
                                    <label class="custom-control-label" for="offline">Enable Offline Payment</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-6">
                            <div class="form-group">
                                <label for="offLineInfo">Offline payment details:</label>
                                <span class="px-1" data-toggle="tooltip"
                                    data-original-title="Offline payment instructions, like bank account details."
                                    data-trigger="click"><svg style="fill: blue" width="18"
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                        <path
                                            d="M256 0C114.6 0 0 114.6 0 256s114.6 256 256 256s256-114.6 256-256S397.4 0 256 0zM256 400c-18 0-32-14-32-32s13.1-32 32-32c17.1 0 32 14 32 32S273.1 400 256 400zM325.1 258L280 286V288c0 13-11 24-24 24S232 301 232 288V272c0-8 4-16 12-21l57-34C308 213 312 206 312 198C312 186 301.1 176 289.1 176h-51.1C225.1 176 216 186 216 198c0 13-11 24-24 24s-24-11-24-24C168 159 199 128 237.1 128h51.1C329 128 360 159 360 198C360 222 347 245 325.1 258z" />
                                    </svg>
                                </span>
                                <textarea class="form-control" id="offLineInfo" rows="3"
                                    placeholder="Textarea"></textarea>
                            </div>
                        </div>
                        <div class="col-12 text-center">
                            <hr>
                            <h3>Backup</h3>
                        </div>
                        <div class="col-lg-6 col-sm-6">
                            <div class="form-group">
                                <label for="backup">Backup Disk</label>
                                <seleect class="select2 form-control" id="backup">
                                    <option value="local">Loacl</option>
                                    <option value="Dropbox">Dropbox</option>
                                    <option value="Gdrive">Google Drive</option>
                                </seleect>
                            </div>
                        </div>
                        <div class="col-12 text-center">
                            <hr>
                            <h3>Cron Jobs</h3>
                        </div>
                        <div class="col-lg-12 col-sm-6 text-center">
                            <p>To send <b>subscription expiry alert</b> & <b>automated application backup process</b>
                                you must
                                setup a
                                cron job with this command:</p>
                            <code>* * * * * /usr/local/bin/lsphp /home/businesskeeper/public_html/application2/artisan schedule:run >> /dev/null 2>&1</code>
                            <p>Set it in cron jobs tab in cpanel or directadmin or similar panel Or edit crontab if
                                using cloud/dedicated hosting.
                                Or contact hosting for help with cron job settings.</p>
                        </div>
                        <div class="col-md-12">
                            <button class="btn btn-primary btn-block">Submit</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>

@endsection