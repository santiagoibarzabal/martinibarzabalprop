<div class="container">
    <header class="">
        <nav class="">
            <div class="row d-flex justify-content-center align-items-center m-2">
                    <div class="d-none d-lg-block col-lg-2 d-flex justify-content-center">
                             <a href=""><img class="logo-navbar" src="{{asset('img/logo.png')}}" alt=""> </a>
                     </div>
                    <div class="d-none d-lg-block col-md-2 navbar-item">
                        <li>
                            <a class="navbar-link" href="{{url('/')}}"> Nosotros </a>
                        </li>
                    </div>
                    <div class="d-none d-lg-block col-md-2 navbar-item">
                            <li>
                                <a class="navbar-link" href="{{url('/properties')}}"> Propiedades </a>
                            </li>
                        </div>

                    @if(!isset(auth()->user()->role_id) || auth()->user()->role_id != '1')
                    <div class="d-none d-lg-block col-md-2 navbar-item">
                        <li>
                            <a class="navbar-link" href="{{url('/tasaciones')}}"> Tasación </a>
                        </li>
                    </div>
                    <div class="d-none d-lg-block col-md-2 navbar-item">
                    <li>
                        <a class="navbar-link" href="{{url('/busqueda')}}"> Búsqueda </a>
                    </li>
                    </div>
                    <div class="d-none d-lg-block col-md-2 navbar-item">
                        <li>
                            <a class="navbar-link" href="{{url('/contacto')}}"> Contacto </a>
                        </li>
                    </div>
                    @endif

                    @if(isset(auth()->user()->role_id) && auth()->user()->role_id == '1')
                    <div class="d-none d-lg-block col-md-2 navbar-item">
                        <li>
                            <a class="navbar-link" href="{{url('/home')}}"> Panel </a>
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
                                    <a class="navbar-link dropdown-item" href="{{url('/properties')}}"> Propiedades </a>
                                    <a class="navbar-link dropdown-item" href="{{url('/')}}"> Nosotros </a>
                                    <a class="navbar-link dropdown-item" href="{{url('/tasaciones')}}"> Tasación </a>
                                    <a class="navbar-link dropdown-item" href="{{url('/busqueda')}}"> Búsqueda </a>
                                    <a class="navbar-link dropdown-item" href="{{url('/contacto')}}"> Contacto </a>
                                </div>
                        </li>
                    </div>
            </div>
        </nav>
    </header>
</div>