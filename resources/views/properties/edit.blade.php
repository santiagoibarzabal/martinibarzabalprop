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
                            
                          
                               
                          

                            <form action="{{url('properties/' .$id)}}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    @method('patch')
                                <div class="col-12 border rounded p-3 mb-3">
                                    <div class="row">
                                        {{-- IMAGEN --}}
                                        <div class="col-4">
                                            <img class="imagen-propiedad" src="/img/logo-casa.png" alt="" id="imgclick"><br>
                                            <div class="border rounded mt-2" id="info">Cargar imagen</div>
                                            {{-- <a class="btn btn-link" href="">Cargar imagen</a> --}}
                                            {{-- <label class="imagen btn btn-link" id="img" for="img"><p class="editar-avatar">Cargar imagen</p></label> --}}
                                            
                                            
                                            <input class="form-control imagen btn btn-link @error('image') is-invalid @enderror" type="file" name="image" value="" id="image" onchange='cambiar()'>
                                                @error('image')
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

                                        <input class="form-control @error('price') is-invalid @enderror h4 border rounded  py-1" type="text" name="price" placeholder="Precio" value="{{$property->price}}">
                                                @error('price')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror  
                                            <input class="form-control @error('currency') is-invalid @enderror h4 border rounded  py-1" type="text" name="currency" placeholder="Moneda" value="{{$property->currency}}">
                                                @error('currency')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror  
                                            <input class="form-control @error('address') is-invalid @enderror h4 border rounded py-1" type="text" placeholder="Ubicación" name="address" value="{{$property->address}}">
                                                @error('address')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror  
                                            <input class="form-control @error('tips') is-invalid @enderror h4 border rounded py-1" type="text" placeholder="Tips" name="tips" value="{{$property->tips}}">
                                                @error('tips')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            <textarea rows="5" cols="50" class="form-control @error('description') is-invalid @enderror h4 border rounded py-1" type="text" placeholder="Descripción" name="description" value="">{{$property->description}}</textarea>
                                                @error('description')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror  

                                                {{-- <input class="form-control @error('details') is-invalid @enderror h4 border rounded py-1" type="textarea" placeholder="Detalles" name="details">
                                                @error('details')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror   --}}

                                            <input class="form-control @error('link') is-invalid @enderror h4 border rounded py-1" type="text" placeholder="Link ZonaProp" name="link" value="{{$property->link}}">
                                            @error('link')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror  
                                            
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
