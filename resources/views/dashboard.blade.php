@extends('layouts.app', [
'activePage' => 'home',
'activePage2' => 'default',
'title' =>"Inicio",
])

@section('content')

<main class="main-content  mt-0">
    <div class="page-header align-items-start section-height-50 pt-5 pb-11 m-3 border-radius-lg" style="background-image: url('../../../assets/img/curved-images/curved9.jpg');">
        <span class="mask bg-gradient-dark opacity-6"></span>
        <div class="container">
            <div class="row d-flex flex-column justify-content-center">
                <div class="col-lg-5 text-center mx-auto">
                    <h1 class="text-white mb-2 mt-5 prueba">Dashboard</h1>

                </div>

            </div>


        </div>
    </div>
</main>
@endsection