<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        .box {
            width: 80%;
            height: auto;
            border-radius: 25px;
        }
    </style>
</head>

<body>
    <div class="relative z-50 navbar w-full lg:h-auto h-24 flex justify-around items-center p-4 lg:p-8 text-lime-c900">
        <img class="h-auto w-1/2 md:w-1/4" src="{{ url('/images/Logo AgroAmigable_-12 1.png') }}" alt="Image" />
        <a class="hidden lg:block" href="{{ route('dashboard') }}"> Nosotros</a>
        <a class="hidden lg:block" href="{{ route('dashboard') }}"> Servicios</a>
        <a class="hidden lg:block" href="{{ route('dashboard') }}"> Blog</a>
        <a class="hidden lg:block rounded-full bg-orange-c500 border-2 border-orange-c500 hover:bg-transparent hover:text-orange-c500 text-white text-xl p-4" href="{{ route('dashboard') }}">
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
                <a href="#" class="block px-4 py-2 text-sm capitalize text-gray-700 hover:bg-blue-500 hover:text-white">
                    Nosotros
                </a>
                <a href="#" class="block px-4 py-2 text-sm capitalize text-gray-700 hover:bg-blue-500 hover:text-white">
                    Servicios
                </a>
                <a href="#" class="block px-4 py-2 text-sm capitalize text-gray-700 hover:bg-blue-500 hover:text-white">
                    Blog
                </a>
            </div>
        </div>
    </div>
    <div class="main-title text-black text-2xl lg:text-4xl text-left p-6 lg:px-24">{{ $publicationSelected[0]->name }}
    </div>
    <center class="py-6 lg:p-16">
        <div class="box shadow-lg overflow-hidden">
            <img class="object-cover h-full w-full" src="{{ url('/images/publications_images/' . $publicationSelected[0]->image) }}">
        </div>
    </center>
    <div class=" text-slate-400 text-base text-left p-6 sm:px-32 md:px-32 lg:px-32 xl:px-48 border-t border-b">
        {{ $publicationSelected[0]->created_at }}
    </div>
    <div class=" text-slate-400 text-sm text-left p-6 sm:px-32 md:px-32 lg:px-32 xl:px-48 border-t border-b">{{ $publicationSelected[0]->author }}
    </div>
    <div class="main-title text-black hidden lg:block text-3xl text-left p-6 sm:px-32 md:px-32 lg:px-32 xl:px-48">{{ $publicationSelected[0]->name }}
    </div>
    <div class="paragraph text-justify p-6 sm:px-32 md:px-32 lg:px-32 xl:px-48 text-black">
        {!! $publicationSelected[0]->body !!}
    </div>
    <x-agroamigable.boxes.invitation></x-agroamigable.boxes.invitation>
    <!-- FORM: COMMENT -->
    <button type="submit" class="rounded-full border-2 bg-orange-c500 border-orange-c500 hover:bg-transparent hover:text-orange-c500 text-white text-xl p-4">
                            Comentar
                        </button>
    <div x-show="modelOpen" class="fixed inset-0 z-50 overflow-y-auto" aria-labelledby="modal-title" role="dialog" aria-modal="true">
        <div class="flex items-end justify-center min-h-screen px-4 text-center md:items-center sm:block sm:p-0">
            <div x-cloak @click="modelOpen = false" x-show="modelOpen" x-transition:enter="transition ease-out duration-300 transform" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100" x-transition:leave="transition ease-in duration-200 transform" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0" class="fixed inset-0 transition-opacity bg-gray-500 bg-opacity-40" aria-hidden="true">
            </div>

            <div x-cloak x-show="modelOpen" x-transition:enter="transition ease-out duration-300 transform" x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95" x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100" x-transition:leave="transition ease-in duration-200 transform" x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100" x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95" class="inline-block w-full max-w-xl p-8 my-20 overflow-hidden text-left transition-all transform bg-white rounded-lg shadow-xl 2xl:max-w-2xl">
                <div class="flex items-center justify-between space-x-4">
                    <h1 class="main-title py-2 text-lime-c900 font-bold text-3xl text-center border-b border-orange-c500">
                        Descarga GRATIS nuestro libro.</h1>

                    <button @click="modelOpen = false" class="text-gray-600 focus:outline-none hover:text-gray-700">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </button>
                </div>

                <form action="{{ route('books.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <div>
                            <label for="name" class="block text-sm text-gray-700 capitalize dark:text-gray-200">Nombre
                                completo</label>
                            <input placeholder="Maria Dolores" name="name" value="{{ old('name') }}" class="block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-lime-c100 border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40">
                            @error('name')
                            <x-incomplete-form-error :message="$message"></x-incomplete-form-error>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="mt-4">
                            <label for="email" class="block text-sm text-gray-700 capitalize dark:text-gray-200">Email</label>
                            <input placeholder="mariadolores@gmail.com" type="email" id="email" name="email" value="{{ old('email') }}" class="block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-lime-c100 border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40">
                            @error('email')
                            <x-incomplete-form-error :message="$message"></x-incomplete-form-error>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="mt-4">
                            <label for="phone" class="block text-sm text-gray-700 capitalize dark:text-gray-200">Teléfono</label>
                            <input placeholder="" type="number" name="phone" value="{{ old('phone') }}" class="block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-lime-c100 border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40">
                            @error('phone')
                            <x-incomplete-form-error :message="$message"></x-incomplete-form-error>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="mt-4">
                            <label for="country" class="block text-sm text-gray-700 capitalize dark:text-gray-200">País</label>
                            <select name="country" id="country" class="country block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-lime-c100 border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40" placeholder="Seleccione país">
                                <option selected="" value="">Seleccione País</option>
                                @foreach ($countries as $country)
                                <option value="{{ $country->id }}">{{ $country->name }}</option>
                                @endforeach
                            </select>
                            @error('country')
                            <x-incomplete-form-error :message="$message"></x-incomplete-form-error>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="mt-4">
                            <label for="state" class="block text-sm text-gray-700 capitalize dark:text-gray-200">Región</label>
                            <select name="region" id="region" class="region block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-lime-c100 border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40" placeholder="Seleccione región">
                                <option selected="" value="">Seleccione Región</option>
                            </select>
                            @error('region')
                            <x-incomplete-form-error :message="$message"></x-incomplete-form-error>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="mt-4">
                            <label for="ciudad" class="block text-sm text-gray-700 capitalize dark:text-gray-200">Ciudad</label>
                            <input placeholder="" name="city" value="{{ old('city') }}" class="block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-lime-c100 border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40">
                            @error('city')
                            <x-incomplete-form-error :message="$message"></x-incomplete-form-error>
                            @enderror
                        </div>

                    </div>
                    <div class="flex justify-end mt-6">
                        <button type="submit" class="rounded-full border-2 bg-orange-c500 border-orange-c500 hover:bg-transparent hover:text-orange-c500 text-white text-xl p-4">
                            Descargar Libro
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    </div>
    <!-- FORM: END -->
    <div class="main-title text-slate-400 text-5xl text-left p-6 lg:px-24">Otros artículos
        <div class="blog-articles p-0 lg:p-10 grid grid-cols-1 sm:grid-cols-1 md:grid-cols-3 lg:grid-cols-3 xl:grid-cols-3 gap-5">
            @foreach ($publications as $publication)
            <x-publications-showcase :name=" $publication->name" :image="$publication->image" :abstract="$publication->abstract" :id="$publication->id" :createdAt="$publication->published" :slug="$publication->slug" />
            @endforeach
        </div>
        <div class="flex justify-center place-content-center p-6">
            {!!$publications->links('vendor.pagination.agroamigable')!!}
        </div>
    </div>

</body>