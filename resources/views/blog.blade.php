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
    <title class="text-2xl lg:text-5xl text-left">{{ $publicationSelected[0]->name }}
    </title>
    <meta name="description" content="{{ $publicationSelected[0]->name }}" />
    <meta property="og:title" content="{{ $publicationSelected[0]->name }}" />
    <meta property="og:url" content="https://www.agroamigable.co" />
    <meta property="og:description" content="{{ $publicationSelected[0]->author }}" />
    <meta property="og:image" content="{{ url('/images/publications_images/' . $publicationSelected[0]->image) }}" />
</head>

<body class="">
    <x-agroamigable.sections.navbarblog></x-agroamigable.sections.navbarblog>
    <div class="pt-12 px-6 sm:px-32 md:px-32 lg:px-32 xl:px-48">
        <title class="text-2xl lg:text-5xl text-left">{{ $publicationSelected[0]->name }}
        </title>
        <meta name="description" content="{{ $publicationSelected[0]->name }}" />
        <meta property="og:title" content="{{ $publicationSelected[0]->name }}" />
        <meta property="og:url" content="https://www.example.com/webpage/" />
        <meta property="og:description" content="Contenido para el campo y la agricultura" />
        <meta property="og:image" content="{{ url('/images/publications_images/' . $publicationSelected[0]->image) }}" />
        <center class="py-10">
            <div class="box shadow-lg overflow-hidden">
                <img class="object-cover h-full w-full" src="{{ url('/images/publications_images/' . $publicationSelected[0]->image) }}" alt="Imagen referente a la agricultura relacionada con la publicación">
            </div>
        </center>
        <div class=" text-slate-400 text-left p-2 sm:px-32 md:px-32 lg:px-32 xl:px-48 border-t border-b text-xs lg:text-sm">
            Publicado {{ $publicationSelected[0]->created_at }}
        </div>
        <div class=" text-slate-400 text-left p-2 sm:px-32 md:px-32 lg:px-32 xl:px-48 border-t border-b text-xs lg:text-sm">{{ $publicationSelected[0]->author }}
        </div>
        <div class="text-black hidden lg:block text-3xl text-left p-6 sm:px-28 md:px-28 lg:px-28 xl:px-40">{{ $publicationSelected[0]->name }}
        </div>
        <div class="text-justify p-6 sm:px-28 md:px-28 lg:px-28 xl:px-40 text-black">
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
                    <textarea placeholder="¡Déjanos aquí tu comentario!" rows="5" cols="70" type="text" name="comment" value="{{ old('comment') }}" class="w-full text-gray-600 placeholder-gray-400 bg-lime-c100 border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40"></textarea>
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
                @if ($comments_paginated->isEmpty())
                <p class=" text-center align-middle pt-12">¡Sé el primero en comentar!</p>
                @else
                @foreach ($comments_paginated as $comment_paginated)
                <x-agroamigable.boxes.comment :name="$comment_paginated->name" :comment="$comment_paginated->comment" :date="$comment_paginated->created_at" />
                @endforeach
                <div class="flex justify-center place-content-center p-6">
                    {!! $comments_paginated->links('vendor.pagination.agroamigable-comments') !!}
                </div>
                @endif
            </div>
        </div>
        <!-- FORM: END -->
        <!-- OTHER ARTICLES SECTION -->
        <div class="main-title text-slate-400 text-2xl lg:text-5xl text-left py-6 lg:py-12">Otros artículos
            <div class="blog-articles p-0 lg:p-10 grid grid-cols-1 sm:grid-cols-1 md:grid-cols-3 lg:grid-cols-3 xl:grid-cols-3 gap-5">
                @foreach ($publications as $publication)
                <x-publications-showcase :name=" $publication->name" :image="$publication->image" :abstract="$publication->abstract" :id="$publication->id" :createdAt="$publication->published" :slug="$publication->slug" />
                @endforeach
            </div>
            <div class="flex justify-center place-content-center p-6">
                {!!$publications->links('vendor.pagination.agroamigable')!!}
            </div>
        </div>
        <!-- OTHER ARTICLES SECTION END -->
    </div>
    </div>
</body>