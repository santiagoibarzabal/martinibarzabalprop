@extends('layouts.app')
@section('content')
<section>
    <div class="container">
        <div class="row justify-content-center">
            <div class="h3 titulo-servicios text-center mt-3 mb-2"> 
                {{$property->category->name}} en {{$property->type->name}} - {{$property->address}}
            </div>
        </div>

        <div class="row justify-content-center">
            <a class="btn btn-ibarzabal my-2" href="{{url('propiedades/'.$property->slug)}}">Volver a la propiedad</a> 
        </div>

        <div class="row justify-content-center"> 
            <div class="col-12 col-md-10 col-lg-7 carousel slide" id="intro">
                <div class="carousel-inner">
                    @forelse($property->gallery->images as $key => $image)
                    <div class="carousel-item show-images item{{ $key == 0 ? ' active' : '' }}">
                    <img class="d-block w-100" src="{{Storage::url($image->name)}}" alt="{{$image->alt_text}}">
                    </div>
                    @empty 
                    <div class="h4 titulo-servicios">Aún no hay imágenes</div>
                    @endforelse
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
    </div>
</section>
@endsection
