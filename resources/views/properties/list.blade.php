@extends('layouts.app')
@section('content')
    <section>
           <div class="container">
                <div class="row">
                        <div class="col-md-4 mt-4">
                            <div class="row mx-2">
                                {{-- <div class="col-12 titulo-filtro">
                                    <h2 class="">Filtrá tu búsqueda</h2>
                                </div> --}}
                                
                                {{-- <div class="col-12 mt-4">
                                <h4 class="subtitulo-filtro">Tipo de Propiedad</h4>
                                </div>  --}}
    
                                {{-- <div class="col-12">
                                    <ul class="list-unstyled">
                                        @foreach($categories as $category)
                                            <li>
                                                <a class="link-filtro" href="{{url('/properties/find/' . $category->id)}}">
                                                    {{$category->name}}
                                                </a>
                                            </li>
                                        @endforeach
                                        <li>
                                            <a class="link-filtro" href="{{url('/properties')}}">
                                                Ver Todo
                                            </a>
                                        </li>
                                    </ul>
                                </div> --}}
    
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
                            @if(auth()->user()->role_id == '1')
                                    {{-- <a class="btn btn-link link-filtro ml-2 mt-4" href="{{url('properties/list')}}">
                                        Modificar listado de Propiedades
                                    </a> --}}
                                    <a class="btn btn-link link-filtro ml-2 mt-4" href="{{url('properties/new')}}">
                                        Agregar nueva propiedad
                                    </a>
                            @endif
                            </div>
    
                        </div>
               

                    <div class="col-md-8 d-flex justify-content-center align-items-start p-4">
                        <div class="row">
                            {{-- <div class="col-12">
                                <h2>Propiedades</h2>
                            </div> --}}
                            
                            @foreach ($properties as $property)      

                                <div class="col-12 border rounded p-3 mb-3">
                                    <div class="row">
                                        <div class="col-4 mx-2">
                                            <img class="imagen-propiedad" id="imagen-propiedad" src="{{Storage::url($property->image)}}" alt="">
                                            <a href="{{url('properties/' . $property->id . '/edit')}}" class="imagen-propiedad btn btn-link mt-4">Modificar</a>
                                            <form action="{{ url('/properties'.'/'.$property->id) }}" method="POST">
                                                @method('delete')
                                                @csrf
                                                <button type="submit" class="imagen-propiedad btn btn-link mt-2">Eliminar</button>
                                              </form>
                                            
                                        </div>
                                        <div class="col-6">
                                            <h4 class="precio-propiedad border rounded px-1 py-1">{{$property->type->name}} - {{$property->currency}} {{$property->price}}</h4>
                                            <h4 class="tipo-propiedad">{{$property->category->name}}</h4>
                                            <h4 class="descripcion-propiedad">{{$property->address}}</h4>
                                            <h5 class="tips-propiedad">{{$property->tips}}</h4>
                                            <div class="row">
                                                <div class="col-12">
                                                    {{$property->description}}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>    
                    </div>
               </div>
           </div>
    </section>
@endsection
