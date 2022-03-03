@extends('layouts.app')

@section('title', 'Perfil')

@section('content')
<div class="block mx-auto my-12 p-8 bg-white w-1/3 border border-gray-200 rounded-lg shadow-lg">
    <form class="mt-4" method="POST" action="">
        @csrf

        <input type="text" class="border border-gray-200 rounded-md 
        bg-gray-200 w-full text-lg placeholder-gray-900 p-2 my-2 focus:bg-white" 
        placeholder="Name" id="name" name="name" value="{{ $user->name }}">

        <input type="text" class="border border-gray-200 rounded-md 
        bg-gray-200 w-full text-lg placeholder-gray-900 p-2 my-2 focus:bg-white" 
        placeholder="Phone" id="telefono" name="telefono" value="{{ $user->telefono }}">

        <input type="text" class="border border-gray-200 rounded-md 
        bg-gray-200 w-full text-lg placeholder-gray-900 p-2 my-2 focus:bg-white" 
        placeholder="Address" id="direccion" name="direccion" value="{{ $user-direccion }}">

        <input type="text" class="border border-gray-200 rounded-md 
        bg-gray-200 w-full text-lg placeholder-gray-900 p-2 my-2 focus:bg-white" 
        placeholder="C.I." id="cedula" name="cedula" value="{{ $user->cedula }}">

        <button type="submit" class="rounded-md bg-indigo-500 w-full text-lg text-white font-semibold 
        p-2 my-3 hover:bg-indigo-600 focus:bg-indigo-700"><a href="{{route('profile.update')}}">Send</a></button>

    </form>
</div>

@endsection