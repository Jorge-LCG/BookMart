@extends('layouts.app')

@section('titulo', 'Mis Libros')

@section('contenido')
    <section class="my-10">
        <h2 class="text-center text-2xl font-bold mb-10 uppercase">Accede a tus libros</h2>
        
        <div class="container mx-auto flex flex-wrap justify-center gap-4">
            <div class="w-40 md:w-48 bg-white rounded-lg shadow group relative">
                <div class="relative">
                    <img 
                        src="https://isbn.bnp.gob.pe/files/titulos/160765.jpg" 
                        alt="Spy x Family"
                        class="w-full rounded-t-lg"
                    >
                </div>
            </div>
        </div>
    </section>
@endsection