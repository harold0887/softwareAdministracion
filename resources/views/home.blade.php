@extends('layouts.app', [
'activePage' => 'home',
'title' =>"Inicio",
])

@section('content')

<main class="main-content  mt-0">
    <div class="page-header align-items-start section-height-50 pt-5 pb-11 m-3 border-radius-lg" style="background-image: url('../../../assets/img/curved-images/curved9.jpg');">
        <span class="mask bg-gradient-dark opacity-6"></span>
        <div class="container">
            <div class="row d-flex flex-column justify-content-center">
                <div class="col-lg-5 text-center mx-auto">
                    <h1 class="text-white mb-2 mt-5 prueba">{{ __('Home!') }}</h1>
                    <p class="text-lead text-white">
                        {{ __('Software para la administracion de condominios.') }}
                    </p>
                </div>
                <div class="col-lg-5 text-center mx-auto">
                    <h5 class="text-white"><strong>Una solución inteligente para la administración de condominios.</strong></h5>
                    <ol class="text-white">
                        <li>{{ __('Username ') }}<b>{{ __('admin@softui.com') }}</b>{{ __(' and Password ') }}<b>{{ __('secret') }}</b>
                        </li>
                        <li>{{ __('Username ') }}
                            <b>{{ __('creator@softui.com') }}</b>{{ __(' and Password ') }}<b>{{ __('secret') }}</b>
                        </li>
                        <li>{{ __('Username ') }}
                            <b>{{ __('member@softui.com') }}</b>{{ __(' and Password ') }}<b>{{ __('secret') }}</b>
                        </li>
                    </ol>
                    <button class="btn btn-primary" id="btn-prueba">
                        prueba
                    </button>

                    <button class="btn bg-gradient-success w-100 mb-0 toast-btn" type="button" data-target="successToast">Success Notification</button>
                    <livewire:counter /> 
                </div>
            </div>
          
           
        </div>
    </div>
</main>
@endsection