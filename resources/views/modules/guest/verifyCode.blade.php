@extends('layouts.master')
@section('title', 'Check Client')
@push('css')
    <link rel="stylesheet" type="text/css"
        href="{{ asset('backend/app-assets/css/pages/page-knowledge-base.css') }}">
@endpush
@section('content')
<div id="app">
    <section id="knowledge-base-search">
        <div class="row">
            <div class="col-12">
                <div class="card knowledge-base-bg text-center"
                    style="background-image: url('/backend/app-assets/images/banner/banner.png')">
                    <div class="card-body">
                        <h2 class="text-primary">Enter Verification Code</h2><br>
                        <form class="kb-search-input" action="{{ route('otp-check') }}" method="POST">
                            @csrf
                            <input type="text" name="email" value="{{$email}}" style="display:none"/>
                            <div id="otp" class="inputs d-flex flex-row justify-content-center mt-2">
                                <input
                                    class="m-2 text-center form-control rounded" type="text" id="input1" name="input1"
                                    v-on:keyup="inputenter(1)" maxlength="1" autofocus/> <input
                                    class="m-2 text-center form-control rounded" v-on:keyup="inputenter(2)" type="text"
                                    id="input2" name="input2" maxlength="1"/> <input
                                    class="m-2 text-center form-control rounded" v-on:keyup="inputenter(3)" type="text"
                                    id="input3" name="input3" maxlength="1" /> <input
                                    class="m-2 text-center form-control rounded" v-on:keyup="inputenter(4)" type="text"
                                    id="input4" name="input4" maxlength="1" /> </div>
                            <div class="modal-footer">
                                <button type="submit"
                                    class="btn btn-success waves-effect waves-float waves-light btn-block">Verify</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<script src="	https://cdn.jsdelivr.net/npm/vue@2.6.12/dist/vue.js"></script>
<script>
    var app = new Vue({
        el: '#app',
        methods: {
            inputenter(id) {

                const inputs = document.querySelectorAll('#otp > *[id]');
                for (let i = 0; i < inputs.length; i++) {
                    inputs[i].addEventListener('keydown', function (event) {
                        if (event.key === "Backspace") {
                            inputs[i].value = '';
                            if (i !== 0) inputs[i - 1].focus();
                        } else {
                            if (i === inputs.length - 1 && inputs[i].value !== '') {
                                return true;
                            } else if (event.keyCode > 47 && event.keyCode < 58) {
                                inputs[i].value = event.key;
                                if (i !== inputs.length - 1) inputs[i + 1].focus();
                                event.preventDefault();
                            } else if (event.keyCode > 64 && event.keyCode < 91) {
                                inputs[i].value = String.fromCharCode(event.keyCode);
                                if (i !== inputs.length - 1) inputs[i + 1].focus();
                                event.preventDefault();
                            }
                        }
                    });
                }
            }
        }
    });

</script>
@endsection
