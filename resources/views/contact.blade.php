@extends('layouts.app')

@section('titulo', 'Iniciar Sesión')

@section('contenido')
    <div class="flex items-center justify-center my-15 px-3">
        <div class="w-full max-w-md">
            <h1 class="text-center text-2xl font-bold mb-1">Contáctanos</h1>
            <p class="text-sm text-gray-600 text-center mb-6">Escríbenos un mensaje.</p>

            <form class="w-full" action="" method="POST">
                @csrf
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div>
                        <label for="name" class="block mb-2 font-medium text-sm">
                            Nombres
                        </label>
                        <input 
                            id="name"
                            name="name"
                            type="text"
                            placeholder="correo@correo.com"
                            class="w-full text-sm border rounded-lg px-3 py-2 focus:outline-none focus:ring-2 focus:ring-orange-500 @error('name') border-red-500 @enderror"
                            value="{{ old('name') }}"
                        />
                        @error('name')
                            <p class="text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>
    
                    <div class="mb-3">
                        <label for="email" class="block mb-2 font-medium text-sm">
                            Correo electrónico
                        </label>
                        <input 
                            id="email" 
                            name="email"
                            type="email"
                            placeholder="San Julio"
                            value="{{ old('email') }}"
                            class="w-full text-sm border rounded-lg px-3 py-2 focus:outline-none focus:ring-2 focus:ring-orange-500 @error('email') border-red-500 @enderror"
                        />
                        @error('email')
                            <p class="text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                <div class="mb-3">
                    <label for="asunto" class="block mb-2 font-medium text-sm">
                        Asunto
                    </label>
                    <input 
                        id="asunto"
                        name="asunto"
                        type="text"
                        placeholder="correo@correo.com"
                        class="w-full text-sm border rounded-lg px-3 py-2 focus:outline-none focus:ring-2 focus:ring-orange-500 @error('asunto') border-red-500 @enderror"
                        value="{{ old('asunto') }}"
                    />
                    @error('asunto')
                        <p class="text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>     
                
                <div>
                    <label for="mensaje" class="block mb-2 font-medium text-sm">
                        Mensaje
                    </label>
                    <textarea 
                        id="mensaje"
                        name="mensaje"
                        class="w-full text-sm border rounded-lg px-3 py-2 focus:outline-none focus:ring-2 focus:ring-orange-500 @error('asunto') border-red-500 @enderror"
                    >{{ old('mensaje') }}</textarea>
                    @error('mensaje')
                        <p class="text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>  
                
                <button 
                    type="submit" 
                    class="text-sm font-medium shadow mt-3 w-full bg-orange-500 text-white py-2.5 rounded-lg hover:bg-orange-600 transition-colors duration-300 cursor-pointer"
                >
                    Enviar mensaje
                </button>
            </form>
        </div>
    </div>
@endsection