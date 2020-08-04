@extends('layouts.app')
@section('navbar')
    @include('partials.navbar')
@endsection
@section('header-content')
<div class="inner" style="background-image: url('{{asset('assets/img/fondo-a.jpg')}}')">
    <div class="overlay">
        <div class="banner">
            <h1 class="banner-uptitle mb-5">¿Necesitas ayuda?</h1>
            <h1 class="banner-title mb-5">
                <b>Bienvenido a Conexion Salud la red de terapia online mas grande</b>
            </h1>
            <div class="row m-0 p-3 d-flex justify-content-center">
                <div class="col-md-4 mb-4 p-lg-2">
                    <a href="" class="btn btn-light btn-block p-3 text-uppercase btn-uppercase border-2">
                        Registrarse<i class="fas fa-arrow-right ml-2 fa-fw"></i>
                    </a>  
                </div>
                <div class="col-md-4 mb-4 p-lg-2">
                <a href="" class="btn btn-outline-light btn-block p-3 text-uppercase btn-uppercase  border-2">
                    Conocenos<i class="fas fa-eye ml-2 fa-fw"></i>
                </a>  
                </div>
            </div>
        </div>
    </div>
</div>
@endsection