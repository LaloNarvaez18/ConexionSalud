@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="row">
        <div class="col-md-12 d-flex justify-content-center">
            <img src="{{asset('assets\img\logo-ps.png')}}" height="70px">
        </div>
    </div>
</div>
<div class="container">
    <div class="row d-flex justify-content-center pt-5">
        <div class="col-md-5">
            <div class="card ">
                <div class="card-body pl-lg-5 pr-lg-5">
                    <form method="POST" class="w-100" action="{{ route('login') }}">
                        @csrf
                        <div class="text-center mb-5">
                            <h1 class="title">¡Bienvenido!</h1>
                            <h2 class="subtitle">Inicia sesion para contactarnos</h2>
                        </div>
                        <div class="form-group row mt-4 mb-4">
                            <div class="col-md-12">
                                <input id="email" type="email" class="form-control pt-2 pb-2 @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Correo electronico" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-4">
                            <div class="col-md-12">
                                <input id="password" type="password" class="form-control pt-2 pb-2 @error('password') is-invalid @enderror text" name="password" placeholder="Contraseña" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <!-- <div class="form-group row">
                            <div class="col-md-6 col-sm-3">
                                <div class="custom-control custom-radio">
                                    <input type="radio" class="custom-control-input" id="customRadio1" name="tipo" value="Paciente">
                                    <label class="custom-control-label" for="customRadio1">Perfil paciente</label>
                                </div>
        
                            </div>
                            <div class="col-md-6">
                                <div class="custom-control custom-radio">
                                    <input type="radio" class="custom-control-input" id="customCheck2" name="perfil" value="Psicologo">
                                    <label class="custom-control-label" for="customCheck2">Perfil psicologo</label>
                                </div>
                            </div>
                        </div> -->

                        <div class="form-group row mb-0">
                            
                            <div class="col-md-12 text-center">
                                <button type="submit" class="btn btn-success btn-block pt-2 pb-2 mb-3">
                                    Ingresar a mi cuenta
                                </button>
                                <a class="btn btn-link text" href="{{ route('password.request') }}">
                                    ¿Nuevo por aqui? Registrar cuenta
                                </a>
                                @if (Route::has('password.request'))
                                    <a class="btn btn-link text" href="{{ route('password.request') }}">
                                        ¿Olvidaste tu contraseña?
                                    </a>
                                @endif
                            </div>
                            
                        </div>
                    </form>
                </div>
                <div class="card-footer">
                    <div class="text-center mb-4 mt-3">
                        <h2 class="text">O ingresa con tus redes</h2>
                    </div>
                    <div class="ml-lg-4 mr-lg-4">
                        <a href="" class="btn btn-google btn-block pt-2 pb-2 mb-3">
                            <i class="fab fa-google mr-2"></i>
                            Ingresar con cuenta de Google
                        </a>
                        <a href="" class="btn btn-facebook btn-block pt-2 pb-2 mb-3">
                            <i class="fab fa-facebook mr-2"></i>
                            Ingresar con cuenta de Facebook
                        </a>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</div>
@endsection
