<div class="container-fluid">
    <header class="">
        <nav class="">
            <div class="row d-flex justify-content-center align-items-center">
                    <div class="d-none d-lg-flex align-self-start my-1">
                             <a href="https://ibarzabal.com/"><img class="logo-navbar" src="{{asset('img/logo4.png')}}" alt="Logo - Ibarzabal servicios inmobiliarios"> </a>
                     </div>
                    <div class="d-none d-lg-block mx-2 navbar-item">
                        <li>
                            <a class="navbar-link btn btn-blue text-white" href="{{url('/')}}"> Servicios </a>
                        </li>
                    </div>
                    <div class="d-none d-lg-block mx-2 navbar-item">
                            <li>
                                <a class="navbar-link btn btn-blue text-white" href="{{url('/propiedades')}}"> Propiedades </a>
                            </li>
                        </div>

                    @if(!isset(auth()->user()->role_id) || auth()->user()->role_id != '1')
                    <div class="d-none d-lg-block mx-2 navbar-item">
                        <li>
                            <a class="navbar-link btn btn-blue text-white" href="{{url('/tasaciones')}}"> Tasación </a>
                        </li>
                    </div>
                    <div class="d-none d-lg-block mx-2 navbar-item">
                    <li>
                        <a class="navbar-link btn btn-blue text-white" href="{{url('/busqueda')}}"> Búsqueda </a>
                    </li>
                    </div>
                    <div class="d-none d-lg-block mx-2 navbar-item">
                            <li>
                                <a class="navbar-link btn btn-blue text-white" href="{{url('/nosotros')}}"> Nosotros </a>
                            </li>
                            </div>
                    <div class="d-none d-lg-block mx-2 navbar-item">
                        <li>
                            <a class="navbar-link btn btn-blue text-white" href="{{url('/contacto')}}"> Contacto </a>
                        </li>
                    </div>
                    @endif

                    @if(isset(auth()->user()->role_id) && auth()->user()->role_id == '1')
                    <div class="d-none d-lg-block mx-2 navbar-item">
                        <li>
                            <a class="btn btn-blue text-white" href="{{url('/home')}}"> Panel </a>
                        </li>
                    </div>
                    {{-- <div class="d-none d-lg-block col-md-2 navbar-item">
                        <li>
                            <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit" class="navbar-link quit m-4">
                                {{ __('Cerrar sesión') }}    
                            </button>
                        </li>
                    </div> --}}
                    @endif
                    <div class="d-block d-lg-none d-xl-none navbar-item">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Menú
                            </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="navbar-link dropdown-item" href="{{url('/propiedades')}}"> Propiedades </a>
                                    <a class="navbar-link dropdown-item" href="{{url('/')}}"> Servicios </a>
                                    <a class="navbar-link dropdown-item" href="{{url('/tasaciones')}}"> Tasación </a>
                                    <a class="navbar-link dropdown-item" href="{{url('/busqueda')}}"> Búsqueda </a>
                                    <a class="navbar-link dropdown-item" href="{{url('/nosotros')}}"> Nosotros </a>
                                    <a class="navbar-link dropdown-item" href="{{url('/contacto')}}"> Contacto </a>
                                </div>
                        </li>
                    </div>
            </div>
        </nav>
    </header>
</div>