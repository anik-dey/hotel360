@extends('layouts.master')
@push('css')
    <link rel="stylesheet" type="text/css"
        href="{{ asset('backend/app-assets/css/pages/page-knowledge-base.css') }}">
@endpush
@section('content')
<div>
    <section id="knowledge-base-search">
        <div class="row">
            <div class="col-12">
                <div class="card knowledge-base-bg text-center"
                    style="background-image: url('/backend/app-assets/images/banner/banner.png')">
                    <div class="card-body">
                        <h2 class="text-primary">Enter Number Or Email For Verification Purpose</h2><br>
                        <!-- <p class="card-text mb-2">
                        <span>Popular searches: </span><span class="font-weight-bolder">Sales automation, Email
                            marketing</span>
                    </p> -->
                        <form class="kb-search-input" action="{{ route('verify-otp') }}"
                            method="POST">
                            @csrf
                            <div class="input-group input-group-merge">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><svg xmlns="http://www.w3.org/2000/svg" width="14"
                                            height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                            class="feather feather-phone-call font-medium-3">
                                            <path
                                                d="M15.05 5A5 5 0 0 1 19 8.95M15.05 1A9 9 0 0 1 23 8.94m-1 7.98v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z">
                                            </path>
                                        </svg></span>
                                </div>
                                <input type="number" class="form-control" id="searchbar"
                                    placeholder="Enter Number Here">
                            </div>
                            <div>
                                <h1 class="text-primary">OR</h1>
                            </div>
                            <div class="input-group input-group-merge">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><svg xmlns="http://www.w3.org/2000/svg" width="14"
                                            height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                            class="feather feather-mail font-medium-3">
                                            <path
                                                d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z">
                                            </path>
                                            <polyline points="22,6 12,13 2,6"></polyline>
                                        </svg></span>
                                </div>
                                <input type="email" class="form-control" id="searchbar" name="email" @if ($email)
                                    value="{{$email}}"
                                @endif
                                    placeholder="Enter Email Here" readonly>
                            </div>
                            <br>
                            <div class="input-group input-group-merge">
                                <button type="submit"
                                    class="btn btn-primary btn-block waves-effect waves-float waves-light">Send
                                    Verify Code</button>
                                <a href="{{route('guest.index')}}" <button
                                    onclick="return confirm('Are You Want To Skip Verification For This Client?');"
                                    class="btn btn-danger btn-block waves-effect waves-float waves-light"><span>Skip
                                        Verification</span>
                                    </button></a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection
