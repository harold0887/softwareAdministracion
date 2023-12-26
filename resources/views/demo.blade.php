@extends('layouts.app', [
'activePage' => 'demo',
'activePage2' => 'demo',
'title' =>"Inicio",
'mainSider'=>'demo'

])

@section('content')



<div class="container-fluid   px-2">

    <div class="content-main   ">

        @include('includes.borders')
        <div class="row">
            <div class="col-12">
                <nav aria-label="breadcrumb ">
                    <ol class="breadcrumb my-0 text-xs lg:text-base">
                        <li class="breadcrumb-item"><a href="">Inicio</a></li>
                        <li class="breadcrumb-item"><a href="">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Demo</li>
                    </ol>
                </nav>
            </div>
            <div class="col-12">

            </div>
        </div>
        @include('includes.borders')
    </div>





</div>
@endsection