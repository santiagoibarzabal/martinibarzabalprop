@extends('layouts.app')
@section('content')
<section>
        <div class="container">
        
            <div class="servicios pb-4 my-4">
                <h2 class="titulo-contacto text-center">Tasación</h2>
                <h4 class="subtitulo-servicios text-center">Asesoramiento y consultoría de primer nivel para tu propiedad.</h4>
            </div>
               
            <div class="row formulario-contacto d-flex justify-content-center">
                <form method="post" action="{{url('tasaciones')}}" class="col-4">
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
                            <textarea class="form-control" id="question" name="question" rows="3" placeholder="Descripción de la propiedad"></textarea>
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
