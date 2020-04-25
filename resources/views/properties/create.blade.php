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
                            
                            <form action="{{url('propiedades')}}" method="post" enctype="multipart/form-data">
                                    @csrf
                                <div class="col-12 border rounded p-3 mb-3">
                                    <div class="row">
                                        {{-- IMAGEN --}}
                                        <div class="col-4">
                                            <img class="imagen-formularios" src="/img/logo-casa.png" alt="" id="imgclick"><br>
                                            <div class="border rounded mt-2" id="info">Cargar imagen</div>
                                            {{-- <a class="btn btn-link" href="">Cargar imagen</a> --}}
                                            {{-- <label class="imagen btn btn-link" id="img" for="img"><p class="editar-avatar">Cargar imagen</p></label> --}}
                                            <input class="form-control imagen btn btn-link @error('image') is-invalid @enderror" type="file" name="image" value="{{old('image')}}" id="image" onchange='cambiar()'>
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

                                            <div class="row">
                                                <div class="col-6">
                                                    <input class="form-control @error('currency') is-invalid @enderror h4 border rounded  py-1" type="text" name="currency" placeholder="Moneda" value="{{old('currency')}}">
                                                        @error('currency')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror 
                                                </div> 
                                                <div class="col-6">
                                                        <input class="form-control @error('price') is-invalid @enderror h4 border rounded  py-1" type="text" name="price" placeholder="Precio" value="{{old('price')}}">
                                                            @error('price')
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                            @enderror  
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-6">
                                                    <input class="form-control @error('address') is-invalid @enderror h4 border rounded py-1" type="text" placeholder="Dirección" name="address" value="{{old('address')}}"> 
                                                        @error('address')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror  
                                                </div>
                                                <div class="col-6">
                                                    <input class="form-control @error('town') is-invalid @enderror h4 border rounded py-1" type="text" placeholder="Localidad" name="town" value="{{old('town')}}"> 
                                                    @error('town')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror 
                                                </div>
                                            </div>









                                            <input class="form-control @error('tips') is-invalid @enderror h4 border rounded py-1" type="text" placeholder="Tips" name="tips" {{old('tips')}}>
                                                @error('tips')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            <textarea rows="5" cols="50" class="form-control @error('description') is-invalid @enderror h4 border rounded py-1" type="text" placeholder="Descripción" name="description"></textarea>
                                                @error('description')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror  
                                            <input class="form-control @error('link') is-invalid @enderror h4 border rounded py-1" type="text" placeholder="Link ZonaProp" name="link" value="{{old('link')}}">
                                                @error('link')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror  
                                    
                                            <div class="h5 my-3 titulo-servicios">
                                                Detalles adicionales
                                            </div>
                                            <textarea rows="10" cols="80" class="form-control @error('full_description') is-invalid @enderror h4 border rounded py-1" type="text" placeholder="Descripción extendida" name="full_description"></textarea>
                                                @error('full_description')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror  
                                            
                                            <div class="h6">
                                                    Características
                                            </div>
                                            
                                            <div class="row justify-content-between mx-1">
                                                
                                                <input class="col-3 form-control @error('features[]') is-invalid @enderror h4 border rounded py-1" type="text" placeholder="Característica 1" name="features[]" value="{{old('features[]')}}">
                                                @error('features[]')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror  
                                                <input class="col-3 form-control @error('features[]') is-invalid @enderror h4 border rounded py-1" type="text" placeholder="Característica 2" name="features[]" value="{{old('features[]')}}">
                                                @error('features[]')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror  
                                                <input class="col-3 form-control @error('features[]') is-invalid @enderror h4 border rounded py-1" type="text" placeholder="Característica 3" name="features[]" value="{{old('features[]')}}">
                                                @error('features[]')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror  
                                            </div>

                                            <div class="row justify-content-between mx-1">
                                                
                                                    <input class="col-3 form-control @error('features[]') is-invalid @enderror h4 border rounded py-1" type="text" placeholder="Característica 4" name="features[]" value="{{old('features[]')}}">
                                                    @error('features[]')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror  
                                                    <input class="col-3 form-control @error('features[]') is-invalid @enderror h4 border rounded py-1" type="text" placeholder="Característica 5" name="features[]" value="{{old('features[]')}}">
                                                    @error('features[]')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror  
                                                    <input class="col-3 form-control @error('features[]') is-invalid @enderror h4 border rounded py-1" type="text" placeholder="Característica 6" name="features[]" value="{{old('features[]')}}">
                                                    @error('features[]')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror  
                                            </div>
                                                 
                                                
                                            <div class="h6">
                                                    Ambientes
                                            </div>
                                            <div class="row justify-content-between mx-1">
                                            
                                                <input class="col-3 form-control @error('rooms') is-invalid @enderror h4 border rounded py-1" type="text" placeholder="Ambiente 1" name="rooms[]" value="">
                                                    @error('rooms')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror  
                                                    <input class="col-3 form-control @error('rooms') is-invalid @enderror h4 border rounded py-1" type="text" placeholder="Ambiente 2" name="rooms[]" value="">
                                                    @error('rooms')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror  
                                                    <input class="col-3 form-control @error('rooms') is-invalid @enderror h4 border rounded py-1" type="text" placeholder="Ambiente 3" name="rooms[]" value="">
                                                    @error('rooms')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror  
                                            </div>
                                            <div class="row justify-content-between mx-1">
                                                    <input class="col-3 form-control @error('rooms') is-invalid @enderror h4 border rounded py-1" type="text" placeholder="Ambiente 4" name="rooms[]" value="">
                                                    @error('rooms')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror  
                                                    <input class="col-3 form-control @error('rooms') is-invalid @enderror h4 border rounded py-1" type="text" placeholder="Ambiente 5" name="rooms[]" value="">
                                                    @error('rooms')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror  
                                                    <input class="col-3 form-control @error('rooms') is-invalid @enderror h4 border rounded py-1" type="text" placeholder="Ambiente 6" name="rooms[]" value="">
                                                    @error('rooms')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror  
                                            </div>

                                            
                                            <div class="h6">
                                                    Servicios
                                            </div>

                                            <div class="row justify-content-between mx-1">
                                            
                                            
                                                    <input class="col-3 form-control @error('services') is-invalid @enderror h4 border rounded py-1" type="text" placeholder="Servicio 1" name="services[]" value="{{old('services')}}">
                                                    @error('services')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror 
                                                    <input class="col-3 form-control @error('services') is-invalid @enderror h4 border rounded py-1" type="text" placeholder="Servicio 2" name="services[]" value="{{old('services')}}">
                                                    @error('services')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror 
                                                    <input class="col-3 form-control @error('services') is-invalid @enderror h4 border rounded py-1" type="text" placeholder="Servicio 3" name="services[]" value="{{old('services')}}">
                                                    @error('services')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror 
                                            </div>
                                           
                                            <div class="row justify-content-between mx-1">
                                            
                                                    <input class="col-3 form-control @error('services') is-invalid @enderror h4 border rounded py-1" type="text" placeholder="Servicio 4" name="services[]" value="{{old('services')}}">
                                                    @error('services')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror 
                                                    <input class="col-3 form-control @error('services') is-invalid @enderror h4 border rounded py-1" type="text" placeholder="Servicio 5" name="services[]" value="{{old('services')}}">
                                                    @error('services')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror 
                                                    <input class="col-3 form-control @error('services') is-invalid @enderror h4 border rounded py-1" type="text" placeholder="Servicio 6" name="services[]" value="{{old('services')}}">
                                                    @error('services')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror 
                                            </div>

                                                {{-- <div id="root">
                                                    <input type="text" id="input" v-model="newService">
                                                    <div class="row ml-1 my-2">
                                                        <button :title="title" :disabled="newService === ''" @click="addService">Agregar Servicio</button>
                                                    </div>
                                                    <input class="@error('services') is-invalid @enderror mr-2 my-2 border-0" disabled name="services[]" v-for="service in services" :value="service">
                                                    @error('services')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                    @enderror  
                                
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
