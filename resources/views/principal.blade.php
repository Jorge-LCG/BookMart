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
        <div class="mt-5 p-4 px-8 lg:px-4 bg-gray-100 rounded flex justify-between shadow">
            <div class="flex flex-col justify-center items-center space-y-0.5">
                <span class="text-orange-400 text-sm font-medium">Nuevos Lanzamientos</span>
                <h3 class="font-semibold text-xl text-gray-800">Colección de Ficción 2025</h3>
                <a href="" class="text-sm font-medium border-b border-gray-800 text-gray-800 hover:text-orange-400 hover:border-orange-400 transition-colors duration-300">Descubrir Ahora</a>
            </div>
            <img 
                src="https://m.media-amazon.com/images/I/51E2055ZGUL._SL1000_.jpg" 
                alt="imagen libro" 
                class="h-30"
            >
        </div>
        
        <div class="mt-5 p-4 px-8 lg:px-4 bg-gray-100 rounded flex justify-between shadow">
            <div class="flex flex-col justify-center items-center space-y-0.5">
                <span class="text-orange-400 text-sm font-medium">Nuevos Lanzamientos</span>
                <h3 class="font-semibold text-xl text-gray-800">Colección de Ficción 2025</h3>
                <a href="" class="text-sm font-medium border-b border-gray-800 text-gray-800 hover:text-orange-400 hover:border-orange-400 transition-colors duration-300">Descubrir Ahora</a>
            </div>
            <img 
                src="https://m.media-amazon.com/images/I/51E2055ZGUL._SL1000_.jpg" 
                alt="imagen libro" 
                class="h-30"
            >
        </div>
        
        <div class="mt-5 p-4 px-8 lg:px-4 bg-gray-100 rounded flex justify-between shadow">
            <div class="flex flex-col justify-center items-center space-y-0.5">
                <span class="text-orange-400 text-sm font-medium">Nuevos Lanzamientos</span>
                <h3 class="font-semibold text-xl text-gray-800">Colección de Ficción 2025</h3>
                <a href="" class="text-sm font-medium border-b border-gray-800 text-gray-800 hover:text-orange-400 hover:border-orange-400 transition-colors duration-300">Descubrir Ahora</a>
            </div>
            <img 
                src="https://m.media-amazon.com/images/I/51E2055ZGUL._SL1000_.jpg" 
                alt="imagen libro" 
                class="h-30"
            >
        </div>
    </section>

    <section class="my-10">
        <h2 class="text-center text-2xl font-bold mb-10 uppercase">Libro en tendencia</h2>

        <div class="container mx-auto flex flex-wrap justify-center gap-4">
            <div class="w-40 md:w-48 bg-white rounded-lg shadow">
                <div class="relative">
                    <img 
                        src="https://m.media-amazon.com/images/I/51E2055ZGUL._SL1000_.jpg" 
                        alt="Spy x Family"
                        class="w-full rounded-t-lg"
                    >
                    <button 
                        class="absolute bottom-2 left-1/2 -translate-x-1/2 bg-orange-400 text-sm font-bold py-1.5 px-3 rounded hidden group-hover:block transition">
                        Añadir al Carrito
                    </button>
                </div>
    
                <div class="p-2 text-center">
                    <p class="text-sm text-gray-700 truncate">
                        YuMe Spy x Family Squish Hero (m…)
                    </p>
                    <span class="text-orange-600 font-bold">S/ 23.92</span>
                </div>
            </div>
        </div> 
    </section>
@endsection