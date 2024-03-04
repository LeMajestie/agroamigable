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
        <x-agroamigable.boxes.invitation></x-agroamigable.boxes.invitation>
    </div>
    <!-- FORM: COMMENT -->
    <div id="comments-section" class="w-full py-6 sm:px-32 md:px-32 lg:px-32 xl:px-48 flex flex-col lg:flex-row gap-8 ">
        <form action="{{ route('comments.store') }}" method="POST" enctype="multipart/form-data" class="w-full lg:w-1/3 bg-white border-2 border-lime-c100 flex flex-col shadow-lg rounded-xl p-6 gap-2 place-content-center">
            @csrf
            <div>
            <label for="name" class="block text-sm text-gray-700 capitalize dark:text-gray-200">Nombres</label>
            <input placeholder="Escribe aquí tu nombre" type="text" name="name" value="{{ old('name') }}" class="w-full text-gray-600 placeholder-gray-400 bg-lime-c100 border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40">
            @error('name')
            <x-incomplete-form-error :message="$message"></x-incomplete-form-error>
            @enderror
            </div>
            <div>
            <label for="email" class="block text-sm text-gray-700 capitalize dark:text-gray-200">Email</label>
            <input placeholder="Escribe aquí tu email" type="email" id="email" name="email" value="{{ old('email') }}" class="w-full text-gray-600 placeholder-gray-400 bg-lime-c100 border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40">
            @error('email')
            <x-incomplete-form-error :message="$message"></x-incomplete-form-error>
            @enderror
            </div>
            <div>
            <label for="comment" class="block text-sm text-gray-700 capitalize dark:text-gray-200">Comentario</label>
            <input placeholder="¡Déjanos aquí tu comentario!" type="text" name="comment" value="{{ old('comment') }}" class="w-full text-gray-600 placeholder-gray-400 bg-lime-c100 border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40">
            @error('comment')
            <x-incomplete-form-error :message="$message"></x-incomplete-form-error>
            @enderror
            </div>
            <div>
            <input placeholder="" type="hidden" name="blogid" value="{{ $publicationSelected[0]->id }}">
            @error('blogid')
            <x-incomplete-form-error :message="$message"></x-incomplete-form-error>
            @enderror
            </div>
            <div>
            <input placeholder="" type="hidden" name="slug" value="{{ $publicationSelected[0]->slug }}">
            @error('slug')
            <x-incomplete-form-error :message="$message"></x-incomplete-form-error>
            @enderror
            </div>
            <button type="submit" class="rounded-full border-2 bg-orange-c500 border-orange-c500 hover:bg-transparent hover:text-orange-c500 text-white text-xl p-4 mx-auto">
                Comentar
            </button>
        </form>
        <div class="w-full lg:w-2/3 bg-white">
            <div class="text-lg lg:text-xl font-bold text-center">Comentarios</div>
            @foreach ($comments_paginated as $comment_paginated)
            <x-agroamigable.boxes.comment :name=" $comment_paginated->name" :comment="$comment_paginated->comment" :date="$comment_paginated->created_at"/>
            @endforeach
            <div class="flex justify-center place-content-center p-6">
                {!!$comments_paginated->links('vendor.pagination.agroamigable-comments')!!}
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