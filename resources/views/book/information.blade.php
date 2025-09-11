@extends('layouts.app')

@section('titulo', 'Página Principal')

@section('contenido')
    <section class="my-10 container mx-auto px-3">
        <div class="w-full mt-5">
            <div class="max-w-4xl rounded-lg flex gap-8 px-6">
                <div class="relative">
                    <img src="{{ $book->image }}" 
                        alt="{{ $book->title }}" 
                        class="w-56 h-auto rounded-lg shadow-md"
                    />
                    @if ($book->is_new)
                        <span class="absolute top-2 left-2 bg-yellow-500 text-white px-3 py-1 rounded-full text-sm font-semibold">
                            Nuevo
                        </span>
                    @endif
                </div>

                <div class="flex flex-col justify-between">
                    <div>
                        <h2 class="text-2xl font-bold">{{ $book->title }}</h2>
                        <p class="text-gray-600">{{ $book->author }}</p>
                        <p class="text-2xl text-gray-950 font-semibold mt-4">S/ {{ number_format($book->price, 2) }}</p>
                    </div>

                    <div class="mt-6">
                        <div class="flex items-center gap-2">
                            <form action="{{ route('cart.add', $book) }}" method="POST">
                                @csrf
                                <button
                                    type="submit" 
                                    class="cursor-pointer bg-orange-400 hover:bg-orange-500 text-white px-5 py-2 rounded-md font-semibold transition-colors duration-300"
                                >
                                    AÑADIR AL CARRITO
                                </button>
                                <input 
                                    type="number" 
                                    name="quantity"
                                    value="1" 
                                    min="1" 
                                    max="5"
                                    class="w-16 border rounded-md p-2 text-center"
                                />
                            </form>
                        </div>

                        <div class="mt-4 flex flex-col gap-2 text-blue-900 text-sm font-medium">
                            {{-- <a href="#" class="hover:underline">Añadir comentario</a> --}}
                            <a href="#" class="hover:underline">Compartir</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="max-w-4xl px-6 mt-10">
                <div class="flex gap-4 border-b border-gray-400 pb-2">
                    <a href="" class="text-blue-900 font-semibold hover:text-blue-700 transition-colors duration-300 text-xl">Más Informacion</a>
                    {{-- <a href="" class="text-gray-900 font-semibold hover:text-gray-700 transition-colors duration-300 text-xl">Comentarios</a> --}}
                </div>

                <div class="mt-5">
                    <h5 class="mt-2 text-blue-900 font-semibold">Sinopsis:</h5>
                    <p class="text-sm">{{ $book->description }}</p>
                    <h5 class="mt-4 text-blue-900 font-semibold">Detalles de producto</h5>
                    <ul class="mt-1 space-y-1">
                        <li class="flex text-sm">
                            <span class="w-40">Peso:</span>
                            <strong class="text-blue-900">0.5kg</strong>
                        </li>
                        <li class="flex text-sm">
                            <span class="w-40">Nombre del autor:</span>
                            <strong class="text-blue-900">{{ $book->author }}</strong>
                        </li>
                        <li class="flex text-sm">
                            <span class="w-40">Editorial:</span>
                            <strong class="text-blue-900">{{ $book->editorial }}</strong>
                        </li>
                        <li class="flex text-sm">
                            <span class="w-40">Alto:</span>
                            <strong class="text-blue-900">24.00 cm</strong>
                        </li>
                        <li class="flex text-sm">
                            <span class="w-40">Ancho:</span>
                            <strong class="text-blue-900">17.00 cm</strong>
                        </li>
                        <li class="flex text-sm">
                            <span class="w-40">Saga:</span>
                            <strong class="text-blue-900">Educación</strong>
                        </li>
                        <li class="flex text-sm">
                            <span class="w-40">Formato:</span>
                            <strong class="text-blue-900">{{ $book->format }}</strong>
                        </li>
                        <li class="flex text-sm">
                            <span class="w-40">Número de Páginas:</span>
                            <strong class="text-blue-900">{{ $book->pages }}</strong>
                        </li>
                        <li class="flex text-sm">
                            <span class="w-40">ISBN:</span>
                            <strong class="text-blue-900">{{ $book->isbn }}</strong>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
@endsection
