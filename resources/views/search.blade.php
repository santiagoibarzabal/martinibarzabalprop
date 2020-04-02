@extends('layouts.app')
@section('content')
<section>
        <div class="container">
        
            <div class="servicios pb-4 my-4">
                <h2 class="titulo-servicios text-center">Búsqueda</h2>
                <h4 class="subtitulo-servicios text-center"> Te ofrecemos una búsqueda personalizada enfocada en tus objetivos.</h4>
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
                            <textarea class="form-control" id="textarea" name="textarea" rows="3" placeholder="Contanos qué estás buscando"></textarea>
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
