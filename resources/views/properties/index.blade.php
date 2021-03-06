@extends('layouts.app')
@section('seo')
@include('partials.seo')
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

                        <div class="row d-flex justify-content-center">
                        @if(isset(auth()->user()->role_id) && auth()->user()->role_id == '1')
                                <a class="btn btn-link link-filtro ml-2 mt-4" href="{{url('propiedades/list')}}">
                                    Modificar listado de Propiedades
                                </a>
                                <a class="btn btn-link link-filtro ml-2 mt-4" href="{{url('propiedades/new')}}">
                                    Agregar nueva propiedad
                                </a>
                        @endif
                        </div>

                    </div>

                    <div class="col-md-8 d-flex justify-content-center align-items-start p-4">
                        <div class="row d-flex justify-content-center text-center text-md-left">
                            {{-- <div class="col-12">
                                <h2>Propiedades</h2>
                            </div> --}}
                            
                            @forelse ($properties as $property)     

                                <div class="col-10 col-md-12 border rounded p-3 mb-3">
                                    <div class="row">
                                        <div class="col-0 col-md-4 mx-2">
                                        <a href="{{url('propiedades/'. $property->slug)}}"><img class="d-none d-md-block imagen-propiedad" src="{{Storage::url($property->image)}}" alt="{{$property->alt_text}}"></a>
                                            <a href="{{url('propiedades/'.$property->slug)}}" class="d-none d-md-block w-100 btn btn-link mt-4">Más info</a>
                                            {{-- <a href="{{url('contacto')}}" class="w-100 btn btn-link mt-2">Consulta escrita</a> --}}
                                            <a target="_blank" href="tel:+5491166361321" class="d-none d-md-block w-100 btn btn-link mt-2">Llamar</a>
                                        </div>
                                        <div class="col-12 col-md-7">
                                            <h4 class="precio-propiedad border rounded px-1 py-1">{{$property->type->name}} - {{$property->currency}} {{$property->price}}</h4>
                                            <a href="{{url('propiedades/'. $property->slug)}}"><img class="d-md-none imagen-propiedad" src="{{Storage::url($property->image)}}" alt="{{$property->alt_text}}"></a>
                                            <h4 class="tipo-propiedad"><a href="{{url('propiedades/'.$property->slug)}}">{{$property->category->name}}</a></h4>
                                            <h4 class="descripcion-propiedad">{{$property->address}} - {{$property->town}}</h4>
                                            <h5 class="tips-propiedad">{{$property->tips}}</h4>
                                            <div class="row">
                                                <div class="col-12">
                                                    {{$property->description}}
                                                </div>
                                            </div>
                                            <a href="{{url('propiedades/'.$property->slug)}}" class="d-md-none w-100 btn btn-link mt-4">Más info</a>
                                            <a target="_blank" href="tel:+5491166361321" class="d-md-none w-100 btn btn-link mt-2">Llamar</a>
                                        </div>
                                    </div>
                                </div>
                            @empty
                                <div class="h5 titulo-servicios mt-4">No encontramos una propiedad de este tipo</div>    
                            @endforelse


                        </div>    
                    </div>

                    
               </div>
           </div>
    </section>
@endsection
