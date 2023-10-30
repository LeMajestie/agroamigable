<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>

bienvenido a las pruebas

<button class="bg-red-300 sm:bg-blue-300 md:bg-gray-300 lg:bg-green-300 xl:bg-orange-300 hover:bg-blue-500 text-white font-bold py-2 px-4 rounded">
  Button
</button>