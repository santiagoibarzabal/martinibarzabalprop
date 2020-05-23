@extends('layouts.app')
@section('seo')

@include('partials.seo')
@section('content')
<section>
        <div class="container">
        
            <div class="servicios pb-4 my-4">
                <h2 class="titulo-contacto text-center">Búsqueda</h2>
                <h4 class="subtitulo-servicios text-center"> Te ofrecemos una búsqueda personalizada enfocada en tus objetivos.</h4>
            </div>
               
            <div class="row formulario-contacto d-flex justify-content-center">
                <form method="post" action="{{url('busqueda')}}" class="col-10 col-md-4">
                    @csrf
                    <div class="form-group">
                         <input class="form-control" type="text" id="name" name="name" placeholder="Nombre"> 
                         @error('name')
                        <div class="invalid-feedback d-block" role="alert">
                            <strong>{{ $message }}</strong>
                        </div>
                        @enderror  
                    </div> 
                     
                    <div class="form-group">
                        <input class="form-control" type="email" id="email" name="email" placeholder="Mail"> 
                        @error('email')
                        <span class="invalid-feedback d-block" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                   
                    <div class="form-group">
                        <input class="form-control" type="text" id="phone" name="phone" placeholder="Teléfono"> 
                        @error('phone')
                            <span class="invalid-feedback d-block" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    
                    <div class="form-group">
                            <textarea class="form-control" id="question" name="question" rows="3" placeholder="Contanos qué estás buscando"></textarea>
                            @error('question')
                            <span class="invalid-feedback d-block" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                    </div>
                    
                    <div class="d-flex justify-content-center mt-4"> 
                        <input type="submit" class="btn btn-md btn-contacto" value="Enviar">
                    </div>
                    
                    @if (session('message'))
                        <p class="col-12 mensaje text-xs mt-4">
                            {{session('message')}}
                        </p>
                    @endif
                    {{-- <br><br> --}}
                    {{-- <a class="btn btn-contacto" href="htps://api.whatsapp.com/send?phone=5491166361321"> Enviar WhatsApp</a> --}}
                    
                </form>
            </div>

        </div>
        </section>
@endsection
