@extends('layouts.app')

@section('titulo', 'Actualizar datos')

@section('contenido')
<div class="flex items-center justify-center my-15 px-3">
    <div class="grid grid-cols-1 md:grid-cols-2 gap-8 w-full max-w-5xl">
        
        <!-- Formulario actualizar datos -->
        <div class="w-full max-w-md mx-auto">
            <h1 class="text-center text-2xl font-bold mb-1">Actualiza tu información</h1>
            <p class="text-sm text-gray-600 text-center mb-6">
                Ingresa los datos que desees actualizar para mantener tu perfil al día.
            </p>

            <form class="w-full" action="" method="POST">
                @csrf
                @method('PUT')

                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div>
                        <label for="name" class="block mb-2 font-medium text-sm">
                            Nombres
                        </label>
                        <input 
                            id="name" 
                            name="name" 
                            type="text" 
                            placeholder="Pedro Cesar"
                            value="{{ auth()->user()->name }}"
                            class="w-full text-sm border rounded-lg px-3 py-2 focus:outline-none focus:ring-2 focus:ring-orange-500 @error('name') border-red-500 @enderror"
                        />
                        @error('name')
                            <p class="text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label for="last_name" class="block mb-2 font-medium text-sm">
                            Apellidos
                        </label>
                        <input 
                            id="last_name" 
                            name="last_name" 
                            type="text" 
                            placeholder="San Julio"
                            value="{{ auth()->user()->last_name }}"
                            class="w-full text-sm border rounded-lg px-3 py-2 focus:outline-none focus:ring-2 focus:ring-orange-500 @error('last_name') border-red-500 @enderror"
                        />
                        @error('last_name')
                            <p class="text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-4">
                    <div>
                        <label for="dni" class="block mb-2 font-medium text-sm">
                            DNI
                        </label>
                        <input 
                            id="dni" 
                            name="dni" 
                            type="text" 
                            placeholder="60606060"
                            value="{{ auth()->user()->dni }}"
                            class="w-full text-sm border rounded-lg px-3 py-2 focus:outline-none focus:ring-2 focus:ring-orange-500 @error('dni') border-red-500 @enderror"
                        />
                        @error('dni')
                            <p class="text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label for="phone" class="block mb-2 font-medium text-sm">
                            Teléfono
                        </label>
                        <input 
                            id="phone" 
                            name="phone" 
                            type="tel" 
                            placeholder="987654321"
                            value="{{ auth()->user()->phone }}"
                            class="w-full text-sm border rounded-lg px-3 py-2 focus:outline-none focus:ring-2 focus:ring-orange-500 @error('phone') border-red-500 @enderror"
                        />
                        @error('phone')
                            <p class="text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                <div class="mt-4">
                    <label for="email" class="block mb-2 font-medium text-sm">
                        Correo electrónico
                    </label>
                    <input 
                        id="email" 
                        name="email" 
                        type="email" 
                        placeholder="correo@correo.com"
                        value="{{ auth()->user()->email }}"
                        class="w-full text-sm border rounded-lg px-3 py-2 focus:outline-none focus:ring-2 focus:ring-orange-500 @error('email') border-red-500 @enderror"
                    />
                    @error('email')
                        <p class="text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <button 
                    type="submit" 
                    class="mt-6 text-sm font-medium shadow w-full bg-orange-500 text-white py-2.5 rounded-lg hover:bg-orange-600 transition-colors duration-300"
                >
                    Guardar cambios
                </button>
            </form>
        </div>

        <!-- Formulario cambiar contraseña -->
        <div class="w-full max-w-md mx-auto">
            <h1 class="text-center text-2xl font-bold mb-1 mt-6 md:mt-10">¿Olvidaste tu contraseña?</h1>
            <p class="text-sm text-gray-600 text-center mb-6">Ingresa tu nueva credencial para actualizarla.</p>

            <form class="w-full" action="" method="POST">
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label for="password" class="block mb-2 font-medium text-sm">
                        Nueva Contraseña
                    </label>
                    <input 
                        id="password" 
                        name="password" 
                        type="password" 
                        placeholder="******"
                        class="w-full text-sm border rounded-lg px-3 py-2 focus:outline-none focus:ring-2 focus:ring-orange-500 @error('password') border-red-500 @enderror"
                    />
                    @error('password')
                        <p class="text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="password_confirmation" class="block mb-2 font-medium text-sm">
                        Confirmar Contraseña
                    </label>
                    <input 
                        id="password_confirmation" 
                        name="password_confirmation" 
                        type="password" 
                        placeholder="******"
                        class="w-full text-sm border rounded-lg px-3 py-2 focus:outline-none focus:ring-2 focus:ring-orange-500"
                    />
                </div>

                <button 
                    type="submit" 
                    class="text-sm font-medium shadow mt-3 w-full bg-orange-500 text-white py-2.5 rounded-lg hover:bg-orange-600 transition-colors duration-300"
                >
                    Actualizar contraseña
                </button>
            </form>
        </div>
    </div>
</div>
@endsection
