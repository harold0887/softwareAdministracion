@extends('layouts.app', [
'activePage' => 'register',
'title' =>"Register",
])
@section('content')

<main class="main-content  mt-0">
    <div class="page-header align-items-start section-height-50 pt-5 pb-11 m-3 border-radius-lg" style="background-image: url('../../../assets/img/edificios/edificio.jpeg');">
        <span class="mask bg-gradient-dark opacity-6"></span>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-5 text-center mx-auto">
                    <h1 class="text-white mb-2 mt-5">{{ __('Welcome!') }}</h1>
                    <p class="text-lead text-white">Una solución inteligente para la administración de condominios.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row mt-lg-n10 mt-md-n11 mt-n10 justify-content-center">
            <div class="col-xl-4 col-lg-5 col-md-7 mx-auto">
                <div class="card z-index-0">
                    <div class="card-header text-center pt-4">
                        <h5>Registrarse con email</h5>
                    </div>
                    <div class="row px-xl-5 px-sm-4 px-3">


                    </div>
                    <div class="card-body">

                        <form id="register" class="form text-start" method="POST" action="{{ route('register') }}">
                            @csrf
                            <div class="mb-3 @error('name')has-danger @enderror">
                                <input name="name" type="text" class="form-control @error('name')is-invalid @enderror" required placeholder="{{ __('Name') }}" value="{{ old('name') }}" aria-label="Name" aria-describedby="email-addon">
                                @error('name') <div class="text-danger text-xs">{{ $message }}</div> @enderror
                            </div>
                            <div class="mb-3 @error('email')has-danger @enderror">
                                <input name="email" type="email" class="form-control @error('email')is-invalid @enderror" required placeholder="{{ __('Email') }}" value="{{ old('email') }}" aria-label="Email" aria-describedby="email-addon">
                                @error('email') <div class="text-danger text-xs">{{ $message }}</div> @enderror
                            </div>

                            <div class="mb-3 @error('password')has-danger @enderror">
                                <input name="password" type="password" class="form-control  @error('password')is-invalid @enderror" required placeholder="{{ __('Password') }}" aria-label="Password" aria-describedby="password-addon">
                                @error('password') <div class="text-danger text-xs">{{ $message }}</div> @enderror
                            </div>
                            <div class="mb-3">
                                <input name="password_confirmation" type="password" class="form-control" required placeholder="{{ __('Confirm Password') }}" aria-label="Password" aria-describedby="password-addon">
                            </div>
                            <div class="form-check form-check-info text-start">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" checked>
                                <label class="form-check-label" for="flexCheckDefault">
                                    {{ __('I agree to the') }} <a href="" class="text-dark font-weight-bolder">{{ __('terms and conditions') }}</a>
                                </label>
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn bg-gradient-dark w-100 my-4 mb-2">{{ __('Get Started') }}</button>
                            </div>
                            <p class="text-sm mt-3 mb-0">Ya tiene una cuenta? <a href="{{ route('login') }}" class="text-dark font-weight-bolder">Inicia sesión</a></p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>






@endsection