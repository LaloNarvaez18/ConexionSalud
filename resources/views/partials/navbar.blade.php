<nav class="navbar navbar-expand-lg navbar-light pl-lg-5 pr-lg-5 pt-3 pb-3 border-bottom" style="">
    <a class="navbar-brand" href="#">
       <!-- <img src="{{asset('assets\img\logo-ps.png')}}" alt="" srcset=""> -->
       <i class="fas fa-assistive-listening-systems"></i> Conexion Salud
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mx-auto">
            <li class="nav-item">
                <a class="nav-link" href="#">Acerca de <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Quienes somos</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Profesionales Medicos</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Unete</a>
            </li>
            
        </ul>
        <div class="float-lg-right">
            @if(Auth::user())
                <!-- Example single danger button -->
                <div class="btn-group">
                    <button type="button" class="btn btn-light dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Hola, {{Auth::user()->nombre}}
                    </button>
                    <div class="dropdown-menu dropdown-menu-right">
                        <a class="dropdown-item" href="#">
                            <i class="fas fa-user-alt fa-fw mr-2"></i>Perfil
                        </a>
                        <a class="dropdown-item" href="{{route('logout')}}">
                            <i class="fas fa-sign-out-alt fa-fw mr-2"></i>Cerrar sesion
                        </a>
                    </div>
                </div>
                <!-- <form class="form-inline" action="{{route('logout')}}">
                    <button class="btn btn-primary" type="submit"></button>
                    
                </form> -->
            @else
                <form class="form-inline" action="{{route('get-login')}}">
                    <button class="btn btn-outline-primary" type="submit">Iniciar sesion<i class="fas fas fa-sign-in-alt ml-1 fa-fw"></i></button>
                </form>
            @endif
        </div>
    </div>
</nav>