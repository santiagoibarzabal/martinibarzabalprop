@extends('layouts.app')
@section('content')
    <section>
           <div class="container">
               <div class="row d-flex justify-content-center w-100">

                    <div class="d-flex justify-content-center align-items-start p-4">
                        <div class="row">
                            {{-- <div class="col-12">
                                <h2>Propiedades</h2>
                            </div> --}}
                            
                            <form action="{{url('propiedades/'.$id)}}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    @method('patch')
                                <div class="col-12 border rounded p-3 mb-3">
                                    <div class="row">
                                        {{-- IMAGEN --}}
                                        <div class="col-4">
                                            <img class="imagen-formularios" src="{{Storage::url($property->image)}}" alt="" id="imgclick"><br>
                                            <div class="border rounded mt-2" id="info">Cargar imagen</div>
                                            {{-- <a class="btn btn-link" href="">Cargar imagen</a> --}}
                                            {{-- <label class="imagen btn btn-link" id="img" for="img"><p class="editar-avatar">Cargar imagen</p></label> --}}
                                            <input class="form-control imagen btn btn-link @error('image') is-invalid @enderror" type="file" name="image" value="{{$property->image}}" id="image" onchange='cambiar()'>
                                                @error('image')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                @enderror   
                                            
                                            <input class="form-control mt-4 @error('alt_text') is-invalid @enderror" type="text" name="alt_text" value="{{$property->alt_text}}" id="alt_text" placeholder="Texto Alternativo">
                                            @error('alt_text')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                            @enderror   
                                        </div>
                                        
                                        <div class="col-8">

                                            <div class="row">
                                                {{-- Tipo de Propiedad --}}
                                                    {{-- <input class="form-control @error('category_id') is-invalid @enderror h4 border rounded  py-1" type="text" name="category_id" placeholder="Tipo de Propiedad"> --}}
                                                    <div class="col-6">
                                                    <label class="btn p-0 mb-2" for="category_id">Propiedad</label> <br>
                                                    <select class="btn" name="category_id" id="category_id"> 
                                                        <option value="1">Departamento</option>
                                                        <option value="2">Casa</option>
                                                        <option value="3">Oficina</option>
                                                        <option value="4">Local</option>
                                                        <option value="5">Terreno</option>
                                                        <option value="6">Inmueble industrial</option>
                                                    </select>
                                                    @error('category_id')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror  
                                                    </div>
                                                {{-- Tipo de Operacion--}}    
                                                {{-- <input class="form-control @error('type_id') is-invalid @enderror h4 border rounded  py-1" type="text" name="type_id" placeholder="Tipo de operación"> --}}
                                                <div class="col-6 mb-4">    
                                                <label class="btn p-0 mb-2" for="type_id">Operación</label> <br>
                                                    <select class="btn" name="type_id" id="type_id">
                                                        <option value="1">Venta</option>
                                                        <option value="2">Alquiler</option>
                                                    </select>
                                                    @error('type_id')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                    </div>       
                                            </div>

                                            <div class="row">
                                                <div class="col-6">
                                                    <input class="form-control @error('currency') is-invalid @enderror h4 border rounded  py-1" type="text" name="currency" placeholder="Moneda" value="{{$property->currency}}">
                                                        @error('currency')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror 
                                                </div> 
                                                <div class="col-6">
                                                        <input class="form-control @error('price') is-invalid @enderror h4 border rounded  py-1" type="text" name="price" placeholder="Precio" value="{{$property->price}}">
                                                            @error('price')
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                            @enderror  
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-6">
                                                    <input class="form-control @error('address') is-invalid @enderror h4 border rounded py-1" type="text" placeholder="Dirección" name="address" value="{{$property->address}}"> 
                                                        @error('address')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror  
                                                </div>
                                                <div class="col-6">
                                                    <input class="form-control @error('town') is-invalid @enderror h4 border rounded py-1" type="text" placeholder="Localidad" name="town" value="{{$property->town}}"> 
                                                    @error('town')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror 
                                                </div>
                                            </div>









                                            <input class="form-control @error('tips') is-invalid @enderror h4 border rounded py-1" type="text" placeholder="Tips" name="tips" value="{{$property->tips}}">
                                                @error('tips')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            <textarea rows="3" cols="50" class="form-control @error('description') is-invalid @enderror h4 border rounded py-1" type="text" placeholder="Descripción" name="description">{{$property->description}}</textarea>
                                                @error('description')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror  
                                            <input class="form-control @error('link') is-invalid @enderror h4 border rounded py-1" type="text" placeholder="Link ZonaProp" name="link" value="{{$property->link}}">
                                                @error('link')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror  
                                    
                                            <div class="h5 my-3 titulo-servicios">
                                                Detalles adicionales
                                            </div>
                                            <textarea rows="4" cols="80" class="form-control @error('full_description') is-invalid @enderror h4 border rounded py-1" type="text" placeholder="Descripción extendida" name="full_description">{{$property->full_description}}</textarea>
                                                @error('full_description')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror  

                                                {{-- <div class="h6 font-weight-bold">
                                                        Características
                                                </div>
                                                
                                               

                                                <div class="row mx-1">
                                                     
                                                @for($i=0;$i<=5;$i++)
                                                @if(isset($features[$i]))

                                                    <input class="col-3 form-control @error('features[]') is-invalid @enderror h4 border rounded py-1" type="text" placeholder="Característica {{$i+1}}" name="features[]" value="{{$features[$i]->name}}">
                                                    @error('features[]')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror  
                                                @else
                                                    <input class="col-3 form-control @error('features[]') is-invalid @enderror h4 border rounded py-1" type="text" placeholder="Característica {{$i+1}}" name="features[]" value="{{old('features[]')}}">
                                                    @error('features[]')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror  
                                                @endif
                                                @endfor
                                                </div>

                                                <div class="h6 font-weight-bold">
                                                        Ambientes
                                                </div>
                                                <div class="row mx-1">
                                                     
                                                        @for($i=0;$i<=5;$i++)
                                                        @if(isset($rooms[$i]))
        
                                                            <input class="col-3 form-control @error('rooms[]') is-invalid @enderror h4 border rounded py-1" type="text" placeholder="Ambiente {{$i+1}}" name="rooms[]" value="{{$rooms[$i]->name}}">
                                                            @error('rooms[]')
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                            @enderror  
                                                        @else
                                                            <input class="col-3 form-control @error('rooms[]') is-invalid @enderror h4 border rounded py-1" type="text" placeholder="Ambiente {{$i+1}}" name="rooms[]" value="{{old('rooms[]')}}">
                                                            @error('rooms[]')
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                            @enderror  
                                                        @endif
                                                        @endfor
                                                </div>
                                                
                                                <div class="h6 font-weight-bold">
                                                        Servicios
                                                </div>
                                                <div class="row mx-1">
                                                     
                                                        @for($i=0;$i<=5;$i++)
                                                        @if(isset($services[$i]))
        
                                                            <input class="col-3 form-control @error('services[]') is-invalid @enderror h4 border rounded py-1" type="text" placeholder="Servicio {{$i+1}}" name="services[]" value="{{$services[$i]->name}}">
                                                            @error('services[]')
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                            @enderror  
                                                        @else
                                                            <input class="col-3 form-control @error('services[]') is-invalid @enderror h4 border rounded py-1" type="text" placeholder="Servicio {{$i+1}}" name="services[]" value="{{old('services[]')}}">
                                                            @error('services[]')
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                            @enderror  
                                                        @endif
                                                        @endfor
                                                </div> --}}
                
                                            
                                            <div class="col-12 d-flex justify-content-end align-self-end"> 
                                                <input class="btn btn-link" type="submit" value="Guardar">
                                            </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>    
                    </div>

                    
               </div>
           </div>
    </section>
@endsection
