@csrf
<div class="modal-body">
    <div class="row">
        <div class="col-lg-6 col-sm-12">
            <div class="form-group">
                <label for="businessName">Property Name: <span class="required">*</span></label>
                <input type="text" class="form-control" required name="name" id="name"
                    placeholder="Enter your property name">
            </div>
        </div>

        <div class="col-lg-6 col-sm-12">
            <div class="form-group">
                <label for="basicInput">Start Date: <span class="required">*</span></label>
                <input type="text" id="start_date" required name="start_date" class="form-control flatpickr-basic"
                    placeholder="YYYY-MM-DD" />
            </div>
        </div>
        <div class="col-lg-6 col-sm-12">
            <div class="form-group">
                <label for="basicInput">Currency: <span class="required">*</span></label>
                <select name="currency_id" required id="currency_id" class="select2 form-control form-control-lg">
                    <option>Select currency</option>
                    @foreach($currencies as $currency)
                    <option value="{{ $currency->id }}">{{ $currency->name .' '. $currency->iso_code }}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="col-lg-6 col-sm-12">
            <div class="form-group">
                <label for="website">Website:</label>
                <input type="text" id="website" name="website" class="form-control" placeholder="www.hetel360.in" />
            </div>
        </div>
        <div class="col-lg-6 col-sm-12">
            <div class="form-group">
                <label for="businessNumber">Business contact number: <span class="required">*</span></label>
                <input type="number" id="phone" name="phone" required class="form-control" placeholder="+99000000000" />
            </div>
        </div>
        <div class="col-lg-6 col-sm-12">
            <div class="form-group">
                <label for="altBusinessNumber">Alternate contact number:</label>
                <input type="number" id="alt_phone" name="alt_phone" class="form-control" placeholder="+99000000000" />
            </div>
        </div>
        <div class="col-lg-6 col-sm-12">
            <div class="form-group">
                <label for="country">Country: <span class="required">*</span></label>
                <select class="select2 form-control form-control-lg" required onchange="getStateDate(this.value)"
                    name="country_id" id="countryData">
                    <option>Select Your Country</option>
                    @foreach($countries as $country)
                    <option value="{{ $country->id }}">{{ $country->name }}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="col-lg-6 col-sm-12">
            <div class="form-group">
                <label for="state">State:</label>
                <select class="select2 form-control form-control-lg" onchange="getCity(this.value)" name="state_id"
                    id="stateData">
                    <option value="">Select Your State</option>
                </select>
            </div>
        </div>
        <div class="col-lg-6 col-sm-12">
            <div class="form-group">
                <label for="city">City:</label>
                <select class="select2 form-control form-control-lg" onchange="getThana(this.value)" name="city_id"
                    id="cityData">
                    <option value="">Select Your City</option>
                </select>
            </div>
        </div>

        <div class="col-lg-6 col-sm-12">
            <div class="form-group">
                <label for="city">Thana:</label>
                <select class="select2 form-control form-control-lg" name="thana_id" id="thanaData">
                    <option value="">Select Thana</option>
                </select>
            </div>
        </div>

        <div class="col-lg-6 col-sm-12">
            <div class="form-group">
                <label for="zipcode">Address:</label>
                <textarea id="address" name="address" required class="form-control" placeholder="6573"></textarea>
            </div>
        </div>

        {{-- here we will implement timezone also --}}


    </div>
    <div class="modal-footer">
        <button type="submit" class="btn btn-primary btn-block">Submit</button>
    </div>