@extends('layouts.app')

@section('titulo', 'aaa')

@section('contenido')
    <section class="my-10 container mx-auto px-3">
        <div class="max-w-4xl mx-auto bg-white rounded-lg shadow-md p-6">
            <!-- Header -->
            <div class="flex justify-between items-center mb-6">
                <h1 class="text-2xl font-bold">{{ $book->title }}</h1>
                <a href="{{ route('book.index') }}" class="text-orange-500 hover:text-orange-600">
                    ← Volver a mis libros
                </a>
            </div>

            <!-- Contenido del libro -->
            <div class="prose max-w-none">
                <div class="text-center mb-8">
                    <img src="{{ $book->image }}" alt="{{ $book->title }}"
                        class="w-48 h-64 object-cover mx-auto rounded-lg">
                    <p class="text-gray-600 mt-2">Por: {{ $book->author }}</p>
                </div>

                <!-- Aquí iría el contenido real del libro -->
                <div class="border-t pt-6">
                    <h2 class="text-xl font-semibold mb-4">Contenido del libro</h2>
                    <p class="text-gray-700 leading-relaxed">
                        {{ $book->description }}
                    </p>

                    <!-- Ejemplo de capítulos -->
                    <div class="mt-6">
                        <h3 class="text-lg font-semibold mb-3">Capítulos</h3>
                        <div class="space-y-2">
                            <div class="p-3 border rounded hover:bg-gray-50 cursor-pointer">
                                <span class="font-medium">Capítulo 1:</span> Introducción
                            </div>
                            <div class="p-3 border rounded hover:bg-gray-50 cursor-pointer">
                                <span class="font-medium">Capítulo 2:</span> Desarrollo
                            </div>
                            <div class="p-3 border rounded hover:bg-gray-50 cursor-pointer">
                                <span class="font-medium">Capítulo 3:</span> Conclusión
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Información adicional -->
            <div class="mt-8 border-t pt-6">
                <h3 class="text-lg font-semibold mb-3">Detalles del libro</h3>
                <div class="grid grid-cols-2 gap-4 text-sm">
                    <div><span class="font-medium">Editorial:</span> {{ $book->editorial }}</div>
                    <div><span class="font-medium">Páginas:</span> {{ $book->pages }}</div>
                    <div><span class="font-medium">Formato:</span> {{ $book->format }}</div>
                    <div><span class="font-medium">ISBN:</span> {{ $book->isbn }}</div>
                </div>
            </div>
        </div>
    </section>
@endsection
