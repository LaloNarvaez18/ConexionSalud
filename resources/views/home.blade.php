@extends('layouts.app')
@section('navbar')
    @include('partials.navbar')
@endsection
@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-lg-4">
            <div class="card">
                <div>
                    <div class="avatar d-flex justify-content-center pt-4 mb-3">
                        <img src="{{asset('assets/img/avatar.png')}}" alt="">             
                    </div>
                    <div class="text-center">
                        <h1 class="card-title mb-0">{{Auth::user()->nombre.' '.Auth::user()->apellido}}</h1>
                        <p class="card-subtitle mt-0">{{'@'.Auth::user()->nickname}}</p>
                    </div>
                </div>
                <div class="card-body">
                    <ul class="list-group">
                        <li class="list-group-item border-0 pb-0 pt-0">
                            <i class="fas fa-envelope fa-fw mr-1 mb-0"></i>Email
                            <p class="list-text">{{Auth::user()->email}}</p>
                        </li>
                        <li class="list-group-item border-0 pb-0 pt-0">
                            <i class="fas fa-phone-alt fa-fw mr-1 mb-0"></i>Telefono
                            <p class="list-text">{{'+569 '.Auth::user()->telefono}}</p>
                        </li>
                        <li class="list-group-item border-0 pb-0 pt-0 mb-3">
                            <i class="fas fa-map-marker-alt fa-fw mr-1 mb-0"></i>Direccion
                            <p class="list-text">{{Auth::user()->direccion}}</p>
                        </li>
                        <li class="list-group-item border-0 pb-0">
                            <a href="" class="btn btn-outline-primary btn-block mb-3 pt-2 pb-2">Editar perfil</a>
                        </li>
                    </ul>
                    
                </div>
            </div>
        </div>
        <div class="col-lg-8">
            <div class="card">
                <div class="avatar">
                    @if(Auth::user()->tipo == "Paciente")
                        <h1>Bienvenido!</h1>
                    @else
                        <h1>Hola medico</h1>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
