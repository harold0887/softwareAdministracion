

<main class="main-content  border-radius-lg ">
    
    <nav class=" navbar navbar-main navbar-expand-lg px-0 mx-4 border-radius-xl shadow-none" id="navbarBlur" data-scroll="true">
        <div class="container-fluid    px-3">

            <div class="sidenav-toggler sidenav-toggler-inner d-xl-block d-none ">
                <a href="javascript:;" class="nav-link text-body p-0">
                    <div class="sidenav-toggler-inner">
                        <i class="sidenav-toggler-line"></i>
                        <i class="sidenav-toggler-line"></i>
                        <i class="sidenav-toggler-line"></i>
                    </div>
                </a>
            </div>
            <div class="collapse navbar-collapse mt-sm-0  me-md-0 me-sm-4 justify-content-end " id="navbar">
                <div class="nav-item d-flex align-self-end">
                    <a href="https://www.creative-tim.com/product/soft-ui-dashboard-pro-laravel" target="_blank" class="btn btn-primary active my-0" role="button" aria-pressed="true" style="color: white;">
                        <span class="pe-2 mt-3"><i class="fas fa-shopping-cart fa-lg mt-1"></i></span>
                        Cotizar
                    </a>
                </div>

                <ul class="navbar-nav  justify-content-end">

                    <li class="nav-item d-xl-none ps-3 d-flex align-items-center">
                        <a href="javascript:;" class="nav-link text-body p-0" id="iconNavbarSidenav">
                            <div class="sidenav-toggler-inner">
                                <i class="sidenav-toggler-line"></i>
                                <i class="sidenav-toggler-line"></i>
                                <i class="sidenav-toggler-line"></i>
                            </div>
                        </a>
                    </li>

                    <li class="nav-item dropdown mx-4 d-flex align-items-center">
                        <a href="javascript:;" class="nav-link text-body p-0" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fa fa-bell cursor-pointer"></i>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end px-2 py-3 me-sm-n4 d-menu-admin" aria-labelledby="dropdownMenuButton" id="d-menu-admin">
                            <li class="mb-2">
                                <a class="dropdown-item border-radius-md" href="javascript:;">
                                    <div class="d-flex py-1">
                                        <div class="my-auto">
                                            <img src="../../assets/img/team-2.jpg" class="avatar avatar-sm  me-3 " alt="user image">
                                        </div>
                                        <div class="d-flex flex-column justify-content-center">
                                            <h6 class="text-sm font-weight-normal mb-1">
                                                <span class="font-weight-bold">New message</span> from Laur
                                            </h6>
                                            <p class="text-xs text-secondary mb-0">
                                                <i class="fa fa-clock me-1"></i>
                                                13 minutes ago
                                            </p>
                                        </div>
                                    </div>
                                </a>
                            </li>

                        </ul>
                    </li>
                    <li class="nav-item dropdown  d-flex align-items-center">
                        <a href="javascript:;" class="nav-link text-body p-0" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fa fa-user cursor-pointer"></i>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end  me-sm-n4 d-menu-admin" aria-labelledby="dropdownMenuButton" id="d-menu-admin">
                            <li>
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <a class="dropdown-item border-radius-md" href="route('logout')" onclick="event.preventDefault();
                                      this.closest('form').submit();">Salir</a>
                                </form>
                            </li>

                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>