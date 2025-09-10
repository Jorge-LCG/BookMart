@extends('layouts.app')

@section('titulo', 'Tu cuenta')

@section('contenido')
    <div class="flex items-center justify-center my-15 px-3">
        <div class="w-full max-w-md">
            <h1 class="text-center text-2xl font-bold mb-6">Bienvenido, {{ Auth::user()->name }}</h1>
        </div>
    </div>
@endsection