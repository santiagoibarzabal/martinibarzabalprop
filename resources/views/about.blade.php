@extends('layouts.app')
@section('content')
<section>
        <div id="intro" class="carousel slide" data-ride="carousel" data-interval="3000">
            <div class="carousel-inner">
                <div class="carousel-item active">
                <img class="d-block w-100" src="/img/retiro.png" alt="Martín Ibarzábal Servicios Inombiliarios - Retiro">
                    <div class="carousel-caption d-none d-md-block">
                            <h2 class="headlines">Un lugar donde los valores no se negocian</h2>
                            <a href="{{url('/contacto')}}" class="btn btn-cta btn-danger btn-lg"> Más información </a>
                    </div>
                </div>
                <div class="carousel-item">
                <img class="d-block w-100" src="/img/agira.png"alt="Martín Ibarzábal Servicios Inombiliarios - Agira">
                    <div class="carousel-caption d-none d-md-block">
                            <h2 class="headlines">Te brindamos atención personalizada y de calidad </h2>
                            <a href="{{url('/busqueda')}}" class="btn btn-cta btn-danger btn-lg"> Realizar búsqueda</a>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="/img/guemes.png" alt="Martín Ibarzábal Servicios Inombiliarios - Guemes">
                        <div class="carousel-caption d-none d-md-block">
                            <h2 class="headlines">Contactános y encontrá la mejor opción para tu búsqueda</h2>
                            <a href="{{url('/contacto')}}" class="btn btn-cta btn-danger btn-lg"> Quiero saber más </a>
                        </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#intro" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#intro" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>


    <div class="container">

    {{-- <div class="row">
        <img class="landing" src="/img/landing1.jpg" alt="Propiedades Martin Ibarzabal">
    </div> --}}

    <div class="servicios pb-4 my-4">
        <h2 class="titulo-servicios text-center">Nuestros servicios</h2>
        <h4 class="subtitulo-servicios text-center">Un servicio personalizado enfocado en la mejor solución para nuestros clientes. </h4>
    </div>
       
    <div class="row d-flex justify-content-center mb-4">
        <div class="col-md-4 bg-oscuro py-2">
            <h4 class="text-center item-servicios">Brokerage de Propiedades</h4>
            <p class="text-center subitem-servicios"> Venta y alquiler en los rubros: </p>
                <ul class="text-center list-unstyled descripcion-servicios">
                    <li>Oficinas</li>
                    <li>Locales</li>
                    <li>Departamentos</li>
                    <li>Casas</li>
                    <li>Terrenos</li>
                    <li>Industriales</li>
                </ul>
        </div>
        <div class="col-md-4 py-2 bg-medio">
            <h4 class="text-center item-servicios">Tasaciones y consultoría</h4>
            <p class="text-center subitem-servicios"s>Valuación de activos sustentada en: </p>
            <ul class="text-center list-unstyled descripcion-servicios">
                <li>Valor de reposición</li>
                <li>Valor actual</li>
                <li>Capitalización de la renta potencial</li>
                <li>Comparación de ventas</li>
            </ul>
        </div>
        <div class="col-md-4 bg-oscuro py-2">
            <h4 class="text-center item-servicios">Búsquedas exclusivas</h4> 
            <p class="text-center subitem-servicios">Etapas de la propuesta:</p>
            <ul class="text-center list-unstyled descripcion-servicios">
                <li>Definición de objetivos</li>
                <li>Alcance</li>
                <li>Ejecución</li>
                <li>Clasificación y selección de alternativas</li>
                <li>Visitas a inmuebles elegidos</li>
                <li>Informe y evaluación</li>

            </ul>
        </div>  
    </div>
    
    <div class="row">
        <div class="col-md-12 d-flex justify-content-center">
            <h2 class="d-none d-lg-block titulo-clientes mt-4 titulo-servicios">Clientes</h2>
        </div>
    </div>
    <div class="row d-flex align-items-center mx-0 ml-4">
        {{-- Logo Agira --}}
        <div class="d-none d-lg-block col-3 col-md-2 col-lg-2 my-4">
            <img class="logo" src="{{ asset('img/logo-agira.png')}}" alt="Logo Agira - Ibarzabal Servicios Inmobiliarios">
        </div>
        {{-- Logo Amanco --}}
        {{-- <div class="d-none d-lg-block col-3 col-md-2 col-lg-2">
            <img class="logo" src="{{ asset('img/logo-amanco.png')}}" alt="Logo">
        </div> --}}
        {{-- Logo Bodegas Argentina --}}
        <div class="d-none d-lg-block col-3 col-md-2 col-lg-2 my-4">
            <img class="logo" src="{{ asset('img/logo-bodegasargentina.png')}}" alt="Logo Bodegas Argentina- Ibarzabal Servicios Inmobiliarios">
        </div>
        {{-- Logo Carrefour --}}
        <div class="d-none d-lg-block col-3 col-md-2 col-lg-2 my-4">
            <img class="logo" src="{{ asset('img/logo-carrefour2.png')}}" alt="Logo Carrefour - Ibarzabal Servicios Inmobiliarios">
        </div>
        {{-- Logo EMA --}}
        {{-- <div class="d-none d-lg-block col-3 col-md-2 col-lg-2 my-4">
            <img class="logo" src="{{ asset('img/logo-ema.png')}}" alt="Logo - Ibarzabal Servicios Inmobiliarios">
        </div> --}}
        {{-- Logo Faber Castell --}}
        <div class="d-none d-lg-block col-3 col-md-2 col-lg-2 my-4">
            <img class="logo" src="{{ asset('img/logo-faber2.png')}}" alt="Logo Faber Castell - Ibarzabal Servicios Inmobiliarios">
        </div>
        {{-- Logo Galicia--}}
        <div class="d-none d-lg-block col-3 col-md-2 col-lg-2 my-4">
            <img class="logo" src="{{ asset('img/logo-galicia.png')}}" alt="Logo Galicia - Ibarzabal Servicios Inmobiliarios">
        </div>
        {{-- Logo Gimos --}}
        {{-- <div class="d-none d-lg-block col-3 col-md-2 col-lg-2 my-4">
            <img class="logo" src="{{ asset('img/logo-gimos.png')}}" alt="Logo - Ibarzabal Servicios Inmobiliarios">
        </div> --}}
         {{-- Logo Lecoq --}}
         <div class="d-none d-lg-block col-3 col-md-2 col-lg-2 my-4">
                <img class="logo" src="{{ asset('img/logo-lecoq3.jpg')}}" alt="Logo Lecoq - Ibarzabal Servicios Inmobiliarios">
        </div>
        {{-- Logo Maped --}}
        <div class="d-none d-lg-block col-3 col-md-2 col-lg-2 my-4">
                <img class="logo" src="{{ asset('img/logo-maped.png')}}" alt="Logo Maped - Ibarzabal Servicios Inmobiliarios">
        </div>
        {{-- Logo Montelectro --}}
        <div class="d-none d-lg-block col-3 col-md-2 col-lg-2 my-4">
                <img class="logo" src="{{ asset('img/logo-montelectro.png')}}" alt="Logo Montelectro - Ibarzabal Servicios Inmobiliarios">
        </div>
         {{-- Logo OMYA --}}
         <div class="d-none d-lg-block col-3 col-md-2 col-lg-2 my-4">
                <img class="logo" src="{{ asset('img/logo-omya.png')}}" alt="Logo OMYA - Ibarzabal Servicios Inmobiliarios">
        </div>
         {{-- Logo Oxford --}}
         <div class="d-none d-lg-block col-3 col-md-2 col-lg-2 my-4">
                <img class="logo" src="{{ asset('img/logo-oxford.png')}}" alt="Logo Oxford - Ibarzabal Servicios Inmobiliarios">
        </div>
         {{-- Logo Schneider Electric--}}
         <div class="d-none d-lg-block col-3 col-md-2 col-lg-2 my-4">
                <img class="logo" src="{{ asset('img/logo-schneider2.png')}}" alt="Logo Schneider Electric - Ibarzabal Servicios Inmobiliarios">
        </div>
        {{-- Logo World-Courier --}}
        <div class="d-none d-lg-block col-3 col-md-2 col-lg-2 my-4">
                <img class="logo" src="{{ asset('img/logo-worldcourier.png')}}" alt="Logo World Courier - Ibarzabal Servicios Inmobiliarios">
        </div>    
    </div>
    <hr class="linea">
</div>
</section>
@endsection
