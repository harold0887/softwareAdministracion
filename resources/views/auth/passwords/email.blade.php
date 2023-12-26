@extends('layouts.app', [
'activePage' => 'login',
])

@section('content')
@include('includes.spinner')
<!-- <main class="main-content main-content-bg mt-0">
    <section>
        <div class="page-header section-height-75">
            <div class="container">
                <div class="row">
                    <div class="col-xl-5 col-lg-6 col-md-8 col-12 px-5 d-flex flex-column">
                        <div class="card card-plain mt-8">
                            <div class="card-header pb-0 text-left">
                                <h3 class="text-info text-gradient">{{ __('Reset Password') }}</h3>
                                <p class="mb-0">{{ __('You will receive an e-mail in maximum 60 seconds') }}</p>
                            </div>
                            <div class="card-body pb-3">
                                <form id="forgot-password" class="form" method="POST" action="{{ route('password.email') }}">
                                    @csrf

                                    <div>
                                        <label>{{ __('Email') }}</label>
                                        <div class="@error('email')border border-danger rounded-3 @enderror mb-3">
                                            <input name="email" type="email" class="form-control @error('email')is-invalid @enderror" value="{{ old('email') }}" placeholder="Ingrese su e-mail" required aria-label="Email" aria-describedby="email-addon">
                                        </div>
                                        @error('email') <div class="text-danger text-xs">{{ $message }}</div> @enderror
                                    </div>
                                    <div class="text-center">
                                        <button type="submit" class="btn bg-gradient-info w-100 mt-4 mb-0">{{ __('Send Password Reset Link') }}</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="oblique position-absolute top-0 h-100 d-md-block d-none me-n8">
                            <div class="oblique-image bg-cover position-absolute fixed-top ms-auto h-100 z-index-0 ms-n6" style="background-image:url('../../../assets/img/edificios/edificio.jpeg')"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main> -->

@endsection
@include('includes.alert-error')