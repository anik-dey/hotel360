@extends('layouts.contentLayoutHorizontal')
@section('content')
<div class="row">
    <div class="col-lg-12 col-sm-12">
        <div class="card">
            <div class="card-header">
                <h3>Your Business Information</h3>
                {{-- Modal Form togglar --}}
                <div class="col-md-12 col-sm-12 pl-0 mb-1">
                    <button type="button" class="btn btn-outline-primary pull-right" onclick="resetForm()">
                        Add <i class="fa fa-plus"></i> </span>
                    </button>
                </div>
            </div>

            <div class="card-body">
                <div class="row">
                    <div class="col-md-12">
                        <div class="table-responsive">
                            <table class="table table-sm table-hover-animation">
                                <thead>
                                    <tr>
                                        <th>Sl.</th>
                                        <th>Name</th>
                                        <th>Currency</th>
                                        <th>Start Date</th>
                                        <th>Phone</th>
                                        <th>Address</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($properties as $key => $value)
                                    <tr>
                                        <td>{{ ++$key }}</td>
                                        <td>{{ $value->name }}</td>
                                        <td>{{ $value->currency->name }}</td>
                                        <td>{{ $value->start_date }}</td>
                                        <td>{{ $value->phone }}</td>
                                        <td>{{ $value->address }}</td>
                                        <td>
                                            <div class="dropdown">
                                                <button type="button"
                                                    class="btn btn-sm dropdown-toggle hide-arrow waves-effect waves-float waves-light"
                                                    data-toggle="dropdown">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                        class="feather feather-more-vertical">
                                                        <circle cx="12" cy="12" r="1"></circle>
                                                        <circle cx="12" cy="5" r="1"></circle>
                                                        <circle cx="12" cy="19" r="1"></circle>
                                                    </svg>
                                                </button>
                                                <div class="dropdown-menu">
                                                    <a onclick="editData({{json_encode($value)}})" class="dropdown-item"
                                                        href="javascript:void(0);">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                            stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round"
                                                            class="feather feather-edit-2 mr-50">
                                                            <path
                                                                d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z">
                                                            </path>
                                                        </svg>
                                                        <span>Edit</span>
                                                    </a>
                                                    <a onclick="deleteData({{$value->id}})" class="dropdown-item"
                                                        href="javascript:void(0);">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                            stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round" class="feather feather-trash mr-50">
                                                            <polyline points="3 6 5 6 21 6"></polyline>
                                                            <path
                                                                d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2">
                                                            </path>
                                                        </svg>
                                                        <span>Delete</span>
                                                    </a>
                                                </div>
                                                <form id="delete-form-{{ $value->id }}"
                                                    action="{{ route('properties.destroy',$value->id) }}" method="POST"
                                                    style="display: none;">
                                                    @method('DELETE')
                                                    {{ csrf_field() }}
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                    @empty
                                    <tr>
                                        <td colspan="7" align="center">
                                            <div class="alert-danger">Opps!!, Not Property Found</div>
                                        </td>
                                    </tr>
                                    @endforelse
                                </tbody>

                            </table>
                        </div>
                    </div>
                </div>

                {{-- property create edit form modal start --}}
                <div class="modal fade text-left" id="propertyCreateEdit" role="dialog" aria-labelledby="myModalLabel17"
                    aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title" id="myModalLabel33">Add new Business <sub>(Business owner can
                                        change their business details)</sub></h4>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <form id="propertyform" method="POST">
                                <input id="manualMethod" type="hidden" name="_method" value="PUT">
                                @include('modules.configuration.property.propertyCreateEditForm')
                            </form>
                        </div>
                    </div>
                </div>
                {{-- property create edit form modal start --}}
            </div>
        </div>
    </div>
</div>
@endsection

@push('js')
<script>
    function getStateDate(value){
            $('#stateData').html(`<option value="">Processing...</option>`)
            if(value){
                let countries = {!! json_encode($countries->toArray()) !!};
                let selectedCountry = countries.find((item) => {
                    return item.id == value
                })
                if(selectedCountry && selectedCountry.states.length){
                    var html = '';
                    html += `<option value="">Select State</option>`
                    $.each(selectedCountry.states, function(i, item) {
                        html += `<option value="${item.id}">${item.name} (${item.bn_name})</option>`
                    });
                    $('#stateData').empty()
                    $('#stateData').html(html)
                }else{
                    $('#stateData').html(`<option value="">Select State</option>`)
                }
            }
        }

        function getCity(value){
            $('#cityData').html(`<option value="">Select State...</option>`)
            if(value){
                let countries = {!! json_encode($countries->toArray()) !!};
                let selectedState;
                countries.find((item) => {
                    if(item.states.length){
                        item.states.find((city) => {
                            if(city.id == value){
                                selectedState = city;
                            }
                        });
                    }
                })
                if(selectedState && selectedState.cities.length){
                    var html = '';
                    html += `<option value="">Select State...</option>`;
                    $.each(selectedState.cities, function(i, city) {
                        html += `<option value="${city.id}">${city.name}</option>`
                    });
                    $('#cityData').empty()
                    $('#cityData').html(html)
                }
            }
        }

        function getThana(value){
            $('#thanaData').html(`<option value="">Select Thana...</option>`)
            if(value){
                let countries = {!! json_encode($countries->toArray()) !!};
                let selectedCity;
                countries.find((country) => {
                    if(country.states.length){
                        country.states.find((state) => {
                            if(state.cities.length){
                                state.cities.find((city) => {
                                    if(city.id == value){
                                        selectedCity = city;
                                    }
                                });
                            }

                        });
                    }
                })

                if(selectedCity && selectedCity.thanas.length){
                    var html = '';
                    html += `<option value="">Select Thana...</option>`;
                    $.each(selectedCity.thanas, function(i, thana) {
                        html += `<option value="${thana.id}">${thana.name}</option>`
                    });
                    $('#thanaData').empty()
                    $('#thanaData').html(html)
                }
            }
        }


        function editData(value){
            var url = "{{ route('properties.update', [":id"]) }}";
            url = url.replace(':id', value.id);
            $('#propertyform').attr('action', url)

            $('#propertyCreateEdit').modal('show')
            $('#name').val(value.name)
            $('#currency_id').val(value.currency_id)
            $('#start_date').val(value.start_date)
            $('#start_date').val(value.start_date)
            $('#website').val(value.website)
            $('#phone').val(value.phone)
            $('#alt_phone').val(value.alt_phone)
            $('#countryData').val(value.country_id)
            if(value.country_id){
                getStateDate(value.country_id)
            }
            if(value.state_id){
                getCity(value.state_id)
            }
            if(value.city_id){
                getThana(value.city_id)
            }

            $('#stateData').val(value.state_id)
            $('#cityData').val(value.city_id)
            $('#thanaData').val(value.thana_id)
            $('#address').val(value.address)

            $('.select2').select2()

            $('#manualMethod').val('PUT')

        }

        function resetForm(){
            $('#manualMethod').val('POST')

            $('#propertyform').attr('action', '{{route('properties.store')}}')
            $('#name').val('')
            $('#currency_id').val('')
            $('#start_date').val('')
            $('#start_date').val('')
            $('#website').val('')
            $('#phone').val('')
            $('#alt_phone').val('')
            $('#countryData').val('')
            $('#stateData').val('')
            $('#cityData').val('')
            $('#thanaData').val('')
            $('#address').val('')

            $('#propertyCreateEdit').modal('show')
            $('.select2').select2()

        }
</script>
@endpush