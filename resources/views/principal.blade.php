@extends('layouts.app')

@section('titulo', 'Página Principal')

@section('contenido')
    <div class="w-full h-[70vh] bg-cover bg-center" style="background-image: url('https://cdn.fondecranvip.com/2025/02/DHrmGYtC-fond-decran-capybara-42.webp');">
        <div class="w-full h-full flex items-center justify-center bg-black/60">
            <h1 class="text-4xl md:text-6xl font-bold text-white">
                Bienvenido a <span class="text-orange-400">BookMart</span>
            </h1>
        </div>
    </div>

    <section class="container mx-auto grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 px-3 space-x-4">      
        <x-card-list >
            <x-slot:subtitulo>
                Nuevos Lanzamientos
            </x-slot:subtitulo>
    
            <x-slot:titulo>
                Colección de Ficción 2025
            </x-slot:titulo>
        </x-card-list>

        <x-card-list >
            <x-slot:subtitulo>
                Nuevos Lanzamientos
            </x-slot:subtitulo>
    
            <x-slot:titulo>
                Colección de Ficción 2025
            </x-slot:titulo>
        </x-card-list>
        
        <x-card-list >
            <x-slot:subtitulo>
                Nuevos Lanzamientos
            </x-slot:subtitulo>
    
            <x-slot:titulo>
                Colección de Ficción 2025
            </x-slot:titulo>
        </x-card-list>
    </section>

    <section class="my-10">
        <h2 class="text-center text-2xl font-bold mb-10 uppercase">Libro en tendencia</h2>
        <x-book-list />
    </section>
@endsection