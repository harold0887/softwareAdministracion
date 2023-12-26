@extends('layouts.app', [
'activePage' => 'login',
'title' =>"Login",
])

@section('content')
<main class="main-content  mt-0">
    <div class="page-header align-items-start section-height-50 pt-5 pb-11 m-3 border-radius-lg" style="background-image: url('../../../assets/img/nastuh.jpg');">
        <span class="mask bg-gradient-dark opacity-6"></span>
        <div class="container">
            <div class="row d-flex flex-column justify-content-center">
                <div class="col-lg-8 text-center mx-auto">
                    <h1 class="text-white mb-2 mt-5">{{ __('Welcome!') }}</h1>
                    <h5 class="text-white"><strong>Una solución inteligente para la administración de condominios.</strong></h5>
                </div>

            </div>
        </div>
    </div>
    <div class="container">
        <div class="row mt-lg-n10 mt-md-n11 mt-n10 justify-content-center">
            <div class="col-xl-4 col-lg-5 col-md-7 mx-auto">
                <div class="card z-index-0">
                    <div class="card-header text-center pt-4  pb-0">
                        <h5>Ingresa con tu cuenta</h5>
                    </div>
                    <div class="row px-xl-5 px-sm-4 px-3 justify-content-center">
                        <div class="col-auto ">
                            <i class="material-icons text-4xl">fingerprint</i>
                        </div>

                    </div>
                    <div class="card-body">
                        <form class="form" method="POST" action="{{ route('login') }}">
                            @csrf
                            <div>
                                <div class="@error('email')has-danger @enderror">
                                    <input name="email" type="email" class="form-control @error('email')is-invalid @enderror" placeholder="Email" aria-label="Email" aria-describedby="email-addon" value="{{ old('email', 'harold0887@hotmail.com') }}">
                                </div>
                                @error('email') <div class="text-danger text-xs">{{ $message }}</div> @enderror
                            </div>
                            <div class="mt-3">
                                <div class="@error('password')has-danger @enderror">
                                    <input name="password" type="password" class="form-control @error('password')is-invalid @enderror" placeholder="Password" aria-label="Password" aria-describedby="password-addon" value="5514404046">
                                </div>
                                @error('password') <div class="text-danger text-xs">{{ $message }}</div> @enderror
                            </div>
                            <div class="form-check form-switch mt-4">
                                <input name="remember_me" class="form-check-input" type="checkbox" id="rememberMe">
                                <label class="form-check-label" for="rememberMe">{{ __('Remember me') }}</label>
                            </div>
                            <div class="text-center" id="login">
                                <button type="submit" class="btn bg-gradient-info w-100 my-4 mb-2">{{ __('Sign in') }}</button>
                            </div>
                            <div class="mb-2 position-relative  text-center ">
                                <p class="text-sm font-weight-bold mb-2 text-secondary text-border  z-index-2 bg-white px-3">
                                    {{ __('or') }}
                                </p>
                            </div>
                            <div class="text-center">
                                <a href="{{ route('register') }}" class="btn bg-gradient-dark w-100 mt-2 mb-4">{{ __('Sign up') }}</a>
                            </div>
                            <p class="text-xs mt-3 mb-0">{{ __('Forgot your password? Reset your password') }}<a href="{{ route('password.request') }}" class="text-warning text-gradient font-weight-bold"> {{ __('here') }}</a>
                            </p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>



@endsection