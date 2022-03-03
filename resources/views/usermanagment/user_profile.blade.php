@extends('layouts.app')

@section('title', 'Perfil')

@section('content')

<div class="block mx-auto my-12 p-8 bg-white w-1/3 border border-gray-200 rounded-lg shadow-lg">

    <div class="row">
        <div class="col-md-4 mt-1">
            <div class="card text-center sidebar">
                <div class="card-body">
                    <img src="" class="rounded-circle" witdh="150">
                    <div class="mt-3">
                        <h3 class="text-3xl text-center font-bold">Perfil</h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-8 mt-1">
            <div class="card mb-3 content">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-3">
                            <h5>Nombre</h5>
                        </div>
                        <div class="col-md-9 text-secondary">
                            <b>{{ auth()->user()->name }}</b>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-3">
                            <h5>Email</h5>
                        </div>
                        <div class="col-md-9 text-secondary">
                            <b>{{ auth()->user()->email }}</b>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-3">
                            <h5>Telefono</h5>
                        </div>
                        <div class="col-md-9 text-secondary">
                            <b>{{ auth()->user()->telefono }}</b>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-3">
                            <h5>Direccion</h5>
                        </div>
                        <div class="col-md-9 text secondary">
                            <b>{{ auth()->user()->direccion }}</b>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-3">
                            <h5>Cedula</h5>
                        </div>
                        <div class="col-md-9 text-secondary">
                            <b>{{ auth()->user()->cedula }}</b>
                        </div>
                    </div>
                </div>
            </div>
                <li>
                <a href="{{ route('profile.editar')}}" class="font-bold py-3
                 px-4 rounded-md bg-green-500 hover:bg-green-600">Editar</a>
                </li>
        </div>


</div>

@endsection