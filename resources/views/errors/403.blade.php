@extends('errors.layout', [
'classPage' => 'error-page',
'activePage' => '403',
'pageBackground' => asset("material").'/img/bg-pricing.jpg',
'navbarClass'=>'text-white',
'title'=>'Error 403'
])

@section('content')
<main class="main-content  mt-0">
    <div>
        <section class="min-vh-100 d-flex align-items-center">
            <div class="container">
                <div class="row mt-lg-0 mt-8  justify-content-center">
                    <div class="col-lg-4 my-auto">
                        <h1 class="display-1 text-bolder text-gradient text-warning fadeIn1 fadeInBottom mt-5">Error 403
                        </h1>
                        <h2 class="fadeIn3 fadeInBottom opacity-8">{{ __('Forbidden') }} :(</h2>
                        <p class="lead opacity-6 fadeIn2 fadeInBottom">{{ __('Ooooups! Looks like you got lost') }}.</p>
                        <a href="{{ route('home') }}" class=" btn bg-gradient-warning mt-4 fadeIn2 fadeInBottom">

                            <span class="btn-inner--icon "><i class="fa-solid fa-house mx-2"></i></span>
                            <span class="btn-inner--text ">Volver al inicio</span>
                        </a>

                    </div>
                    <div class="col-lg-6 my-auto">
                        <img class="w-100 fadeIn1 fadeInBottom" src="../../../assets/img/illustrations/dark-lock-ill.png" alt="500-error">
                    </div>
                </div>
            </div>
        </section>
    </div>
</main>
@endsection