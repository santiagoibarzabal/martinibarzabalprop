@extends('layouts.app')
@section('content')
    <section>
           <div class="container">
               <div class="row">
                    <div class="col-md-4 mt-4">
                        <div class="row border rounded mx-2">
                            {{-- <div class="col-12 titulo-filtro">
                                <h2 class="">Filtrá tu búsqueda</h2>
                            </div> --}}
                            
                            <div class="col-12 mt-4">
                            <h4 class="subtitulo-filtro">Tipo de Propiedad</h4>
                            </div> 

                            <div class="col-12">
                                <ul class="list-unstyled">
                                    @foreach($categories as $category)
                                        <li>
                                            <a class="link-filtro" href="{{route('filtro', [strtolower(str_replace(" ","-",$category->name)), $category->id])}}">
                                                {{$category->name}}
                                            </a>
                                        </li>
                                    @endforeach
                                    <li>
                                        <a class="link-filtro" href="{{url('/propiedades')}}">
                                            Ver Todo
                                        </a>
                                    </li>
                                </ul>
                            </div>

                            {{-- <div class="col-12">
                                <h4 class="subtitulo-filtro">Tipo de operación</h4>
                            </div> --}}

                            {{-- <div class="col-12">
                                    <ul class="list-unstyled">
                                        @foreach($types as $type)
                                            <li>
                                                <a class="link-filtro" href="{{url('/types/' . $type->id)}}">
                                                    {{$type->name}}
                                                </a>
                                            </li>
                                        @endforeach
                                    </ul>
                            </div> --}}
                        
                        </div>

                    </div>

                    <div class="col-md-8 d-flex justify-content-center align-items-start p-4">
                        <div class="row">
                            {{-- <div class="col-12">
                                <h2>Propiedades</h2>
                            </div> --}}
                          

                                <div class="col-12 border rounded p-3 mb-3">
                                    <div class="row">
                                        <div class="col-4 mx-2">
                                            <a href="{{url('propiedades/'.$property->id)}}"><img class="imagen-propiedad" id="imagen-propiedad" src="{{Storage::url($property->image)}}" alt=""></a>
                                            <a target="_blank" href="https://www.zonaprop.com.ar/propiedades/piso-alto-160-m-sup2--con-aire-acondicionado-central-45578250.html#&gid=1&pid=1" class="w-100 btn btn-link mt-4">Ver Fotos (Zona Prop)</a>
                                            {{-- <a target="_blank" href="{{url('contacto')}}" class="imagen-propiedad btn btn-link mt-2">Consulta escrita</a> --}}
                                            <a target="_blank" href="tel:+5491166361321" class="w-100 btn btn-link mt-2">Llamar</a>
                                            @if(isset(auth()->user()->role_id) && auth()->user()->role_id == '1')
                                            <a href="{{url('propiedades/' . $property->id . '/edit')}}" class="w-100 btn btn-link mt-2">Modificar propiedad</a>
                                            @endif
                                        </div>
                                        <div class="col-7">
                                            <h4 class="precio-propiedad border rounded px-1 py-1">{{$property->type->name}} - {{$property->currency}} {{$property->price}}</h4>
                                            <h4 class="tipo-propiedad"><a href="{{url('propiedades/'.$property->id)}}">{{$property->category->name}}</a></h4>
                                            <h4 class="descripcion-propiedad">{{$property->address}} - {{$property->town}}</h4>
                                            <h5 class="tips-propiedad">{{$property->tips}}</h4>
                                            <div class="row">
                                                <div class="col-12 mb-4">
                                                    @if(isset($property->full_description))
                                                    {{$property->full_description}} 
                                                    @else
                                                    {{$property->description}}
                                                    @endif
                                                </div>
                                            </div>
                                            

                               

                        </div>    
                    </div>


                    <div class="row mt-4">
                                               
                            <div class="col-4">
                                <div class="h6 text-center titulo-servicios font-weight-bold">Características</div>
                                <ul class="list-unstyled text-center">
                                    @foreach ($features as $feature)
                                    <li class="items px-1 ">
                                        {{$feature->name}}
                                    </li>
                                    @endforeach
                                </ul>
                            </div>
                            <div class="col-4">
                                    <div class="h6 text-center titulo-servicios font-weight-bold">Ambientes</div>
                                    <ul class="list-unstyled text-center">
                                        @foreach ($rooms as $room)
                                        <li class="items px-1">
                                            {{$room->name}}
                                        </li>
                                        @endforeach
                                    </ul>
                            </div>
                            <div class="col-4">
                                    <div class="h6 text-center titulo-servicios font-weight-bold">Servicios</div>
                                    <ul class="list-unstyled text-center">
                                        @foreach ($services as $service)
                                        <li class="items px-1">
                                            {{$service->name}}
                                        </li>
                                        @endforeach
                                    </ul>
                            </div>
                        
                    </div>
                    <div class="row text-center formulario-contacto d-flex justify-content-center mt-4">
                        <div class="col-md-9">
                        <h4 class="descripcion-propiedad mb-4 text-center">Consultános sobre esta propiedad</h4>
                        <form method="post" action="{{url('propiedades/'.$property->id)}}" class="col-12">
                            @csrf
                            {{-- <div class="form-group">
                                 <input class="form-control" type="text" id="name" name="name" placeholder="Nombre"> 
                                 @error('name')
                                <div class="invalid-feedback d-block" role="alert">
                                    <strong>{{ $message }}</strong>
                                </div>
                                @enderror  
                            </div>  --}}
                             
                            <div class="form-group">
                                <input class="form-control" type="email" id="email" name="email" placeholder="Ingresá tu email"> 
                                @error('email')
                                <span class="invalid-feedback d-block" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                           
                            {{-- <div class="form-group">
                                <input class="form-control" type="text" id="phone" name="phone" placeholder="Teléfono"> 
                                @error('phone')
                                    <span class="invalid-feedback d-block" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div> --}}
                            
                            <div class="form-group text-left">
                                    <textarea class="form-control" id="question" name="question" rows="3" placeholder="">Quiero más información sobre la propiedad en {{strtolower($property->type->name)}} con ubicación en {{$property->address}}
                                    </textarea>
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
                                    <p class="col-9 mensaje text-xs mt-4">
                                        {{session('message')}}
                                    </p>
                            @endif
                            {{-- <br><br> --}}
                            {{-- <a class="btn btn-contacto" href="htps://api.whatsapp.com/send?phone=5491166361321"> Enviar WhatsApp</a> --}}
                            
                        </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

                    
               </div>
           </div>
    </section>
@endsection