@extends('layouts.app')
@section('seo')

@include('partials.seo')
@section('content')
<section>
        <div class="container">
        
            <div class="servicios pb-4 my-4">
                <h2 class="titulo-servicios text-center">Tasación</h2>
                <h4 class="subtitulo-servicios text-center"> Asesoramiento y consultoría de primer nivel para tu propiedad.</h4>
            </div>
               
            <div class="row formulario-contacto d-flex justify-content-center">
                <form action="" class="col-4">
                    <div class="form-group">
                         <input class="form-control" type="text" id="name" name="name" placeholder="Nombre"> 
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="email" id="email" name="email" placeholder="Mail"> 
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="text" id="phone" name="phone" placeholder="Teléfono"> 
                    </div>
                    <div class="form-group">
                            <textarea class="form-control" id="textarea" name="textarea" rows="3" placeholder="Descripción de la propiedad"></textarea>
                        </div>
                    <div class="d-flex justify-content-center mt-4"> 
                        <input type="submit" class="btn btn-md btn-contacto" value="Enviar">
                        
                    </div>
                    {{-- <br><br> --}}
                    {{-- <a class="btn btn-contacto" href="htps://api.whatsapp.com/send?phone=5491166361321"> Enviar WhatsApp</a> --}}
                    
                </form>
            </div>

        </div>
        </section>
@endsection
