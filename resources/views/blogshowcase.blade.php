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

<body class="">
    <x-agroamigable.sections.navbarblog></x-agroamigable.sections.navbarblog>
    <div class="pt-12 px-6 sm:px-32 md:px-32 lg:px-32 xl:px-48 flex flex-col gap-6 lg:gap-12">
        <div class="main-title text-lime-c900 text-2xl lg:text-4xl text-left">Todas las publicaciones del Blog.</div>
        <x-agroamigable.boxes.blog-categories></x-agroamigable.boxes.blog-categories>
        <div class="blog-articles p-0 lg:p-10 grid grid-cols-1 sm:grid-cols-1 md:grid-cols-3 lg:grid-cols-3 xl:grid-cols-3 gap-5">
            @foreach ($publications as $publication)
            <x-publications-showcase :name=" $publication->name" :image="$publication->image" :abstract="$publication->abstract" :id="$publication->id" :createdAt="$publication->published" :slug="$publication->slug" />
            @endforeach
        </div>
        <div class="flex justify-center place-content-center p-6">
            {!!$publications->links('vendor.pagination.agroamigable')!!}
        </div>
        <div class="flex flex-col gap-4">
            <div class="main-title text-slate-400 text-sm lg:text-md text-left font-semibold">AUTHORS</div>
            <div class="main-title text-black text-2xl lg:text-5xl text-left">Nuestros contribuidores</div>
            <div class="main-title text-slate-400 text-sm lg:text-md text-left lg:w-1/2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius enim in eros elementum tristique. Duis cursus, mi quis viverra ornare, eros dolor interdum.</div>
        </div>
        <div class="p-6 lg:p-10 flex lg:flex-row gap-8 flex-col">
            <x-agroamigable.cards.profile imageUrl="/images/authors/ferley.png" name="Ferley Henao Ospina" description="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius enim in eros elementum tristique. Duis cursus, mi quis viverra ornare, eros dolor interdum." body=""></x-agroamigable.cards.profile>
            <x-agroamigable.cards.profile imageUrl="/images/authors/nelson.png" name="Nelson Orrego" description="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius enim in eros elementum tristique. Duis cursus, mi quis viverra ornare, eros dolor interdum." body=""></x-agroamigable.cards.profile>
            <x-agroamigable.cards.profile imageUrl="/images/authors/daniel.png" name="Daniel Tirado" description="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius enim in eros elementum tristique. Duis cursus, mi quis viverra ornare, eros dolor interdum." body=""></x-agroamigable.cards.profile>
        </div>

        <!-- OTHER ARTICLES SECTION END -->
    </div>
</body>