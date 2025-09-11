@extends('layouts.app')

@section('titulo', 'Mis Pedidos')

@section('contenido')
    <section class="my-10 container mx-auto px-3">
        <h2 class="text-2xl font-bold mb-6">Mis Pedidos</h2>

        @if ($orders->count() > 0)
            <div class="bg-white rounded-lg shadow overflow-hidden">
                <div class="hidden md:grid grid-cols-4 gap-4 p-4 bg-gray-100 font-semibold">
                    <div>N° Pedido</div>
                    <div>Fecha</div>
                    <div>Estado</div>
                    <div>Total</div>
                </div>

                @foreach ($orders as $order)
                    <a href="{{ route('orders.show', $order) }}" class="block hover:bg-gray-50">
                        <div class="grid grid-cols-1 md:grid-cols-4 gap-4 p-4 border-b">
                            <div>
                                <span class="md:hidden font-semibold mr-2">N° Pedido: </span>
                                #{{ $order->id }}
                            </div>
                            <div>
                                <span class="md:hidden font-semibold mr-2">Fecha: </span>
                                {{ $order->created_at->format('d/m/Y') }}
                            </div>
                            <div>
                                <span class="md:hidden font-semibold mr-2">Estado: </span>
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
                            <div>
                                <span class="md:hidden font-semibold mr-2">Total: </span>
                                <span class="text-orange-600 font-bold">S/ {{ number_format($order->total, 2) }}</span>
                            </div>
                        </div>
                    </a>
                @endforeach
            </div>
        @else
            <div class="text-center py-10">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-24 w-24 mx-auto text-gray-400" fill="none"
                    viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2" />
                </svg>
                <h3 class="text-2xl font-semibold mt-4">No tienes pedidos aún</h3>
                <p class="text-gray-600 mt-2">Realiza tu primera compra para ver tus pedidos aquí</p>
                <a href="{{ route('homebook') }}"
                    class="inline-block mt-4 bg-orange-500 hover:bg-orange-600 text-white px-6 py-2 rounded font-semibold">
                    Comprar Libros
                </a>
            </div>
        @endif
    </section>
@endsection
