<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-gradient-to-tl from-lime-c100 to-white">
    <div class="flex justify-around overflow-x-hidden">
        <div class="w-2/3"></div>
        <div class="w-1/3">
            <img class="hidden lg:block h-auto max-w-md absolute z-10" src="{{ url('/images/Vector 3.png') }}"
                alt="Image" />
            <img class="hidden lg:block h-auto max-w-md absolute z-0"
                src="{{ url('/images/elaine-casap-qgHGDbbSNm8-unsplash-removebg-preview 1.png') }}" alt="Image" />
        </div>
    </div>
    <div class="flex justify-around overflow-x-hidden">
        <div class="hidden lg:block lg:w-1/3"></div>
        <div class="lg:w-2/3">
            <img class="h-auto scale-90 pt-[20rem] pl-32 absolute z-20 hidden lg:block"
                src="{{ url('/images/iStock-1200207338df 1.png') }}" alt="Image" />
        </div>
    </div>
</body>
