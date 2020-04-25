@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center mt-4">
        <div class="">
            <div class="card">
                <div class="card-header">Bienvenido</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    Iniciaste sesión como {{ auth()->user()->name}}
                </div>

                <div class="row">
                    <button class="btn btn-ibarzabal m-4">
                        <a href="{{url('propiedades/new')}}">
                            {{ __('Insertar nueva propiedad') }}
                        </a>
                    </button>
                    <button class="btn btn-ibarzabal m-4">
                            <a href="{{url('propiedades/list')}}">
                                {{ __('Listado de Propiedades') }}
                            </a>
                        </button>
                    </div> 
                    <div class="row d-flex justify-content-end">
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" class="btn btn-ibarzabal m-4">
                            {{ __('Cerrar sesión') }}    
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
