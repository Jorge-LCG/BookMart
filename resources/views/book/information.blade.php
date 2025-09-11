@extends('layouts.app')

@section('titulo', 'Página Principal')

@section('contenido')
    <section class="my-10 container mx-auto px-3">
        <div class="w-full mt-5">
            <div class="max-w-4xl rounded-lg flex gap-8 px-6">
                <div class="relative">
                    <img src="https://isbn.bnp.gob.pe/files/titulos/160765.jpg" 
                        alt="Amanecer en la Cosecha" 
                        class="w-56 h-auto rounded-lg shadow-md"
                    />
                    <span class="absolute top-2 left-2 bg-yellow-500 text-white px-3 py-1 rounded-full text-sm font-semibold">
                        Nuevo
                    </span>
                </div>

                <div class="flex flex-col justify-between">
                    <div>
                        <h2 class="text-2xl font-bold">Manual del DOCENTE INNOVADOR aplicando IA Generativa</h2>
                        <p class="text-gray-600">Ing. Alex Taya</p>
                        <p class="text-2xl text-gray-950 font-semibold mt-4">S/ 10.00</p>
                    </div>

                    <div class="mt-6">
                        <div class="flex items-center gap-2">
                            <button class="cursor-pointer bg-orange-400 hover:bg-orange-500 text-white px-5 py-2 rounded-md font-semibold transition-colors duration-300">
                                AÑADIR AL CARRITO
                            </button>
                            <input type="number" value="1" min="1" 
                                class="w-16 border rounded-md p-2 text-center">
                        </div>

                        <div class="mt-4 flex flex-col gap-2 text-blue-900 text-sm font-medium">
                            <a href="#" class="hover:underline">Añadir comentario</a>
                            <a href="#" class="hover:underline">Compartir</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="max-w-4xl px-6 mt-10">
                <div class="flex gap-4 border-b border-gray-400 pb-2">
                    <a href="" class="text-blue-900 font-semibold hover:text-blue-700 transition-colors duration-300 text-xl">Más Informacion</a>
                    <a href="" class="text-gray-900 font-semibold hover:text-gray-700 transition-colors duration-300 text-xl">Comentarios</a>
                </div>

                <div class="mt-5">
                    <h5 class="mt-2 text-blue-900 font-semibold">Sinopsis:</h5>
                    <p class="text-sm">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quae est quasi hic. Sunt modi, porro maiores magnam quo beatae facere, quaerat doloribus eligendi hic maxime! Beatae, dignissimos. Id, nesciunt sapiente.</p>
                    <h5 class="mt-4 text-blue-900 font-semibold">Detalles de producto</h5>
                    <ul class="mt-1 space-y-1">
                        <li class="flex text-sm">
                            <span class="w-40">Peso:</span>
                            <strong class="text-blue-900">0.00000</strong>
                        </li>
                        <li class="flex text-sm">
                            <span class="w-40">Nombre del autor:</span>
                            <strong class="text-blue-900">Ing. Alex Taya</strong>
                        </li>
                        <li class="flex text-sm">
                            <span class="w-40">Editorial:</span>
                            <strong class="text-blue-900">XXXXX</strong>
                        </li>
                        <li class="flex text-sm">
                            <span class="w-40">Alto:</span>
                            <strong class="text-blue-900">00.00</strong>
                        </li>
                        <li class="flex text-sm">
                            <span class="w-40">Ancho:</span>
                            <strong class="text-blue-900">00.00</strong>
                        </li>
                        <li class="flex text-sm">
                            <span class="w-40">Saga:</span>
                            <strong class="text-blue-900">XXXXX</strong>
                        </li>
                        <li class="flex text-sm">
                            <span class="w-40">Formato:</span>
                            <strong class="text-blue-900">XXXX</strong>
                        </li>
                        <li class="flex text-sm">
                            <span class="w-40">Número de Páginas:</span>
                            <strong class="text-blue-900">00</strong>
                        </li>
                        <li class="flex text-sm">
                            <span class="w-40">ISBN:</span>
                            <strong class="text-blue-900">XXXXXXXXXXX</strong>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
@endsection
