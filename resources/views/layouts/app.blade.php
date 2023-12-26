<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ $title.' | Administrate 24 7' ?? 'Administrate 24 7' }}</title>

    <!-- Metas -->
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    <!-- Nucleo Icons -->
    <link href="../../assets/css/nucleo-icons.css" rel="stylesheet" />
    <link href="../../assets/css/nucleo-svg.css" rel="stylesheet" />
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <link href="../../assets/css/nucleo-svg.css" rel="stylesheet" />
    <link href="../../assets/css/leaflet.css" crossorigin="" rel="stylesheet">
    <!-- CSS Files -->
    <link href="../../assets/css/soft-ui-dashboard-pro.css?v=1" rel="stylesheet" />
    <!-- Quill -->
    <link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">


    <!-- Alpine -->
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>


    <!--   Material Fonts and icons     -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />



    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
   
       
        @livewireStyles


   
</head>

<body class="g-sidenav-show {{ (strpos(Request::route()->uri(), 'authentication') === false) or (!in_array(request()->route()->getName(),['forgot-password', 'reset-password'],)) ? 'bg-gray-100' : '' }} ">



    @if (Route::is('dashboard','demo','condominios.*'))
    @include('layouts.page_templates.admin')





    @elseif(Route::is('profile.*'))


    @elseif(Route::is('login','register','password.email','password.request','password.reset'))

    @include('layouts.page_templates.guest')



    @else
    @include('layouts.page_templates.guest')



    @endif




    <!--   JS jquery   -->
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    <!--  Notifications Plugin    -->
    <script src="{{ asset('assets') }}/js/plugins/bootstrap-notify.js"></script>
    <!--  Plugin for Sweet Alert -->
    <script src="{{ asset('assets') }}/js/plugins/sweetalert.min.js"></script>
    <!-- Control Center for Soft Dashboard-->
    <script src="{{ asset('assets') }}/js/soft-ui-dashboard.js"></script>



    <script src="{{ asset('js/app.js') }}" defer></script>

    @stack('js')
    @livewireScripts
</body>

</html>