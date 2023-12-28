<div class="flex justify-around overflow-x-hidden w-full">
    <div class="hidden lg:block lg:w-1/3"></div>
    <div class="lg:w-2/3">
        
    </div>
</div>
<div class="relative z-50 navbar w-full lg:h-auto h-24 flex justify-around items-center p-4 lg:p-8 text-lime-c900 text-2xl font-thin">
    <img class="h-auto w-1/2 md:w-1/4" src="{{ url('/images/Logo AgroAmigable_-12 1.png') }}" alt="Image" />
    <a class="hidden lg:block" href="{{ route('dashboard') }}"> Nosotros</a>
    <a class="hidden lg:block" href="{{ route('dashboard') }}"> Servicios</a>
    <a class="hidden lg:block" href="{{ route('dashboard') }}"> Blog</a>
    <a class="hidden lg:block" href="http://www.agroamigable.co:2096/"> Email</a>
    <div class="hidden lg:block">
        <x-agroamigable.buttons.orange-button href="route('dashboard')" label="Reservar cita ahora"></x-agroamigable.buttons.orange-button>
    </div>
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>

    <div x-data="{ dropdownOpen: false }" class="lg:hidden relative my-32">
        <button @click="dropdownOpen = !dropdownOpen" class="relative z-10 block rounded-md p-2 focus:outline-none">
            <svg class="h-6 w-6" viewBox="0 0 100 80" width="40" height="40">
                <rect width="100" fill="#233F0A" height="20" rx="10"></rect>
                <rect y="30" fill="#233F0A" width="100" height="20" rx="10"></rect>
                <rect y="60" fill="#233F0A" width="100" height="20" rx="10"></rect>
            </svg>
        </button>

        <div x-show="dropdownOpen" @click="dropdownOpen = false" class="fixed inset-0 h-full w-full z-10">
        </div>

        <div x-show="dropdownOpen" class="absolute right-0 mt-2 py-2 w-48 bg-white rounded-md shadow-xl z-20">
            <a href="#" class="block px-4 py-2 text-sm capitalize text-gray-700 hover:bg-blue-500 hover:text-white">
                Nosotros
            </a>
            <a href="#" class="block px-4 py-2 text-sm capitalize text-gray-700 hover:bg-blue-500 hover:text-white">
                Servicios
            </a>
            <a href="#" class="block px-4 py-2 text-sm capitalize text-gray-700 hover:bg-blue-500 hover:text-white">
                Blog
            </a>
            <a href="#" class="block px-4 py-2 text-sm capitalize text-gray-700 hover:bg-blue-500 hover:text-white">
                Log In
            </a>
        </div>
    </div>

</div>