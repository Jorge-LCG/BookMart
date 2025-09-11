@extends('layouts.app')

@section('titulo', 'Finalizar Compra')

@section('contenido')
    <section class="my-10 container mx-auto px-3">
        <h2 class="text-2xl font-bold mb-6">Finalizar Compra</h2>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
            <!-- Resumen del pedido -->
            <div class="bg-white rounded-lg shadow p-6">
                <h3 class="text-xl font-semibold mb-4">Resumen de tu pedido</h3>

                @foreach ($cart as $item)
                    <div class="flex justify-between items-center border-b py-3">
                        <div class="flex items-center">
                            <img src="{{ $item['image'] }}" alt="{{ $item['title'] }}" class="w-12 h-16 object-cover rounded">
                            <div class="ml-3">
                                <h4 class="font-medium">{{ $item['title'] }}</h4>
                                <p class="text-sm text-gray-600">Cantidad: {{ $item['quantity'] }}</p>
                            </div>
                        </div>
                        <span class="text-orange-600 font-bold">S/
                            {{ number_format($item['price'] * $item['quantity'], 2) }}</span>
                    </div>
                @endforeach

                <div class="flex justify-between items-center mt-4 pt-4 border-t">
                    <span class="text-lg font-semibold">Total:</span>
                    <span class="text-orange-600 font-bold text-xl">S/ {{ number_format($total, 2) }}</span>
                </div>
            </div>

            <!-- Formulario de pago -->
            <div class="bg-white rounded-lg shadow p-6">
                <h3 class="text-xl font-semibold mb-4">Método de Pago</h3>

                <form action="{{ route('cart.process') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="mb-4">
                        <label class="block text-gray-700 mb-2">Selecciona método de pago:</label>
                        <div class="space-y-2">
                            <label class="flex items-center">
                                <input type="radio" name="payment_method" value="yape" class="mr-2" required>
                                <span>Yape</span>
                            </label>
                            <label class="flex items-center">
                                <input type="radio" name="payment_method" value="plin" class="mr-2">
                                <span>Plin</span>
                            </label>
                            <label class="flex items-center">
                                <input type="radio" name="payment_method" value="bank_transfer" class="mr-2">
                                <span>Transferencia Bancaria</span>
                            </label>
                        </div>
                        @error('payment_method')
                            <p class="text-sm text-red-600 mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <label class="block text-gray-700 mb-2">Subir comprobante de pago:</label>
                        <input type="file" name="voucher" accept="image/*" class="w-full border rounded-md p-2" required>
                        <p class="text-sm text-gray-600 mt-1">Formatos aceptados: JPEG, PNG, JPG, GIF (Max: 2MB)</p>
                        @error('voucher')
                            <p class="text-sm text-red-600 mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <button type="submit"
                        class="w-full bg-orange-500 hover:bg-orange-600 text-white py-3 px-4 rounded font-semibold">
                        Confirmar Pedido
                    </button>
                </form>
            </div>
        </div>
    </section>
@endsection
