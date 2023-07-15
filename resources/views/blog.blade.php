<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <div class="relative z-50 navbar w-full lg:h-auto h-24 flex justify-around items-center p-4 lg:p-8 text-lime-c900">
        <img class="h-auto w-1/2 md:w-1/4" src="{{ url('/images/Logo AgroAmigable_-12 1.png') }}" alt="Image" />
        <a class="hidden lg:block" href="{{ route('dashboard') }}"> Nosotros</a>
        <a class="hidden lg:block" href="{{ route('dashboard') }}"> Servicios</a>
        <a class="hidden lg:block" href="{{ route('dashboard') }}"> Blog</a>
        <a class="hidden lg:block rounded-full bg-orange-c500 border-2 border-orange-c500 hover:bg-transparent hover:text-orange-c500 text-white text-xl p-4"
            href="{{ route('dashboard') }}">
            Reservar
            cita ahora</a>
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
                <a href="#"
                    class="block px-4 py-2 text-sm capitalize text-gray-700 hover:bg-blue-500 hover:text-white">
                    Nosotros
                </a>
                <a href="#"
                    class="block px-4 py-2 text-sm capitalize text-gray-700 hover:bg-blue-500 hover:text-white">
                    Servicios
                </a>
                <a href="#"
                    class="block px-4 py-2 text-sm capitalize text-gray-700 hover:bg-blue-500 hover:text-white">
                    Blog
                </a>
            </div>
        </div>
    </div>
    <div class="main-title text-black text-5xl text-left p-6 lg:px-24">{{ $publicationSelected[0]->name }}
    </div>
    <center1>
        <div class="box-border h-32 w-32 p-4 border-4 bg-lime-c900">
        </div>

    </center1>
    <div class=" text-slate-400 text-base text-left px-6 lg:px-24 border-t border-b">
        {{ $publicationSelected[0]->created_at }}
    </div>
    <div class=" text-slate-400 text-sm text-left px-6 lg:px-24 border-t border-b">{{ $publicationSelected[0]->author }}
    </div>
    <div class="main-title text-black text-5xl text-left p-6 lg:px-24">{{ $publicationSelected[0]->name }}
    </div>
    <div class="paragraph text-justify lg:text-center text-black p-6 lg:px-24">
        {!! $publicationSelected[0]->body !!}
    </div>
    <div class="main-title text-slate-400 text-5xl text-left p-6 lg:px-24">Otros artículos
    </div>
    <div
        class="p-6 lg:px-24 blog-articles lg:p-10 grid grid-cols-1 sm:grid-cols-1 md:grid-cols-3 lg:grid-cols-3 xl:grid-cols-3 gap-5"">
        @foreach ($publications as $publication)
            <x-publications-showcase :name="$publication->name" :image="$publication->image" :abstract="$publication->abstract" :id="$publication->id" />
        @endforeach
    </div>
</body>
