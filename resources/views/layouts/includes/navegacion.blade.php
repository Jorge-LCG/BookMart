@php
    $links = [
        [
            'nombre' => 'Inicio',
            'ruta' => route('bookmart'),
            'activo' => request()->routeIs('bookmart')
        ],
        [
            'nombre' => 'Nuestros Libros',
            'ruta' => '',
            'activo' => request()->routeIs('')
        ],
        [
            'nombre' => 'Sobre Nosotros',
            'ruta' => '',
            'activo' => request()->routeIs('')
        ],
        [
            'nombre' => 'Contáctanos',
            'ruta' => '',
            'activo' => request()->routeIs('')
        ],
    ];
@endphp

<div class="container mx-auto mt-4 flex justify-between items-center mb-4 px-4">
    <a href="{{ route('bookmart') }}" class="font-extrabold text-3xl">
        Book-<span class="text-orange-400">Mart</span>
    </a>

    <nav class="hidden md:flex gap-6 font-medium text-gray-700">
        @foreach ($links as $link)
            <a href="{{ $link['ruta'] }}" class="hover:text-orange-500 transition-colors duration-300 {{ $link['activo'] ? "text-orange-500 font-semibold" : "" }}">{{ $link['nombre'] }}</a>  
        @endforeach
    </nav>

    <div class="flex items-center gap-2">
        <button class="bg-orange-400 hover:bg-orange-500 py-2 px-3 rounded cursor-pointer transition-colors duration-300 shadow">
            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                <path d="M6 19m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />
                <path d="M17 19m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />
                <path d="M17 17h-11v-14h-2" />
                <path d="M6 5l14 1l-1 7h-13" />
            </svg>
        </button>

        <button id="menu-btn" class="md:hidden py-2 px-3 text-gray-700 cursor-pointer bg-gray-100 rounded hover:bg-gray-200 transition-colors duration-300 shadow">
            <svg id="icon-open" xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-menu-2">
                <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                <path d="M4 6l16 0" />
                <path d="M4 12l16 0" />
                <path d="M4 18l16 0" />
            </svg>

            <svg id="icon-close" xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-x hidden">
                <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                <path d="M18 6l-12 12" />
                <path d="M6 6l12 12" />
            </svg>
        </button>
    </div>
</div>

<div id="mobile-menu" class="hidden md:hidden mb-3">
    <nav class="flex flex-col gap-3 bg-gray-50 p-4 mt-2 shadow">
        @foreach ($links as $link)
            <a href="{{ $link['ruta'] }}" class="hover:text-orange-500 transition-colors duration-300 {{ $link['activo'] ? "text-orange-500 font-semibold" : "" }}">{{ $link['nombre'] }}</a>  
        @endforeach
    </nav>
</div>

@section('scripts')
    <script>
        const menuBtn = document.getElementById('menu-btn');
        const mobileMenu = document.getElementById('mobile-menu');
        const iconOpen = document.getElementById('icon-open');
        const iconClose = document.getElementById('icon-close');

        menuBtn.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
            iconOpen.classList.toggle('hidden');
            iconClose.classList.toggle('hidden');
        });
    </script>
@endsection