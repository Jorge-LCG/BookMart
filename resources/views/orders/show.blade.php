@extends('layouts.app')

@section('titulo', 'Detalle del Pedido #' . $order->id)

@section('contenido')
    <section class="my-10 container mx-auto px-3">
        <h2 class="text-2xl font-bold mb-6">Detalle del Pedido #{{ $order->id }}</h2>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
            <!-- Detalles del pedido -->
            <div class="bg-white rounded-lg shadow p-6">
                <h3 class="text-xl font-semibold mb-4">Información del Pedido</h3>

                <div class="space-y-3">
                    <div class="flex justify-between">
                        <span class="text-gray-600">Fecha:</span>
                        <span>{{ $order->created_at->format('d/m/Y H:i') }}</span>
                    </div>
                    <div class="flex justify-between">
                        <span class="text-gray-600">Estado:</span>
                        <span
                            class="px-2 py-1 rounded text-xs 
                            @if ($order->status == 'paid') bg-green-100 text-green-800
                            @elseif($order->status == 'pending') bg-yellow-100 text-yellow-800
                            @else bg-red-100 text-red-800 @endif">
                            @if ($order->status == 'paid')
                                Pagado
                            @elseif($order->status == 'pending')
                                Pendiente
                            @else
                                Cancelado
                            @endif
                        </span>
                    </div>
                    <div class="flex justify-between">
                        <span class="text-gray-600">Método de pago:</span>
                        <span class="capitalize">{{ $order->payment->payment_method ?? 'N/A' }}</span>
                    </div>
                    <div class="flex justify-between">
                        <span class="text-gray-600">Estado de pago:</span>
                        <span
                            class="px-2 py-1 rounded text-xs 
                            @if ($order->payment->status == 'confirmed') bg-green-100 text-green-800
                            @elseif($order->payment->status == 'pending') bg-yellow-100 text-yellow-800
                            @else bg-red-100 text-red-800 @endif">
                            @if ($order->payment->status == 'confirmed')
                                Confirmado
                            @elseif($order->payment->status == 'pending')
                                Pendiente
                            @elseif($order->payment->status == 'rejected')
                                Rechazado
                            @else
                                N/A
                            @endif
                        </span>
                    </div>
                </div>
            </div>

            <!-- Productos del pedido -->
            <div class="bg-white rounded-lg shadow p-6">
                <h3 class="text-xl font-semibold mb-4">Productos</h3>

                @foreach ($order->orderDetails as $detail)
                    <div class="flex justify-between items-center border-b py-3">
                        <div class="flex items-center">
                            <img src="{{ $detail->book->image }}" alt="{{ $detail->book->title }}"
                                class="w-12 h-16 object-cover rounded">
                            <div class="ml-3">
                                <h4 class="font-medium">{{ $detail->book->title }}</h4>
                                <p class="text-sm text-gray-600">Cantidad: {{ $detail->quantity }}</p>
                            </div>
                        </div>
                        <span class="text-orange-600 font-bold">S/ {{ number_format($detail->subtotal, 2) }}</span>
                    </div>
                @endforeach

                <div class="flex justify-between items-center mt-4 pt-4 border-t">
                    <span class="text-lg font-semibold">Total:</span>
                    <span class="text-orange-600 font-bold text-xl">S/ {{ number_format($order->total, 2) }}</span>
                </div>
            </div>
        </div>

        @if ($order->payment && $order->payment->voucher_image)
            <div class="mt-8 bg-white rounded-lg shadow p-6">
                <h3 class="text-xl font-semibold mb-4">Comprobante de Pago</h3>
                <img src="{{ asset('storage/' . $order->payment->voucher_image) }}" alt="Comprobante de pago"
                    class="max-w-xs rounded-lg">
            </div>
        @endif
    </section>
@endsection
