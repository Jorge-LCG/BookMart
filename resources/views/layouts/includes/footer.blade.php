<div class="mx-auto w-full max-w-screen-xl p-4 py-6 lg:py-8">
    <div class="md:flex md:justify-between">
        <div class="mb-6 md:mb-0">
            <a href="">
                <h1 class="font-extrabold text-3xl text-white">Book<span class="text-orange-400">-</span>Mart</h1>
            </a>
            <p class="text-white max-w-md md:max-w-lg text-sm mt-5 leading-relaxed">En BookMart llevamos la pasión por la lectura al mundo digital, ofreciéndote e-books accesibles, modernos y listos para acompañarte en cualquier dispositivo, dondequiera que estés</p>
        </div>
        <div class="grid grid-cols-2 gap-8 sm:gap-6 sm:grid-cols-3">
            <div>
                <h2 class="mb-6 text-sm font-semibold text-white uppercase">Enlaces rápidos</h2>
                <ul class="text-gray-500 font-medium">
                    <li class="mb-4">
                        <a href="{{ route('bookmart') }}" class="hover:underline hover:text-orange-400 transition-colors duration-100 text-white text-sm">Inicio</a>
                    </li>
                    <li class="mb-4">
                        <a href="{{ route('homebook') }}" class="hover:underline hover:text-orange-400 transition-colors duration-100 text-white text-sm">Nuestro Libros</a>
                    </li>
                    <li class="mb-4">
                        <a href="{{ route('homeabout') }}" class="hover:underline hover:text-orange-400 transition-colors duration-100 text-white text-sm">Sobre Nosotros</a>
                    </li>
                    <li class="mb-4">
                        <a href="{{ route('homecontact') }}" class="hover:underline hover:text-orange-400 transition-colors duration-100 text-white text-sm">Contáctanos</a>
                    </li>
                </ul>
            </div>
            <div>
                <h2 class="mb-6 text-sm font-semibold text-white uppercase">Enlaces populares</h2>
                <ul class="text-gray-500 font-medium">
                    <li class="mb-4">
                        <a href="{{ route('homebook') }}" class="hover:underline hover:text-orange-400 transition-colors duration-100 text-white text-sm">Nuestro Libros</a>
                    </li>
                    <li class="mb-4">
                        <a href="{{ route('homecontact') }}" class="hover:underline hover:text-orange-400 transition-colors duration-100 text-white text-sm">Contáctanos</a>
                    </li>
                </ul>
            </div>
            <div>
                <h2 class="mb-6 text-sm font-semibold text-white uppercase">Ponerse en contacto</h2>
                <ul class="text-white">
                    <li class="mb-4">
                        <a href="#" class="hover:underline hover:text-orange-400 transition-colors duration-100 text-white text-sm">support@bookmart.com</a>
                    </li>
                    <li>
                        <a href="{{ route('claims.index') }}" class="hover:underline hover:text-orange-400 transition-colors duration-100 text-white text-sm">Libro de reclamaciones</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <hr class="my-6 border-gray-200 sm:mx-auto lg:my-8" />
    <div class="sm:flex sm:items-center sm:justify-center">
        <span class="text-sm text-white sm:text-center">
            © {{ now()->year }} 
            <a href="{{ route('bookmart') }}" class="hover:underline text-orange-400">Book-Mart™</a>. 
            Desarrollado por 
            <a href="https://www.mattinnovasolution.com/" class="text-orange-400 hover:underline" target="_blank">Matt Innova Solution E.I.R.L.</a>
        </span>
    </div>
</div>