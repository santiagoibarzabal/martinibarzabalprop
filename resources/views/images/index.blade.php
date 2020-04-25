@extends('layouts.app')
@section('content')
<section>
    <div class="container">
        <div class="h2 titulo-servicios text-center mb-4"> 
            Galería de propiedad
        </div>
        <div id="intro" class="carousel slide">
            <div class="carousel-inner">
                <div class="carousel-item show-images active">
                <img class="d-block w-100" src="/img/retiro.png" alt="Martín Ibarzábal Servicios Inombiliarios">
                </div>
                <div class="carousel-item">
                <img class="d-block w-100 show-images" src="/img/agira.png"alt="Martín Ibarzábal Servicios Inombiliarios">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100 show-images" src="/img/guemes.png" alt="Martín Ibarzábal Servicios Inombiliarios">
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
    </div>
</section>
@endsection
