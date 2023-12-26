<nav class="navbar navbar-expand-lg position-absolute top-0 z-index-3 w-100 shadow-none my-3  navbar-transparent mt-4" id="navbar-dark">

    <div class="container " >
        <a class="navbar-brand font-weight-bolder ms-lg-0 ms-3 " href="{{ route('home') }}" id="navbar-dark-logo">
            Carolina
        </a>
        <button class="navbar-toggler shadow-none ms-2" type="button" data-bs-toggle="collapse" data-bs-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon mt-2">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
            </span>
        </button>
        <div class="collapse navbar-collapse w-100 pt-3 pb-2 py-lg-0  justify-content-end transparent" id="navigation" style="overflow: visible !important;">
            <ul class="navbar-nav ">
                <li class="nav-item">
                    <a class="nav-link me-4 d-flex" href="{{ route('home') }}">
                    <i class="material-icons text-white me-1">home</i>Inicio
                    </a>
                </li>
                @guest
                <li class="nav-item">
                    <a class="nav-link me-4 d-flex" href="{{ route('register') }}">
                        <i class="material-icons  text-white me-1">person_add</i> {{ __('Register') }}
                    </a>
                </li>
                <li class="nav-item {{ $activePage == 'login' ? ' active' : '' }}">
                    <a class="nav-link me-4 d-flex" href="{{ route('login') }}">
                        <i class="material-icons  text-white me-1">fingerprint</i> {{ __('Login') }}
                    </a>
                </li>
                @endif

                @auth

                <li class="nav-item">
                    <a class="nav-link me-2" href="{{ route('login') }}">
                        <i class="fas fa-key opacity-6 text-white me-1"></i>
                        Dashboard
                    </a>
                </li>
                @endauth



            </ul>

        </div>
    </div>
</nav>